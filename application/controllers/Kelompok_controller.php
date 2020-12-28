<?php 

class Kelompok_controller extends CI_Controller {

     public function __construct()
     {
          parent::__construct();

          $this->load->model('kelompok_model');
          $this->load->model('peserta_model');
     }

     public function index() 
     {
          $data['semua_kelompok'] = $this->kelompok_model->jurusankelompok();
          $this->im_render->main('kelompok/datakelompok', $data);
     }

     public function peserta()
     {
          $data['semua_peserta'] = $this->peserta_model->get_all();

          $this->im_render->main('kelompok/datapeserta', $data);
     }

     public function daftar($id = NULL)
     {

          // tahap pertama ngambil data kelompok
          $query = $this->kelompok_model->jurusankelompok($id);
          if ($query->num_rows() > 0) {
               $data['daftar_kelompok'] = $query->row();
          }

          // tahap kedua ngambil data dari peserta
          // disini nyimppenya
          $query_2 = $this->peserta_model->anggota($id);
          if ($query_2->num_rows() > 0) {
               $data['daftar_peserta'] = $query_2->result();
          }
          // echo "<pre>";
          // print_r($data);
          // echo "</pre>";

          // ini dari parameter
          $data['id_kelompok'] = $id;

          $this->im_render->main('kelompok/datapeserta', $data);
     }

     public function tambah()
     {
          $this->load->model('User_m');

          $data['semua_sekolah'] = $this->User_m->get_all()->result();

          $this->load->model('jurusan_model');

          $data['semua_jurusan'] = $this->jurusan_model->get_all()->result();


          $this->im_render->main('kelompok/inputkelompok', $data);
     }

     public function tambah_simpan()
     {
          $data = array(
               'id_sekolah' => $this->input->post('nama_sekolah'),
               'id_jurusan' => $this->input->post('nama_jurusan'),
               'angkatan' => $this->input->post('angkatan'),
          );

          $this->kelompok_model->insert_data($data);


          redirect(base_url());
     }

     public function edit($id) 
     {
          $data['data_kelompok'] = $this->kelompok_model->get_filtered(array('id' => $id))->row();

          $this->load->model('User_m');

          $data['semua_sekolah'] = $this->User_m->get_all()->result();

          $this->im_render->main('kelompok/editkelompok', $data);

          $this->load->model('jurusan_model');

          $data['semua_jurusan'] = $this->jurusan_model->get_all()->result();
     }

     public function edit_simpan($id)
     {
          $data = array(
               'id_sekolah' => $this->input->post('id_sekolah'),
               'id_jurusan' => $this->input->post('id_jurusan'),
               'angkatan' => $this->input->post('angkatan'),
          );

          $id = array('id' =>$id);
          $this->kelompok_model->update_data($data, $id);
          redirect(base_url());
     }

     public function hapus($id)
     {
          $id = array('id' =>$id);
          $this->kelompok_model->delete_data($id);

          redirect(base_url());
     }

     public function tambahpeserta($id_kelompok = NULL)
     {
          $data['id_kelompok'] = $id_kelompok;
          $this->im_render->main('kelompok/inputanggota',$data);
     }

     public function tambah_simpanpeserta(){
          //   Upload photo
          $image_file = "";   
          if(preg_match('/image/', $_FILES['f_photo']['type'])){
               $this->load->library('im_upload');

               $name_foto = str_replace(" ", "_", $_FILES['f_photo']['name']);

               $image_file = $this->im_upload->uploading('f_photo', $name_foto, 'image');
           
               $path_parts = pathinfo($image_file);
          }

          $id_kelompok   = $this->input->post('id_kelompok');
          $nama_peserta  = $this->input->post('nama_peserta');
          $email         = $this->input->post('email');
          $no_tlpn       = $this->input->post('no_tlpn');
          
          $data = array(
               // 'photo' => $this->input->post('photo'),
               // 'id_kelompok' => $this->input->post('id_kelompok'),
               // 'nama_peserta' => $this->input->post('nama_peserta'),
               // 'email' => $this->input->post('email'),
               // 'no_tlpn' => $this->input->post('no_tlpn'),

               'id_kelompok' => $id_kelompok,
               'photo' => $image_file,
               'nama_peserta' => $nama_peserta,
               'email' => $email,
               'no_tlpn' => $no_tlpn,

          );

          $this->peserta_model->insert_data($data);


          redirect('kelompok_controller/daftar/'.$id_kelompok);
     }

     public function editpeserta($id = NULL, $id_kelompok = NULL)
     {
          $data['peserta'] = $this->peserta_model->get_filtered(array('id' => $id))->row();

          $data['id_kelompok'] = $id_kelompok;

          $this->im_render->main('kelompok/editanggota', $data);
     }

     public function edit_simpanpeserta($id)
     {
          $data = array(
               'photo' => $this->input->post('photo'),
               'nama_peserta' => $this->input->post('nama_peserta'),
               'email' => $this->input->post('email'),
               'no_tlpn' => $this->input->post('no_tlpn'),
          );

          $id = array('id' =>$id);
          $this->peserta_model->update_data($data, $id);

          $id_kelompok = $this->input->post('id_kelompok');
          redirect('kelompok_controller/daftar/'.$id_kelompok);
     }

     public function hapuspeserta($id = NULL)
     {
          $id = array('id' =>$id);
          $this->peserta_model->delete_data($id);

          redirect('kelompok_controller/daftar/'.$id_kelompok);
     }

}