<?php

class peserta_controller extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();

          $this->load->model('peserta_model');
     }

     public function index()
     {
          $data['semua_peserta'] = $this->peserta_model->semua();
          $this->im_render->main('pesertakelompok/dataSemua', $data);
     }
     public function list($id)
     {
          $data['semua_peserta'] = $this->peserta_model->dataPerSekolah($id);
          $data['id'] = $id;
          $this->im_render->main('pesertakelompok/datapeserta', $data);
     }
     public function tambah($id)
     {
          $data['kelompok'] = $this->db->get_where('data_kelompok', ['id' => $id])->row();
          $this->im_render->main('pesertakelompok/inputPeserta', $data);
     }
     public function simpan()
     {
          $data = array(
               'id_data_kelompok' => $this->input->post('id_kelompok', true),
               'nama_peserta' => $this->input->post('nama_peserta'),
               'email' => $this->input->post('email'),
               'no_tlpn' => $this->input->post('no_tlpn'),
               'jenis_kelamin' => $this->input->post('jenis_kelamin'),
          );

          $this->db->insert('data_nama_kelompok', $data);

          redirect('peserta_controller/list/' . $data['id_data_kelompok']);
     }
     public function edit($id)
     {

          $data['peserta'] = $this->db->get_where('data_nama_kelompok', ['id' => $id])->row();
          $this->im_render->main('pesertakelompok/editPeserta', $data);
     }
     public function update()
     {
          $id = $this->input->post('id', true);
          $data = array(
               'nama_peserta' => $this->input->post('nama_peserta'),
               'email' => $this->input->post('email'),
               'no_tlpn' => $this->input->post('no_tlpn'),
               'jenis_kelamin' => $this->input->post('jenis_kelamin'),
          );

          $this->db->where('id', $id)->update('data_nama_kelompok', $data);

          redirect('peserta_controller/list/' . $id);
     }
}
