<div class="container h-100">
     <div class="row my-3">
          <div class="col">
               <h3>Data Sekolah</h3>
          </div>
     </div>
     <div class="row">
          <div class="col">
               <div class="card">
                    <div class="card-header">
                         <h5>Input Data Sekolah</h5>
                    </div>
                    <div class="card-body">
                         <form action="<?php echo base_url('datasekolah/tambah/simpan'); ?>" method="POST" id="inputsekolah">
                              <div class="form-group">
                                   <label for="nama_sekolah">Nama Sekolah</label>
                                   <input type="text" name="nama_sekolah" id="nama_sekolah">
                              </div>
                              <div class="form-group">
                                   <label for="alamat">Alamat</label>
                                   <textarea name="alamat" id="alamat"></textarea>
                              </div>
                              <div class="form-group">
                                   <label for="no_tlpn">Nomor Telepon</label>
                                   <input type="text" name="no_tlpn" id="no_tlpn">
                              </div>
                              <div class="form-group">
                                   <input type="submit" class="btn btn-primary" value="Simpan">
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>