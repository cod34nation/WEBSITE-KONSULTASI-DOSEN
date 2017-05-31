<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cmhs extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mhs/Konsul','model');
        $this->load->model('admin/Admin','model_admin');
    }

    public function index()
    {
        $this->load->view('head_mhs');
        $data['history'] = $this->model->tampilPengajuan();
        $this->load->view('mhs/mhs',$data);
        $this->load->view('foot');
    }

    public function konsul()
    {
        $this->load->view('head_mhs');
        $data['dosen'] = $this->model->tampilDosen();
        $this->load->view('mhs/konsul',$data);
        $this->load->view('foot');
    }

    public function profil()
    {
        $this->load->view('head_mhs');
        $data['profil'] = $this->model->tampil_profil();
        $this->load->view('mhs/profil',$data);
        $this->load->view('foot');
    }

    public function comen()
    {
        $this->load->view('head_mhs');
        $this->load->view('mhs/comen');
        $this->load->view('foot');
    }

    public function infoadmin_mhs()
    {
        $this->load->view('head_mhs');
        $data['admin'] = $this->model_admin->informasi();
        $this->load->view('mhs/infoadmin',$data);
        $this->load->view('foot');
    }

    public function infoadmin_dsn()
    {
        $this->load->view('head_dsn');
        $data['admin'] = $this->model_admin->informasi();
        $this->load->view('dsn/infoadmin',$data);
        $this->load->view('foot');
    }
}
