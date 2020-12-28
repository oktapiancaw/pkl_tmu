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
                         <form action="<?php echo base_url('kelompok_controller/tambah_simpan'); ?>" method="POST" id="inputkelompok">
                              <div class="form-group">
                                   <label for="nama_sekolah">Nama Sekolah</label>
                                   <select class="form-control" name="nama_sekolah">
                                        <option value="">Pilih :</option>
                                        <?php foreach ($semua_sekolah as $skl) : ?>
                                             <option value="<?= $skl->id ?>"><?= $skl->nama_sekolah ?></option>
                                        <?php endforeach; ?>
                                   </select>
                              </div>
                              <div class="form-group">
                                   <label for="nama_jurusan">Nama Jurusan</label>
                                   <select class="form-control" name="nama_jurusan">
                                        <option value="">Pilih :</option>
                                        <?php foreach ($semua_jurusan as $jrs) : ?>
                                             <option value="<?= $jrs->id ?>"><?= $jrs->nama_jurusan ?></option>
                                        <?php endforeach; ?>
                                   </select>
                                   <div class="form-group">
                                        <label for="angkatan">Angkatan</label>
                                        <input class="form-control" type="number" name="angkatan" id="angkatan">
                                   </div>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>