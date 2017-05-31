<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {

    function login_admin($username,$password,$tabel) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query =  $this->db->get($tabel);
        return $query->num_rows();
    }

    function login_dsn($username,$password,$tabel) {
        $this->db->where('nip', $username);
        $this->db->where('password', $password);
        $query =  $this->db->get($tabel);
        return $query->num_rows();
    }

    function login_mhs($username,$password,$tabel) {
        $this->db->where('nim', $username);
        $this->db->where('password', $password);
        $query =  $this->db->get($tabel);
        return $query->num_rows();
    }

    //data
    function data_admin($username,$password,$tabel) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get($tabel)->row();
    }

    function data_dsn($username,$password,$tabel) {
        $this->db->where('nip', $username);
        $this->db->where('password', $password);
        return $this->db->get($tabel)->row();
    }

    function data_mhs($username,$password,$tabel) {
        $this->db->where('nim', $username);
        $this->db->where('password', $password);
        return $this->db->get($tabel)->row();
    }



}
