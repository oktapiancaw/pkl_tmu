<?php
class Jurusan_controller extends CI_Controller
{
     public function __construct()
     {
          parent::__construct();
          $this->load->model('jurusan_model');
          $this->load->model('User_m');
     }
     public function index()
     {
          $data['semua_jurusan'] = $this->jurusan_model->jurusansekolah();
          $this->im_render->main('jurusan/datajurusan', $data);
     }
     public function getJurusan()
     {
          $id = $this->input->post('id');
          $data = $this->jurusan_model->get_filtered(['id_sekolah' => $id])->result_array();
          echo json_encode($data);
     }
     public function tambah()
     {
          $data['semua_sekolah'] = $this->User_m->get_all()->result();
          $this->im_render->main('jurusan/inputjurusan', $data);
     }
     public function simpan()
     {
          $this->form_validation->set_rules('id_sekolah', 'Sekolah', 'required|trim');
          $this->form_validation->set_rules('nama_jurusan', 'nama_jurusan', 'required|trim');
          if ($this->form_validation->run() == false) {
               $this->tambah();
          } else {
               $data = array(
                    'id_sekolah' => $this->input->post('id_sekolah'),
                    'nama_jurusan' => $this->input->post('nama_jurusan'),
               );
               $this->jurusan_model->insert_data($data);
               $this->session->set_flashdata('message', '<div class="alert alert-success" id="non-mr" role="alert"><i class="fas fa-info-circle"></i>Jurusan telah ditambahkan</div>');
               redirect('datajurusan');
          }
     }
     public function edit($id)
     {
          $data['data_jurusan'] = $this->jurusan_model->get_filtered(array('id' => $id))->row();
          $data['semua_sekolah'] = $this->User_m->get_all()->result();
          $this->im_render->main('jurusan/editjurusan', $data);
     }
     public function update($id)
     {
          $this->form_validation->set_rules('id_sekolah', 'Sekolah', 'required|trim');
          $this->form_validation->set_rules('nama_jurusan', 'Jurusan', 'required|trim');
          if ($this->form_validation->run() == false) {
               $this->edit($id);
          } else {
               $data = array(
                    'id_sekolah' => $this->input->post('id_sekolah'),
                    'nama_jurusan' => $this->input->post('nama_jurusan'),
               );
               $id = array('id' => $id);
               $this->jurusan_model->update_data($data, $id);
               $this->session->set_flashdata('message', '<div class="alert alert-success" id="non-mr" role="alert"><i class="fas fa-info-circle"></i>Jurusan telah diupdate</div>');
               redirect('datajurusan');
          }
     }
     public function hapus($id)
     {
          $id = array('id' => $id);
          $this->jurusan_model->delete_data($id);
          $this->session->set_flashdata('message', '<div class="alert alert-success" id="non-mr" role="alert"><i class="fas fa-info-circle"></i>Jurusan telah dihapus</div>');
          redirect('datajurusan');
     }
}
