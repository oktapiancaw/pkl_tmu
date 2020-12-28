<?php

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('User_m');
	}

	/* start sekolah */
	public function index()
	{
		$data['semua_pengguna'] = $this->User_m->semua();
		$this->im_render->main('sekolah/datasekolah', $data);
	}

	public function tambah()
	{
		$this->im_render->main('sekolah/inputsekolah');
	}

	public function tambah_simpan()
	{
		$data = array(
			'nama_sekolah' => $this->input->post('nama_sekolah'),
			'alamat' => $this->input->post('alamat'),
			'no_tlpn' => $this->input->post('no_tlpn'),
		);


		$this->User_m->insert_data($data);

		redirect('user');
	}

	public function edit($id)
	{
		$data['data_sekolah'] = $this->User_m->get_filtered(array('id' => $id))->row();

		$this->im_render->main('sekolah/editsekolah', $data);
	}

	public function edit_simpan($id)
	{
		$data = array(
			'nama_sekolah' => $this->input->post('nama_sekolah'),
			'alamat' => $this->input->post('alamat'),
			'no_tlpn' => $this->input->post('no_tlpn')
		);

		$id = array('id' => $id);
		$this->User_m->update_data($data, $id);

		redirect(base_url());
	}

	public function hapus($id)
	{
		$id = array('id' => $id);
		$this->User_m->delete_data($id);

		redirect(base_url());
	}

	public function daftar()
	{
		$data['daftar_kelompok'] = $this->kelompok_model->get_filtered();
		$this->im_render->main('kelompok/datapeserta', $data);
	}
}
