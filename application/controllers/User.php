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

	public function simpan()
	{
		$this->form_validation->set_rules('nama_sekolah', 'Sekolah', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('no_tlpn', 'No Telepon', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->tambah();
		} else {
			$data = array(
				'nama_sekolah' => $this->input->post('nama_sekolah'),
				'alamat' => $this->input->post('alamat'),
				'no_tlpn' => $this->input->post('no_tlpn'),
			);


			$this->User_m->insert_data($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" id="non-mr" role="alert"><i class="fas fa-info-circle"></i>Sekolah telah ditambahkan</div>');

			redirect('datasekolah');
		}
	}

	public function edit($id)
	{
		$data['data_sekolah'] = $this->User_m->get_filtered(array('id' => $id))->row();

		$this->im_render->main('sekolah/editsekolah', $data);
	}

	public function update($id)
	{
		$this->form_validation->set_rules('nama_sekolah', 'Sekolah', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('no_tlpn', 'No Telepon', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->edit($id);
		} else {
			$data = array(
				'nama_sekolah' => $this->input->post('nama_sekolah'),
				'alamat' => $this->input->post('alamat'),
				'no_tlpn' => $this->input->post('no_tlpn')
			);

			$id = array('id' => $id);
			$this->User_m->update_data($data, $id);
			$this->session->set_flashdata('message', '<div class="alert alert-success" id="non-mr" role="alert"><i class="fas fa-info-circle"></i>Sekolah telah diupdate</div>');

			redirect('datasekolah');
		}
	}

	public function hapus($id)
	{
		$id = array('id' => $id);
		$this->User_m->delete_data($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" id="non-mr" role="alert"><i class="fas fa-info-circle"></i>Sekolah telah dihapus</div>');

		redirect('datasekolah');
	}
}
