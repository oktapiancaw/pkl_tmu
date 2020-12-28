<?=form_open_multipart('kelompok_controller/tambah_simpanpeserta'); ?>
     <div class="header">
          <div class="title">
               <h3>Input Data Anggota Kelompok</h3>
          </div>
          <div class="action">
               <input type="submit" class="btn btn-default" value="Simpan">
          </div>
     </div>

     <input type="hidden" name="id_kelompok" value="<?=$id_kelompok?>">
     <div class="form-group">
          <label for="photo">Upload Pas Photo</label>
          <input type="file" name="f_photo" id="photo">
     </div>
     <div class="form-group">
          <label for="nama_peserta">Nama Peserta</label>
          <input type="text" name="nama_peserta" id="nama_peserta">
     </div>
     <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email">
     </div>
     <div class="form-group">
          <label for="no_tlpn">Nomor Telepon</label>
          <input type="text" name="no_tlpn" id="no_tlpn">
     </div>
<?=form_close() ?>