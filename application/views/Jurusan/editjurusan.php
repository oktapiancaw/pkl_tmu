<div class="container h-100">
    <div class="row my-3">
        <div class="col">
            <h3>Data Jurusan</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5>Update Data Jurusan</h5>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('datajurusan/update/' . $data_jurusan->id); ?>" method="POST" id="editjurusan">
                        <div class="form-group row">
                            <label class="col-2" for="id_sekolah">Nama Sekolah</label>
                            <div class="col-5">
                                <select class="form-control" name="id_sekolah">
                                    <option value="">Pilih :</option>
                                    <?php foreach ($semua_sekolah as $skl) : ?>
                                        <option value="<?= $skl->id ?>" <?= select_set($skl->id, $data_jurusan->id_sekolah) ?>><?= $skl->nama_sekolah ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('id_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2" for="nama_jurusan">Nama Jurusan</label>
                            <div class="col-5">
                                <input class="form-control" type="text" name="nama_jurusan" id="nama_jurusan" value="<?php echo $data_jurusan->nama_jurusan; ?>">
                                <?= form_error('nama_jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>