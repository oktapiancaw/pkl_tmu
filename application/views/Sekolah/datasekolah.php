<div class="container h-100">
    <div class="row my-3">
        <div class="col">
            <h3>Data Sekolah</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-end">
                    <div class="header">
                        <a href="<?= base_url('User/tambah'); ?>" class="btn btn-primary mr-5">Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                    <?php if ($this->session->flashdata('tambah')) : ?>
                        <?php if ($this->session->flashdata('tambah') == TRUE) : ?>
                            <div class="alert alert-success">Berhasil menambahkan Data Sekolah</div>
                        <?php elseif ($this->session->flashdata('tambah') == FALSE) : ?>
                            <div class="alert alert-danger">Gagal menambahkan Data Sekolah</div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('hapus')) : ?>
                        <?php if ($this->session->flashdata('hapus') == TRUE) : ?>
                            <div class="alert alert-success">Berhasil menghapus data pengguna</div>
                        <?php elseif ($this->session->flashdata('hapus') == FALSE) : ?>
                            <div class="alert alert-danger">Gagal menghapus data pengguna</div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 7%; text-align: center;">
                                    <center>No</center>
                                </th>
                                <th style="width: 10%; text-align: center;">
                                    <center>ID</center>
                                </th>
                                <th style="width: 30%">
                                    <center>Nama Sekolah</center>
                                </th>
                                <th>
                                    <center>Alamat</center>
                                </th>
                                <th>
                                    <center>No Telepon</center>
                                </th>
                                <th style="width: 20%; text-align: center;">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($semua_pengguna->num_rows() > 0) : ?>
                                <?php $index = 1; ?>
                                <?php foreach ($semua_pengguna->result() as $data_sekolah) : ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $index++; ?></td>
                                        <td>
                                            <center><?php echo $data_sekolah->id; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $data_sekolah->nama_sekolah; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $data_sekolah->alamat; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $data_sekolah->no_tlpn; ?></center>
                                        </td>
                                        <td style="text-align: center;">
                                            <a href="<?php echo base_url('datasekolah/edit/' . $data_sekolah->id); ?>" class="btn btn-warning fa-fa edit">Edit</a>
                                            <a href="<?php echo base_url('User/hapus/' . $data_sekolah->id); ?>" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="6" style="text-align: center;">Data tidak tersedia</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>