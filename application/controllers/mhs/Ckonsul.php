<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ckonsul extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mhs/Konsul','model');
    }

    public function index()
    {
        $this->load->view('head_mhs');
        $this->load->view('mhs/mhs');
        $this->load->view('foot');
    }
    public function ajukan()
    {
        $data = array(
                'nip' => $this->input->post('nip'),
                'nim' => $this->session->userdata('nim'),
                'jdl' => $this->input->post('jdl'),
                'ket' => $this->input->post('ket'),
                'tgl' => $this->input->post('tgl'),
            );
        $insert = $this->model->save($data);
        echo json_encode(array("status" => TRUE));
    }
}
