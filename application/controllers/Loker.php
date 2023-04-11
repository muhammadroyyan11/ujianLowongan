<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loker extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // cek_login();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Base_model', 'base');
        $this->load->library('pagination');
    }

    public function index()
    {
        $data = [
            'title'     => 'Lowongan Open'
        ];

        $this->template->load('front/template', 'front/lowongan/data', $data);
    }
}
