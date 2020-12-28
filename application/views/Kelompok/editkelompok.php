<div class="header">
    <div class="title">
        <h3>Edit Kelompok</h3>
    </div>
    <div class="action">
        <button type="submit" form="editkelompok" class="btn btn-default">Simpan</button>
    </div>
</div>
<form action="<?php echo base_url('datakelompok/edit/simpan/' . $data_kelompok->id); ?>" method="POST" id="editkelompok">
    <div class="form-group">
          <label for="nama_sekolah">Nama Sekolah</label>
          <select name="nama_sekolah">
               <option value="">Pilih :</option>
               <?php foreach($semua_sekolah as $skl): ?>
                    <option value="<?=$skl->id?>" <?=select_set($skl->id, $data_kelompok->id_sekolah)?> ><?=$skl->nama_sekolah ?></option>
               <?php endforeach; ?>
          </select>
     </div>
    <div class="form-group">
        <label for="nama_jurusan">Nama Jurusan</label>
        <select name="nama_jurusan">
               <option value="">Pilih :</option>
               <?php foreach($semua_jurusan as $jrs): ?>
                    <option value="<?=$jrs->id?>" <?=select_set($jrs->id, $data_kelompok->id_jurusan)?> ><?=$jrs->nama_jurusan ?></option>
               <?php endforeach; ?>
          </select>
    </div>
    <div class="form-group">
        <label for="angkatan">Angkatan</label>
        <input type="text" name="angkatan" id="angkatan" value="<?php echo $data_kelompok->angkatan; ?>">
    </div>
</form>