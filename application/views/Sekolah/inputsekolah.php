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
                         <form action="<?php echo base_url('datasekolah/simpan'); ?>" method="POST" id="inputsekolah">
                              <div class="form-group row">
                                   <label class="col-2" for="nama_sekolah">Nama Sekolah</label>
                                   <div class="col-5">
                                        <input class="form-control" type="text" name="nama_sekolah" id="nama_sekolah">
                                        <?= form_error('nama_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                              </div>
                              <div class="form-group row">
                                   <label class="col-2" for="alamat">Alamat</label>
                                   <div class="col-5">
                                        <textarea class="form-control" name="alamat" style="max-width: 600px; max-height: 100px" id="alamat"></textarea>
                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                              </div>
                              <div class="form-group row">
                                   <label class="col-2" for="no_tlpn">Nomor Telepon</label>
                                   <div class="col-5">
                                        <input class="form-control" type="text" name="no_tlpn" id="no_tlpn">
                                        <?= form_error('no_tlpn', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
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