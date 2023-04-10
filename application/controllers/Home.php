<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // cek_login();
        date_default_timezone_set('Asia/Jakarta');
        // $this->load->model('Auth_model', 'auth');
        $this->load->model('Base_model', 'base');
        $this->load->library('pagination');
    }

    public function index()
    {
        $data = [
            'title'     => 'Home'
        ];

        $this->template->load('front/template', 'front/dashboard/dashboard', $data);
    }
}
