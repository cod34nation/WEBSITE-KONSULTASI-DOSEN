<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cauth extends CI_Controller {

    function __construct() {
        parent::__construct();        
    }

    public function index($error = NULL) {
        
        $data = array(
            'action' => site_url('Cauth/login'),
            'error' => $error
        );
        $this->load->view('login',$data);
    }

    public function login() {
        $this->load->model('Auth','model');
        $login_admin = $this->model->login_admin($this->input->post('username'), md5($this->input->post('password')), "admin");
        if ($login_admin == 1) {
            //admin
            $row = $this->model->data_admin($this->input->post('username'), md5($this->input->post('password')),"admin");
            $data = array(
                'konsul' => TRUE,
                'nama' => $row->nama,
                'username' => $row->username,
                'role' => $row->role
            );
            $this->session->set_userdata($data);

            if($row->role=="admin"){
                redirect(site_url('admin/Cadmin'));
            }

        }
        else{
            $login_admin = $this->model->login_dsn($this->input->post('username'), md5($this->input->post('password')), "dsn");
            if ($login_admin == 1) {
                //dsn
                $row = $this->model->data_dsn($this->input->post('username'), md5($this->input->post('password')),"dsn");
                $data = array(
                    'konsul' => TRUE,
                    'nama' => $row->nama,
                    'nip' => $row->nip,
                    'role' => $row->role
                );
                $this->session->set_userdata($data);

                if($row->role=="dosen"){
                    redirect(site_url('dsn/Cdsn'));
                }

            }
            else{
                $login_admin = $this->model->login_mhs($this->input->post('username'), md5($this->input->post('password')), "mhs");
                if ($login_admin == 1) {
                    //mhs
                    $row = $this->model->data_mhs($this->input->post('username'), md5($this->input->post('password')),"mhs");
                    $data = array(
                        'konsul' => TRUE,
                        'nama' => $row->nama,
                        'nim' => $row->nim,
                        'role' => $row->role
                    );
                    $this->session->set_userdata($data);

                    if($row->role=="mahasiswa"){
                        redirect(site_url('mhs/Cmhs'));
                    }

                }
                else {
                    $error = '<div class="alert alert-error"> <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><center><font color="red">Warning!</center></strong><center>Masukan ada yang kurang tepat!</font></center></div>';
                    $this->index($error);
                }
            }
        }
    }

    function logout() {
        $this->session->sess_destroy();
        
        redirect(site_url('Cauth'));
    }
}
