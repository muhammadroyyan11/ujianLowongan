<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in()) {
			redirect('auth');
		}
		$this->load->library(['datatables', 'form_validation']); // Load Library Ignited-Datatables
		$this->load->model('Master_model', 'master');
		$this->form_validation->set_error_delimiters('', '');
	}

	public function output_json($data, $encode = true)
	{
		if ($encode) $data = json_encode($data);
		$this->output->set_content_type('application/json')->set_output($data);
	}

	public function index()
	{
		$data = [
			'user' 		=> $this->ion_auth->user()->row(),
			'judul'		=> 'Kelola Lowongan',
			'subjudul' 	=> 'Lowongan pekerjaan'
		];
		$this->load->view('_templates/dashboard/_header.php', $data);
		$this->load->view('master/lowongan/data');
		$this->load->view('_templates/dashboard/_footer.php');
	}

	public function data()
	{
		$this->output_json($this->master->getDataLowongan(), false);
	}

	public function add()
	{
		$data = [
			'user' 		=> $this->ion_auth->user()->row(),
			'judul'		=> 'Tambah Lowongan',
			'subjudul'	=> 'Tambah Data Lowongan',
			'banyak'	=> $this->input->post('banyak', true),
			'bagian'	=> $this->master->getBagian()->result()
		];
		$this->load->view('_templates/dashboard/_header.php', $data);
		$this->load->view('master/lowongan/add');
		$this->load->view('_templates/dashboard/_footer.php');
	}

	public function edit()
	{
		$chk = $this->input->post('checked', true);
		if (!$chk) {
			redirect('admin/lowongan');
		} else {
			$lowongan = $this->master->getLowonganById($chk);
			$data = [
				'user' 		=> $this->ion_auth->user()->row(),
				'judul'		=> 'Edit Lowongan',
				'subjudul'	=> 'Edit Data Lowongan',
				'jurusan'	=> $this->master->getAllJurusan(),
				'lowongan'		=> $lowongan
			];
			$this->load->view('_templates/dashboard/_header.php', $data);
			$this->load->view('master/lowongan/edit');
			$this->load->view('_templates/dashboard/_footer.php');
		}
	}

	public function save()
	{
		$rows = count($this->input->post('nama_lowongan', true));
		$mode = $this->input->post('mode', true);
		for ($i = 1; $i <= $rows; $i++) {
			$nama_lowongan 	= 'nama_lowongan[' . $i . ']';
			$this->form_validation->set_rules($nama_lowongan, 'Lowongan', 'required');
			$this->form_validation->set_rules($jurusan_id, 'Jurusan', 'required');
			$this->form_validation->set_message('required', '{field} Wajib diisi');

			if ($this->form_validation->run() === FALSE) {
				$error[] = [
					$nama_lowongan 	=> form_error($nama_lowongan)
				];
				$status = FALSE;
			} else {
				if ($mode == 'add') {
					$insert[] = [
						'nama_lowongan' 	=> $this->input->post($nama_lowongan, true)
					];
				} else if ($mode == 'edit') {
					$update[] = array(
						'id_lowongan'		=> $this->input->post('id_lowongan[' . $i . ']', true),
						'nama_lowongan' 	=> $this->input->post($nama_lowongan, true)
					);
				}
				$status = TRUE;
			}
		}
		if ($status) {
			if ($mode == 'add') {
				$this->master->create('lowongan', $insert, true);
				$data['insert']	= $insert;
			} else if ($mode == 'edit') {
				$this->master->update('lowongan', $update, 'id_lowongan', null, true);
				$data['update'] = $update;
			}
		} else {
			if (isset($error)) {
				$data['errors'] = $error;
			}
		}
		$data['status'] = $status;
		$this->output_json($data);
	}

	public function delete()
	{
		$chk = $this->input->post('checked', true);
		if (!$chk) {
			$this->output_json(['status' => false]);
		} else {
			if ($this->master->delete('lowongan', $chk, 'id_lowongan')) {
				$this->output_json(['status' => true, 'total' => count($chk)]);
			}
		}
	}

	public function lowongan_by_jurusan($id)
	{
		$data = $this->master->getlowonganByJurusan($id);
		$this->output_json($data);
	}

	public function import($import_data = null)
	{
		$data = [
			'user' => $this->ion_auth->user()->row(),
			'judul'	=> 'lowongan',
			'subjudul' => 'Import lowongan',
			'jurusan' => $this->master->getAllJurusan()
		];
		if ($import_data != null) $data['import'] = $import_data;

		$this->load->view('_templates/dashboard/_header', $data);
		$this->load->view('master/lowongan/import');
		$this->load->view('_templates/dashboard/_footer');
	}

	public function preview()
	{
		$config['upload_path']		= './uploads/import/';
		$config['allowed_types']	= 'xls|xlsx|csv';
		$config['max_size']			= 2048;
		$config['encrypt_name']		= true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('upload_file')) {
			$error = $this->upload->display_errors();
			echo $error;
			die;
		} else {
			$file = $this->upload->data('full_path');
			$ext = $this->upload->data('file_ext');

			switch ($ext) {
				case '.xlsx':
					$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
					break;
				case '.xls':
					$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
					break;
				case '.csv':
					$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
					break;
				default:
					echo "unknown file ext";
					die;
			}

			$spreadsheet = $reader->load($file);
			$sheetData = $spreadsheet->getActiveSheet()->toArray();
			$data = [];
			for ($i = 1; $i < count($sheetData); $i++) {
				$data[] = [
					'lowongan' => $sheetData[$i][0],
					'jurusan' => $sheetData[$i][1]
				];
			}

			unlink($file);

			$this->import($data);
		}
	}
	public function do_import()
	{
		$input = json_decode($this->input->post('data', true));
		$data = [];
		foreach ($input as $d) {
			$data[] = ['nama_lowongan' => $d->lowongan, 'jurusan_id' => $d->jurusan];
		}

		$save = $this->master->create('lowongan', $data, true);
		if ($save) {
			redirect('lowongan');
		} else {
			redirect('lowongan/import');
		}
	}
}
