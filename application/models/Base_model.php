<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Base_model extends CI_Model
{

    public function getUser($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }

    public function joinCategory($order, $where)
    {
        $this->db->select('*');
        $this->db->from('cash_balance');
        $this->db->join('categori', 'categori.id_categori = cash_balance.category');
        $this->db->order_by($order, 'DESC');
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
    }

    public function joinCategory2($order, $where, $range = null)
    {
        $this->db->select('*');
        $this->db->from('cash_balance');
        $this->db->join('categori', 'categori.id_categori = cash_balance.category');
        $this->db->join('user', 'user.id_user = cash_balance.id_user');
        $this->db->order_by($order, 'DESC');
        $this->db->where($where);

        if ($range != null) {
            $this->db->where('date' . ' >=', $range['mulai']);
            $this->db->where('date' . ' <=', $range['akhir']);
        }
        // return $this->db->get('barang_masuk bm')->result_array();
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function getUsers($id)
    {
        /**
         * ID disini adalah untuk data yang tidak ingin ditampilkan. 
         * Maksud saya disini adalah 
         * tidak ingin menampilkan data user yang digunakan, 
         * pada managemen data user
         */
        $this->db->where('id_user !=', $id);
        return $this->db->get('user')->result_array();
    }

    public function get($table)
    {
        $sql = $this->db->get($table);
        return $sql;
    }

    public function getKartikel($id = null)
    {
        $this->db->select('*');
        $this->db->from('kartikel');
        $this->db->order_by('nama', 'ASC');
        if ($id != null) {
            $this->db->where('id_kartikel', $id);
        }
        $query = $this->db->get();

        return $query;
    }

    public function getKProduk($id = null)
    {
        $this->db->select('*');
        $this->db->from('kproduk');
        $this->db->order_by('nama', 'ASC');
        if ($id != null) {
            $this->db->where('id_kproduk', $id);
        }
        $query = $this->db->get();

        return $query;
    }

    public function getBarang($id = null)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->order_by('name', 'ASC');
        if ($id != null) {
            $this->db->where('id_barang', $id);
        }
        $query = $this->db->get();

        return $query;
    }

    public function getOutlet($id = null)
    {
        $this->db->select('*');
        $this->db->from('outlet');
        $this->db->order_by('nama', 'ASC');
        if ($id != null) {
            $this->db->where('id_outlet', $id);
        }
        $query = $this->db->get();

        return $query;
    }

    public function getArtikel($id = null)
    {
        $this->db->select('*');
        $this->db->from('posting');
        $this->db->order_by('judul', 'ASC');

        if ($id != null) {
            $this->db->where('id_posting', $id);
        }

        $query = $this->db->get();

        return $query;
    }

    public function editBarang($post)
    {
        $params['name'] = $post['nama_barang'];
        // 
        $params['link_tokped'] = $post['link_tokped'];
        $params['harga'] = $post['harga'];
        if (!empty($post['description'])) {
            $params['description'] = $post['description'];
        }
        $this->db->where('id_barang', $post['id_barang']);
        $this->db->update('barang', $params);
    }

    public function count($table)
    {
        return $this->db->get($table)->num_rows();
    }

    function data($table, $number, $offset)
    {
        $this->db->order_by('id_barang', 'desc');
        $query = $this->db->get($table, $number, $offset)->result();
        return $query;
    }

    public function getOrder()
    {
        // $login = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('kartikel');
        $this->db->where('isActive', '1');
        $query = $this->db->get();
        return $query;
    }

    public function getOrderProduk()
    {
        // $login = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('kproduk');
        $this->db->where('isActive', '1');
        $query = $this->db->get();
        return $query;
    }

    public function getCash($table, $order)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order, 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function get_barang()
    {
        // $tanggal = date('Y-m-d');
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->order_by('id_barang', 'DESC');
        $this->db->limit(5);
        $query = $this->db->get();
        return $query;
    }

    public function get_artikel()
    {
        // $tanggal = date('Y-m-d');
        $this->db->select('*');
        $this->db->from('posting');
        $this->db->order_by('id_posting', 'DESC');
        $this->db->join('kartikel', 'kartikel.id_kartikel = posting.id_kartikel');
        $this->db->join('user', 'user.id_user = posting.user');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query;
    }

    public function get_category($table, $number = null, $offset = null, $id)
    {
       // $this->db->select('*');
        // $this->db->from('posting');
        $this->db->order_by('id_posting', 'desc');
        // $this->db->join('kartikel', 'kartikel.id_kartikel = posting.id_kartikel');
        // $this->db->join('user', 'user.id_user = posting.user');
        // $this->db->order_by($order, $az);

        $this->db->where('id_kartikel', $id);
        $sql = $this->db->get($table, $number, $offset)->result();
        return $sql;
    }

    public function getMax($table, $field, $kode = null)
    {
        $this->db->select_max($field);
        if ($kode != null) {
            $this->db->like($field, $kode, 'after');
        }
        return $this->db->get($table)->row_array()[$field];
    }

    public function get_max_id($table, $field, $where)
    {
        $this->db->select_max($field);
        $this->db->where($where);
        $sql = $this->db->get($table);
        return $sql;
    }
    public function get_group_id($table, $group_by)
    {
        $this->db->group_by($group_by);
        $this->db->order_by($group_by . " DESC");
        $sql = $this->db->get($table);
        return $sql;
    }
    public function add($table, $data)
    {
        $this->db->insert($table, $data);
    }
    public function del($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function getAll($id = null)
    {
        // $nowDate = date('Y-m-d');
        $this->db->select('*');
        $this->db->from('antrian_loket');
        $this->db->join('loket', 'loket.loket_id=antrian_loket.loket_id');
        // $this->db->where('tgl_antrian_loket');
        if ($id != null) {
            $this->db->where('id_antrian_loket', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getPosting($seo_judul)
    {
        $this->db->select('*');
        $this->db->from('posting');
        $this->db->join('kartikel', 'kartikel.id_kartikel = posting.id_kartikel');
        $this->db->join('user', 'user.id_user = posting.user');
        $this->db->where('seo_judul', $seo_judul);
        return $this->db->get()->row();
    }

    public function getPosting2()
    {
        $this->db->select('*');
        $this->db->from('posting');
        $this->db->order_by('id_posting', 'ASC');
        $this->db->join('kartikel', 'kartikel.id_kartikel = posting.id_kartikel');
        // $this->db->where('seo_judul', $seo_judul);
        return $this->db->get();
    }

    public function getProduk($seo_name)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('kproduk', 'kproduk.id_kproduk = barang.id_kproduk');
        $this->db->where('seo_name', $seo_name);
        return $this->db->get()->row();
    }


    public function get_join($table, $number = null, $offset = null)
    {
        // $this->db->select('*');
        // $this->db->from('posting');
        $this->db->order_by('id_posting', 'desc');
        $this->db->join('kartikel', 'kartikel.id_kartikel = posting.id_kartikel');
        $this->db->join('user', 'user.id_user = posting.user');
        // $this->db->order_by($order, $az);
        $sql = $this->db->get($table, $number, $offset)->result();
        return $sql;
    }
    public function get_join2()
    {
        $login = $this->session->userdata('id_user');
        $this->db->select('user.id, onlineform.date, onlineform.day, onlineform.in1, 
        onlineform.out1, onlineform.in2, onlineform.out2');
        $this->db->from('user');
        $this->db->join('cash_balance', 'cash_balace.id = user.id');
        $this->db->where('id_user', $login);
        // $this->db->order_by($order, $az);
        $sql = $this->db->get();
        return $sql;
    }
    public function join_multiple($table, $join, $pq, $join1, $pq1, $order, $az)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($join, $pq);
        $this->db->join($join1, $pq1);
        $this->db->order_by($order, $az);
        $sql = $this->db->get();
        return $sql;
    }
    public function get_id($table, $where)
    {
        $this->db->where($where);
        $sql = $this->db->get($table);
        return $sql;
    }
    public function fetch_data($table, $field, $num, $offset)
    {
        empty($offset) ? $offset = 0 : $offset;

        $this->db->query("SET @no=" . $offset);
        $this->db->select('*,(@no:=@no+1) AS nomor');
        $this->db->group_by($field);
        $this->db->order_by($field, 'DESC');

        $data = $this->db->get($table, $num, $offset);

        return $data->result();
    }

    public function update($table, $pk, $id, $data)
    {
        $this->db->where($pk, $id);
        return $this->db->update($table, $data);
    }

    public function insert($table, $data, $batch = false)
    {
        return $batch ? $this->db->insert_batch($table, $data) : $this->db->insert($table, $data);
    }

    public function delete($table, $pk, $id)
    {
        return $this->db->delete($table, [$pk => $id]);
    }

    public function getDefaultValues()
    {
        return [
            'judul'        => '',
            'seo_judul'    => '',
            'konten'      => '',
            'description'      => '',
            'featured'     => 'N',
            'choice'       => 'N',
            'thread'       => 'N',
            'id_category'  => '',
            'photo'        => '',
            'is_active'    => '1',
            'date'         => ''
        ];
    }

    public function addEvent($post)
    {
        $params = [
            'nama_event' => $post['nama_event'],
            'description' => $post['description'],
            'tanggal' => $post['tanggal'],
            'lokasi' => $post['lokasi'],
            'foto_pamflet' => $post['image']
        ];
        $this->db->insert('tbl_tentang_kami', $params);
    }
}
