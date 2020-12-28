<div class="container h-100">
    <div class="row my-3">
        <div class="col">
            <h3>Data Peserta</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Kelompok</th>
                                <th>Nama Peserta</th>
                                <th>Email</th>
                                <th>Nomor Telepon</th>
                                <th>Foto</th>
                                <th>Angkatan</th>
                                <th style="width: 20%; text-align: center;">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($semua_peserta->num_rows() > 0) : ?>
                                <?php $index = 1; ?>
                                <?php foreach ($semua_peserta->result() as $data_pesertakelompok) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $index++; ?></td>
                                        <td class="text-center"><?php echo $data_pesertakelompok->id_data_kelompok; ?></td>
                                        <td><?php echo $data_pesertakelompok->nama_peserta; ?></td>
                                        <td><?php echo $data_pesertakelompok->email; ?></td>
                                        <td><?php echo $data_pesertakelompok->no_tlpn; ?></td>
                                        <td>Belm Ada</td>
                                        <td class="text-center"><?php echo $data_pesertakelompok->jenis_kelamin; ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url('peserta_controller/edit/' . $data_pesertakelompok->id); ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?php echo base_url('peserta_controller/hapus/' . $data_pesertakelompok->id); ?>" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="8" class="text-center">Data tidak tersedia</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>