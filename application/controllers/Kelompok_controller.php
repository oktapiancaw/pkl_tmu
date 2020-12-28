<?php

class Kelompok_controller extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();

          $this->load->model('kelompok_model');
          $this->load->model('peserta_model');
          $this->load->model('jurusan_model');
     }

     public function index()
     {
          $data['semua_kelompok'] = $this->kelompok_model->jurusankelompok();
          $this->im_render->main('kelompok/datakelompok', $data);
     }

     public function tambah()
     {
          $this->load->model('User_m');

          $data['semua_sekolah'] = $this->User_m->get_all()->result();

          $this->load->model('jurusan_model');

          $data['semua_jurusan'] = $this->jurusan_model->get_all()->result();


          $this->im_render->main('kelompok/inputkelompok', $data);
     }

     public function simpan()
     {
          $data = array(
               'id_sekolah' => $this->input->post('nama_sekolah'),
               'id_jurusan' => $this->input->post('nama_jurusan'),
               'angkatan' => $this->input->post('angkatan'),
          );

          $this->kelompok_model->insert_data($data);


          redirect('datakelompok');
     }

     public function edit($id)
     {
          $data['data_kelompok'] = $this->kelompok_model->get_filtered(array('id' => $id))->row();

          $this->load->model('User_m');
          $data['semua_sekolah'] = $this->User_m->get_all()->result();
          $data['semua_jurusan'] = $this->jurusan_model->get_all()->result();

          $this->im_render->main('kelompok/editkelompok', $data);
     }

     public function update($id)
     {
          $data = array(
               'id_sekolah' => $this->input->post('nama_sekolah'),
               'id_jurusan' => $this->input->post('nama_jurusan'),
               'angkatan' => $this->input->post('angkatan'),
          );

          $id = array('id' => $id);
          $this->kelompok_model->update_data($data, $id);
          redirect('datakelompok');
     }

     public function hapus($id)
     {
          $id = array('id' => $id);
          $this->kelompok_model->delete_data($id);

          redirect('datakelompok');
     }
}
