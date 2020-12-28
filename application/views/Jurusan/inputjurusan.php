<div class="header">
     <div class="title">
          <h3>Input Data Jurusan</h3>
     </div>
     <div class="action">
          <button type="submit" form="inputjurusan" class="btn btn-default">Simpan</button>
     </div>
</div>
<form action="<?php echo base_url('datajurusan/tambah/simpan'); ?>" method="POST" id="inputjurusan">
     <div class="form-group">
          <label for="id_sekolah">ID Sekolah</label>
          <select name="id_sekolah">
               <option value="">Pilih :</option>
               <?php foreach($semua_sekolah as $skl): ?>
                    <option value="<?=$skl->id?>"><?=$skl->nama_sekolah ?></option>
               <?php endforeach; ?>
          </select>
     </div>
     <div class="form-group">
          <label for="nama_jurusan">Nama Jurusan</label>
          <input type="text" name="nama_jurusan" id="nama_jurusan">
     </div>
</form>