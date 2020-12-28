<div class="header">
    <div class="title">
        <h3>Edit Anggota</h3>
    </div>
    <div class="action">
        <button type="submit" form="editanggota" class="btn btn-default">Simpan</button>
    </div>
</div>
<form action="<?php echo base_url('kelompok_controller/edit_simpanpeserta/' . $peserta->id); ?>" method="POST" id="editanggota">
    <input type="hidden" name="id_kelompok" value="<?=$id_kelompok?>">
     <div class="form-group">
          <label for="photo">Upload Pas Photo</label>
          <input type="file" name="photo" id="photo" value="<?php echo $peserta->photo; ?>">
     </div>
    <div class="form-group">
        <label for="nama_sekolah">Nama Peserta</label>
        <input type="text" name="nama_peserta" id="nama_sekolah" value="<?php echo $peserta->nama_peserta; ?>">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php echo $peserta->email; ?>">  
    </div>
    <div class="form-group">
        <label for="no_tlpn">No Telepon</label>
        <input type="text" name="no_tlpn" id="no_tlpn" value="<?php echo $peserta->no_tlpn; ?>">
    </div>
</form>