<div class="container h-100">
     <div class="row my-3">
          <div class="col">
               <h3>Data Jurusan</h3>
          </div>
     </div>
     <div class="row">
          <div class="col-sm">
               <?= $this->session->flashdata('message');  ?>
          </div>
     </div>
     <div class="row">
          <div class="col">
               <div class="card">
                    <div class="card-header">
                         <a href="<?php echo base_url('datajurusan/tambah'); ?>" class="btn btn-primary float-right mr-5">Tambah</a>
                    </div>
                    <div class="card-body">
                         <?php if ($this->session->flashdata('tambah')) : ?>
                              <?php if ($this->session->flashdata('tambah') == TRUE) : ?>
                                   <div class="alert alert-success">Berhasil menginput Data Jurusan</div>
                              <?php elseif ($this->session->flashdata('tambah') == FALSE) : ?>
                                   <div class="alert alert-danger">Gagal menginput Data Jurusan</div>
                              <?php endif; ?>
                         <?php endif; ?>
                         <?php if ($this->session->flashdata('edit')) : ?>
                              <?php if ($this->session->flashdata('edit') == TRUE) : ?>
                                   <div class="alert alert-success">Berhasil update data jurusan</div>
                              <?php elseif ($this->session->flashdata('edit') == FALSE) : ?>
                                   <div class="alert alert-danger">Gagal update data jurusan</div>
                              <?php endif; ?>
                         <?php endif; ?>
                         <?php if ($this->session->flashdata('hapus')) : ?>
                              <?php if ($this->session->flashdata('hapus') == TRUE) : ?>
                                   <div class="alert alert-success">Berhasil menghapus data jurusan</div>
                              <?php elseif ($this->session->flashdata('hapus') == FALSE) : ?>
                                   <div class="alert alert-danger">Gagal menghapus data jurusan</div>
                              <?php endif; ?>
                         <?php endif; ?>
                         <table class="table">
                              <thead>
                                   <tr>
                                        <th style="width: 7%; text-align: center;">No</th>
                                        <th>Nama Sekolah</th>
                                        <th>Nama Jurusan</th>
                                        <th style="width: 20%; text-align: center;">Tindakan</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php if ($semua_jurusan->num_rows() > 0) : ?>
                                        <?php $index = 1; ?>
                                        <?php foreach ($semua_jurusan->result() as $data_jurusan) : ?>
                                             <tr>
                                                  <td style="text-align: center;"><?php echo $index++; ?></td>
                                                  <td><?php echo $data_jurusan->nama_sekolah; ?></td>
                                                  <td><?php echo $data_jurusan->nama_jurusan; ?></td>
                                                  <td style="text-align: center;">
                                                       <a href="<?php echo base_url('datajurusan/edit/' . $data_jurusan->id); ?>" class="btn btn-warning">Edit</a>
                                                       <a href="<?php echo base_url('datajurusan/hapus/' . $data_jurusan->id); ?>" class="btn btn-danger">Hapus</a>
                                                  </td>
                                             </tr>
                                        <?php endforeach; ?>
                                   <?php else : ?>
                                        <tr>
                                             <td colspan="6" style="text-align: center;">Data tidak tersedia</td>
                                        </tr>
                                   <?php endif; ?>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div>