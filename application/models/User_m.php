<?php

class User_m extends MY_Model
{

	public function __construct()
	{
		parent::__construct();

		$this->table_name = "data_sekolah";
	}

	public function semua()
	{
		$this->db->select('*');
		$this->db->from('data_sekolah');
		$this->db->order_by('id', 'DESC');

		return $this->db->get();
	}

}
