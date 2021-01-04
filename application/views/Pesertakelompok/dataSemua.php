<div class="container h-100">
    <div class="row my-3">
        <div class="col">
            <h3>Data Peserta</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <?= $this->session->flashdata('message');  ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5>Data Semua Peserta</h5>
                    <a href="<?= base_url('datakelompok') ?>" class="btn btn-primary mr-5">Atur Data</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Kelompok</th>
                                <th>Nama Peserta</th>
                                <th>Jenis Kelamin</th>
                                <th>Email</th>
                                <th>Nomor Telepon</th>
                                <th>Foto</th>
                                <th style="width: 20%; text-align: center;">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($semua_peserta->num_rows() > 0) : ?>
                                <?php $index = 1; ?>
                                <?php foreach ($semua_peserta->result() as $peserta) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $index++; ?></td>
                                        <td class="text-center"><?php echo $peserta->id_data_kelompok; ?></td>
                                        <td><?php echo $peserta->nama_peserta; ?></td>
                                        <td class="text-center"><?php echo $peserta->jenis_kelamin; ?></td>
                                        <td><?php echo $peserta->email; ?></td>
                                        <td><?php echo $peserta->no_tlpn; ?></td>
                                        <td><?= ($peserta->photo ? '<img style="width: 150px;" src="' . base_url('uploads/image/') . $peserta->photo . '">' : 'Belum Ada'); ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url('peserta_controller/edit/' . $peserta->id); ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?php echo base_url('peserta_controller/hapus/' . $peserta->id); ?>" class="btn btn-danger">Hapus</a>
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