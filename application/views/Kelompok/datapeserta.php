<div class="header">
  <div class="title">
    <h3>Data Kelompok</h3>
  </div>

</div>
<table>
  <tr>
    <td>Nama Sekolah:</td>
    <td><?php echo $daftar_kelompok->nama_sekolah; ?></td>
  </tr>

  <tr>
    <td>Nama Jurusan:</td>
    <td><?php echo $daftar_kelompok->nama_jurusan; ?></td>
  </tr>

  <tr>
    <td>Angkatan:</td>
    <td><?php echo $daftar_kelompok->angkatan; ?></td>
  </tr>
</table>
<br><br><br><br><br>

<a href="<?php echo base_url('kelompok_controller/tambahpeserta/' . $id_kelompok); ?>" class="btn btn-default">Tambah Peserta</a><br><br>
<table>
  <thead>
    <tr>
      <th style="width: 7%; text-align: center;">No</th>
      <th>Photo</th>
      <th style="width: 50%; text-align: center;">Nama Peserta</th>
      <th>Email</th>
      <th>Nomor Telepon</th>
      <th style="width: 20%; text-align: center;">Tindakan</th>
    </tr>
  </thead>
  <tbody>
    <?php if (isset($daftar_peserta)) : ?>
      <?php $index = 1; ?>
      <?php foreach ($daftar_peserta as $peserta) : ?>
        <tr>
          <td style="text-align: center;"><?php echo $index++; ?></td>
          <td>
            <img src="<?php echo base_url('uploads/image/' . $peserta->photo); ?>" width="90" height="130">
          </td>
          <td><?php echo $peserta->nama_peserta; ?></td>
          <td><?php echo $peserta->email; ?></td>
          <td><?php echo $peserta->no_tlpn; ?></td>
          <td style="text-align: center;">
            <a href="<?php echo base_url('kelompok_controller/editpeserta/' . $peserta->id); ?>" class="btn btn-default">Edit</a>
            <a href="<?php echo base_url('kelompok_controller/hapuspeserta/' . $peserta->id . '/' . $id_kelompok); ?>" class="btn btn-default">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    <?php else : ?>
      <tr>
        <td colspan="6">Data Kosong</td>
      </tr>
    <?php endif ?>
  </tbody>
</table>