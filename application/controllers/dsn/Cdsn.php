<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cdsn extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('dsn/Konsul','model');
    }

    public function index()
    {
        $this->load->view('head_dsn');
        $data['history'] = $this->model->tampilDosenPengajuan();
        $this->load->view('dsn/dsn',$data);
        $this->load->view('foot');
    }

    public function konsul()
    {
        $this->load->view('head_dsn');
        $this->load->view('dsn/konsul');
        $this->load->view('foot');
    }

    public function profil()
    {
        $this->load->view('head_dsn');
        $data['profil'] = $this->model->tampil_profil();
        $this->load->view('dsn/profil',$data);
        $this->load->view('foot');
    }

    public function coment()
    {
        $id = $this->input->post('id');
        $data['komentar'] = $this->model->get_by_id($id);
        $data['coment'] = $this->model->coment($id);
        $this->load->view('dsn/coment',$data);
    }

    public function coment_mahasiswa()
    {
        $id = $this->input->post('id');
        $data['komentar'] = $this->model->get_by_id_dosen($id);
        $data['coment'] = $this->model->coment($id);
        $this->load->view('mhs/coment',$data);
    }

    public function komentari()
    {
        $id = $this->input->post('id');
        $komentar = $this->input->post('komentar');

        if ($this->session->userdata('role')=="mahasiswa") {
            $data = array(
                'nim' => $this->session->userdata('nim'),
                'komentar' => $komentar,
                'idPengajuan' => $id
            );
            $this->db->insert('komentar', $data);    
        }else{
            $data = array(
                'nip' => $this->session->userdata('nip'),
                'komentar' => $komentar,
                'idPengajuan' => $id
            );
            $this->db->insert('komentar', $data);
            $this->model->point('terima', $this->session->userdata('nip'));
        }
        

        $data['coment'] = $this->model->coment($id);
        $this->load->view('dsn/isiComent',$data);
    }

    public function komentari_mahasiswa()
    {
        $id = $this->input->post('id');
        $komentar = $this->input->post('komentar');

        if ($this->session->userdata('role')=="mahasiswa") {
            $data = array(
                'nim' => $this->session->userdata('nim'),
                'komentar' => $komentar,
                'idPengajuan' => $id
            );
            $this->db->insert('komentar', $data);    
        }else{
            $data = array(
                'nip' => $this->session->userdata('nip'),
                'komentar' => $komentar,
                'idPengajuan' => $id
            );
            $this->db->insert('komentar', $data);
            $this->model->point('terima', $this->session->userdata('nip'));
        }
        

        $data['coment'] = $this->model->coment($id);
        $this->load->view('mhs/isiComent',$data);
    }

    public function terima()
    {        
        $nip = $this->input->post('nip');
        $data = array(
                'status' => "1",
            );
        $insert = $this->model->update(array('idPengajuan' => $this->input->post('id')), $data, $nip, 'terima');
        echo json_encode(array("status" => TRUE));
    }

    public function tolak()
    {
        $nip = $this->input->post('nip');
        $data = array(
                'status' => "0",
            );
        $insert = $this->model->update(array('idPengajuan' => $this->input->post('id')), $data, $nip, 'tolak');
        echo json_encode(array("status" => TRUE));
    }
}
