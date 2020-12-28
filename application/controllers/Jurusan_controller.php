<?php
class Jurusan_controller extends CI_Controller
{
     public function __construct()
     {
          parent::__construct();
          $this->load->model('jurusan_model');
     }
     public function index()
     {
          $data['semua_jurusan'] = $this->jurusan_model->jurusansekolah();
          $this->im_render->main('jurusan/datajurusan', $data);
     }
     public function tambah()
     {
          $this->load->model('User_m');
          $data['semua_sekolah'] = $this->User_m->get_all()->result();
          $this->im_render->main('jurusan/inputjurusan', $data);
     }
     public function tambah_simpan()
     {
          $data = array(
               'id_sekolah' => $this->input->post('id_sekolah'),
               'nama_jurusan' => $this->input->post('nama_jurusan'),
          );
          $this->jurusan_model->insert_data($data);
          redirect(base_url());
     }
     public function edit($id)
     {
          $data['data_jurusan'] = $this->jurusan_model->get_filtered(array('id' => $id))->row();
          $this->load->model('User_m');
          $data['semua_sekolah'] = $this->User_m->get_all()->result();
          $this->im_render->main('jurusan/editjurusan', $data);
     }
     public function edit_simpan($id)
     {
          $data = array(
               'id_sekolah' => $this->input->post('id_sekolah'),
               'nama_jurusan' => $this->input->post('nama_jurusan'),
          );
          $id = array('id' => $id);
          $this->jurusan_model->update_data($data, $id);
          redirect(base_url());
     }
     public function hapus($id)
     {
          $id = array('id' => $id);
          $this->jurusan_model->delete_data($id);
          redirect(base_url());
     }
}
