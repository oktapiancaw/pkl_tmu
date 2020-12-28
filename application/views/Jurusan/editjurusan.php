<div class="header">
    <div class="title">
        <h3>Edit Jurusan</h3>
    </div>
    <div class="action">
        <button type="submit" form="editjurusan" class="btn btn-default">Simpan</button>
    </div>
</div>
<form action="<?php echo base_url('datajurusan/edit/simpan/' . $data_jurusan->id); ?>" method="POST" id="editjurusan">
    <div class="form-group">
          <label for="id_sekolah">Nama Sekolah</label>
          <select name="id_sekolah">
               <option value="">Pilih :</option>
               <?php foreach($semua_sekolah as $skl): ?>
                    <option value="<?=$skl->id?>" <?=select_set($skl->id, $data_jurusan->id_sekolah)?> ><?=$skl->nama_sekolah ?></option>
               <?php endforeach; ?>
          </select>
     </div>
    <div class="form-group">
        <label for="nama_jurusan">Nama Jurusan</label>
        <input type="text" name="nama_jurusan" id="nama_jurusan" value="<?php echo $data_jurusan->nama_jurusan; ?>">
    </div>
</form>