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
                    <h5>Update Data Peserta Kelompok</h5>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('datakelompok/update/' . $data_kelompok->id); ?>" method="POST" id="editkelompok">
                        <div class="form-group row">
                            <label class="col-2" for="nama_sekolah">Nama Sekolah</label>
                            <div class="col-5">
                                <select class="form-control" name="nama_sekolah">
                                    <option value="">Pilih :</option>
                                    <?php foreach ($semua_sekolah as $skl) : ?>
                                        <option value="<?= $skl->id ?>" <?= select_set($skl->id, $data_kelompok->id_sekolah) ?>><?= $skl->nama_sekolah ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('nama_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2" for="nama_jurusan">Nama Jurusan</label>
                            <div class="col-5">
                                <select class="form-control" name="nama_jurusan">
                                    <option value="">Pilih :</option>
                                    <?php foreach ($semua_jurusan as $jrs) : ?>
                                        <option value="<?= $jrs->id ?>" <?= select_set($jrs->id, $data_kelompok->id_jurusan) ?>><?= $jrs->nama_jurusan ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('nama_jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2" for="angkatan">Angkatan</label>
                            <div class="col-5">
                                <input class="form-control" type="text" name="angkatan" id="angkatan" value="<?php echo $data_kelompok->angkatan; ?>">
                                <?= form_error('angkatan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>