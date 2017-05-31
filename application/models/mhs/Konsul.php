<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsul extends CI_Model {

	var $table = 'pengajuan';
	var $column = array('idPengajuan','nim','nip','tgl','jam','jdl','ket','waktuPengajuan','status');

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function tampilDosen()
	{
		$this->db->from('dsn');
		$sql = $this->db->get();
		return $sql->result();
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function tampilPengajuan()
	{
		$this->db->select('pengajuan.*, dsn.nama');
		$this->db->from('pengajuan');
		$this->db->join('dsn','pengajuan.nip=dsn.nip','left');
		$this->db->where('nim',$this->session->userdata('nim'));
		$sql = $this->db->get();
		return $sql->result();
	}

	public function tampil_profil()
	{
		$this->db->from('mhs');
		$this->db->where('nim',$this->session->userdata('nim'));
		$query = $this->db->get();
		return $query->row();
	}

	// public function update($where, $data)
	// {
	// 	$this->db->update($this->table, $data, $where);
	// 	return $this->db->affected_rows();
	// }

	// public function delete_by_id($id)
	// {
	// 	$this->db->where('id_namabyr', $id);
	// 	$this->db->delete($this->table);
	// }
}