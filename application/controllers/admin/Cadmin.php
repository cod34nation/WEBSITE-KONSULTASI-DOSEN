<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadmin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Admin','model');
    }

    public function index()
    {
        $this->load->view('head_admin');
        $data['dosen'] = $this->model->dosen();
        $this->load->view('admin/admin',$data);
        $this->load->view('foot');
    }

    public function informasi()
    {
        $this->load->view('head_admin');
        $data['admin'] = $this->model->informasi();
        $this->load->view('admin/informasi',$data);
        $this->load->view('foot');
    }

    public function profil_mhs()
    {
        $this->load->view('head_admin');
        $this->load->view('admin/profilMahasiswa');
        $this->load->view('foot');
    }

    public function profil_dsn()
    {
        $this->load->view('head_admin');
        $this->load->view('admin/profilDosen');
        $this->load->view('foot');
    }

    public function simpan_dsn()
    {
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $matkul = $this->input->post('matkul');
        $tlp = $this->input->post('tlp');
        $email = $this->input->post('email');
        $fb = $this->input->post('fb');
        $pwd = md5($this->input->post('pwd'));

        $data = array(
            'nip' => $nip,
            'nama' => $nama,
            'matkul' => $matkul,
            'tlp' => $tlp,
            'email' => $email,
            'fb' => $fb,
            'password' => $pwd,
            );
        $insert = $this->model->save_dsn($data);
        echo json_encode(array("status" => TRUE));
    }

    public function simpan_mhs()
    {
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $angkatan = $this->input->post('angkatan');
        $tlp = $this->input->post('tlp');
        $email = $this->input->post('email');
        $fb = $this->input->post('fb');
        $pwd = md5($this->input->post('pwd'));

        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'angkatan' => $angkatan,
            'tlp' => $tlp,
            'email' => $email,
            'fb' => $fb,
            'password' => $pwd,
            );
        $insert = $this->model->save_mhs($data);
        echo json_encode(array("status" => TRUE));
    }

}
