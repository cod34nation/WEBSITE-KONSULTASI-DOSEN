<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function dosen()
	{
		$this->db->from('dsn');
		$sql = $this->db->get();
		return $sql->result();
	}

	public function informasi()
	{
		$this->db->from('admin');
		$sql = $this->db->get();
		return $sql->result();
	}
	
	public function save_dsn($data)
	{
		$this->db->insert('dsn', $data);
		return $this->db->insert_id();
	}

	public function save_mhs($data)
	{
		$this->db->insert('mhs', $data);
		return $this->db->insert_id();
	}
}