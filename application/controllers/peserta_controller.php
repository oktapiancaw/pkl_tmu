<?php

class peserta_controller extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();

          $this->load->model('peserta_model');
          $this->load->library('upload');
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
          $id_kelompok = $this->input->post('id_kelompok', true);

          $this->form_validation->set_rules('nama_peserta', 'Nama Peserta', 'required|trim');
          $this->form_validation->set_rules('email', 'Email', 'required|trim');
          $this->form_validation->set_rules('no_tlpn', 'No Telepon', 'required|trim');
          $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
          if ($this->form_validation->run() == false) {
               $this->tambah($id_kelompok);
          } else {
               $photo = $_FILES['photo'];
               if ($photo) {
                    $this->upload->initialize($this->set_upload_options());
                    if ($this->upload->do_upload('photo')) {
                         $photo_name = $this->upload->data('file_name');
                         $this->db->set('photo', $photo_name);
                    } else {
                         echo $this->upload->display_errors();
                    }
               }
               $data = array(
                    'id_data_kelompok' => $id_kelompok,
                    'nama_peserta' => $this->input->post('nama_peserta'),
                    'email' => $this->input->post('email'),
                    'no_tlpn' => $this->input->post('no_tlpn'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
               );
               $this->db->insert('data_peserta', $data);
               $this->session->set_flashdata('message', '<div class="alert alert-success" id="non-mr" role="alert"><i class="fas fa-info-circle"></i>Peserta telah ditambahkan</div>');

               redirect('datapeserta/list/' . $data['id_data_kelompok']);
          }
     }
     public function edit($id)
     {
          $data['peserta'] = $this->db->get_where('data_peserta', ['id' => $id])->row();
          $this->im_render->main('pesertakelompok/editPeserta', $data);
     }
     public function update($id)
     {
          $this->form_validation->set_rules('nama_peserta', 'Nama Peserta', 'required|trim');
          $this->form_validation->set_rules('email', 'Email', 'required|trim');
          $this->form_validation->set_rules('no_tlpn', 'No Telepon', 'required|trim');
          $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
          if ($this->form_validation->run() == false) {
               $this->edit($id);
          } else {
               $photo = $_FILES['photo'];
               if ($photo) {
                    $this->upload->initialize($this->set_upload_options());
                    if ($this->upload->do_upload('photo')) {
                         $old_image = $this->db->get_where('data_peserta', ['id' => $id])->row()->photo;
                         if ($old_image != null || $old_image !== '') {
                              unlink(FCPATH . 'uploads/image/' . $old_image);
                         }
                         $photo_name = $this->upload->data('file_name');
                         $this->db->set('photo', $photo_name);
                    } else {
                         echo $this->upload->display_errors();
                    }
               }
               $data = array(
                    'nama_peserta' => $this->input->post('nama_peserta'),
                    'email' => $this->input->post('email'),
                    'no_tlpn' => $this->input->post('no_tlpn'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
               );

               $this->db->where('id', $id)->update('data_peserta', $data);
               $this->session->set_flashdata('message', '<div class="alert alert-success" id="non-mr" role="alert"><i class="fas fa-info-circle"></i>Peserta telah diupdate</div>');
               redirect('datakelompok');
          }
     }

     public function hapus($id)
     {
          $id = array('id' => $id);
          $this->peserta_model->delete_data($id);

          $photo = $this->db->get_where('data_peserta', $id)->row()->photo;
          if ($photo != null || $photo !== '') {
               unlink(FCPATH . 'uploads/image/' . $photo);
          }

          $this->session->set_flashdata('message', '<div class="alert alert-success" id="non-mr" role="alert"><i class="fas fa-info-circle"></i>Peserta telah dihapus</div>');
          redirect('datapeserta');
     }

     private function set_upload_options()
     {
          $config = array();
          $config['upload_path'] = './uploads/image/';
          $config['allowed_types'] = 'gif|jpg|png';
          $config['max_size']     = '2048';
          $config['overwrite']     = FALSE;

          return $config;
     }
}
