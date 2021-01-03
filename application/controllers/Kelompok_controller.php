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
          $this->form_validation->set_rules('nama_sekolah', 'Sekolah', 'required|trim');
          $this->form_validation->set_rules('nama_jurusan', 'Jurusan', 'required|trim');
          $this->form_validation->set_rules('angkatan', 'Angkatan', 'required|trim');
          if ($this->form_validation->run() == false) {
               $this->tambah();
          } else {
               $data = array(
                    'id_sekolah' => $this->input->post('nama_sekolah'),
                    'id_jurusan' => $this->input->post('nama_jurusan'),
                    'angkatan' => $this->input->post('angkatan'),
               );

               $this->kelompok_model->insert_data($data);
               $this->session->set_flashdata('message', '<div class="alert alert-success" id="non-mr" role="alert"><i class="fas fa-info-circle"></i>Kelompok telah ditambahkan</div>');

               redirect('datakelompok');
          }
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
          $this->form_validation->set_rules('nama_sekolah', 'Sekolah', 'required|trim');
          $this->form_validation->set_rules('nama_jurusan', 'Jurusan', 'required|trim');
          $this->form_validation->set_rules('angkatan', 'Angkatan', 'required|trim');
          if ($this->form_validation->run() == false) {
               $this->edit($id);
          } else {
               $data = array(
                    'id_sekolah' => $this->input->post('nama_sekolah'),
                    'id_jurusan' => $this->input->post('nama_jurusan'),
                    'angkatan' => $this->input->post('angkatan'),
               );

               $id = array('id' => $id);
               $this->kelompok_model->update_data($data, $id);
               $this->session->set_flashdata('message', '<div class="alert alert-success" id="non-mr" role="alert"><i class="fas fa-info-circle"></i>Kelompok telah diupdate</div>');
               redirect('datakelompok');
          }
     }

     public function hapus($id)
     {
          $id = array('id' => $id);
          $this->kelompok_model->delete_data($id);
          $this->session->set_flashdata('message', '<div class="alert alert-success" id="non-mr" role="alert"><i class="fas fa-info-circle"></i>Kelompok telah dihapus</div>');

          redirect('datakelompok');
     }
}
