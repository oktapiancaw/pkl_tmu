<?php

class peserta_model extends MY_Model
{

	public function __construct()
	{
		parent::__construct();

		$this->table_name = "data_peserta";
	}

	public function semua()
	{
		$this->db->select('*');
		$this->db->from('data_peserta');
		$this->db->order_by('id', 'DESC');

		return $this->db->get();
	}
	public function dataPerSekolah($id)
	{

		$this->db->select('*');
		$this->db->where('id_data_kelompok', $id);
		$this->db->from('data_peserta');
		$this->db->order_by('id', 'DESC');

		return $this->db->get();
	}
	public function anggota($id = NULL)
	{
		$sql = "SELECT * FROM `data_kelompok` ";

		if ($id != NULL) {
			$sql .= "WHERE id_kelompok = " . $id . "";
		}
		return $this->exec_query($sql);
	}
}
