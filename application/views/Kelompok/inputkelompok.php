<div class="container h-100">
     <div class="row my-3">
          <div class="col">
               <h3>Data Peserta Kelompok</h3>
          </div>
     </div>
     <div class="row">
          <div class="col">
               <div class="card">
                    <div class="card-header">
                         <h5>Input Data Peserta Kelompok</h5>
                    </div>
                    <div class="card-body">
                         <form action="<?= base_url('datakelompok/simpan'); ?>" method="POST" id="inputkelompok">
                              <div class="form-group row">
                                   <label class="col-2" for="nama_sekolah">Nama Sekolah</label>
                                   <div class="col-5">
                                        <select class="form-control" name="nama_sekolah" id="idSekolah_Kelompok">
                                             <option value="">-- Pilih --</option>
                                             <?php foreach ($semua_sekolah as $skl) : ?>
                                                  <option value="<?= $skl->id ?>"><?= $skl->nama_sekolah ?></option>
                                             <?php endforeach; ?>
                                        </select>
                                        <?= form_error('nama_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                              </div>
                              <div class="form-group row">
                                   <label class="col-2" for="nama_jurusan">Nama Jurusan</label>
                                   <div class="col-5">
                                        <select class="form-control" name="nama_jurusan" id="listJurusan_kelompok">
                                        </select>
                                        <?= form_error('nama_jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                              </div>
                              <div class="form-group row">
                                   <label class="col-2" for="angkatan">Angkatan</label>
                                   <div class="col-5">
                                        <input class="form-control" type="number" name="angkatan" id="angkatan">
                                        <?= form_error('angkatan', '<small class="text-danger pl-3">', '</small>'); ?>
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