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

	public function tampilDosenPengajuan()
	{
		$this->db->select('pengajuan.*, mhs.nama, mhs.angkatan');
		$this->db->from('pengajuan');
		$this->db->join('mhs','pengajuan.nim=mhs.nim','left');
		$this->db->where('nip',$this->session->userdata('nip'));
		$sql = $this->db->get();
		return $sql->result();
	}

	public function get_by_id($id)
	{
		$this->db->select('pengajuan.*, mhs.nama, mhs.angkatan');
		$this->db->from('pengajuan');
		$this->db->join('mhs','pengajuan.nim=mhs.nim','left');
		$this->db->where('idPengajuan',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function get_by_id_dosen($id)
	{
		$this->db->select('pengajuan.*, dsn.nama');
		$this->db->from('pengajuan');
		$this->db->join('dsn','pengajuan.nip=dsn.nip','left');
		$this->db->where('idPengajuan',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function update($where, $data, $nip, $pilihan)
	{
		$this->point($pilihan,$nip);
		$this->db->update("pengajuan", $data, $where);
		return $this->db->affected_rows();
	}

	public function point($pilihan, $nip)
	{
		$this->db->select('point');
		$this->db->from('dsn');
		$this->db->where('nip',$nip);
		$query = $this->db->get();
		$pl = (int)$query->row()->point;

		if ($pilihan=="terima") {
			$p = $pl+1;
		}elseif ($pilihan=="tolak") {
			$p = $pl-1;
		}


		$data = array(
				"point" => $p
			);
		$this->db->update("dsn", $data, array('nip' => $nip));
	}

	public function coment($idPengajuan)
	{
		$sql= '
			SELECT dsn.nama ndsn, mhs.nama nmhs, komentar.komentar, komentar.nim, komentar.nip, komentar.waktuKomen FROM komentar
			LEFT JOIN pengajuan ON komentar.idPengajuan=pengajuan.idPengajuan
			LEFT JOIN dsn on komentar.nip=dsn.nip
			LEFT JOIN mhs on komentar.nim=mhs.nim
			WHERE pengajuan.idPengajuan="'.$idPengajuan.'"';
		$hasil = $this->db->query($sql);
		return $hasil->result();
	}

	public function tampil_profil()
	{
		$this->db->from('dsn');
		$this->db->where('nip',$this->session->userdata('nip'));
		$query = $this->db->get();
		return $query->row();
	}
}