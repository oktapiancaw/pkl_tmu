<div class="container h-100">
    <div class="row my-3">
        <div class="col">
            <h3>Data Peserta</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5>Input Data Peserta</h5>
                </div>
                <div class="card-body">
                    <?= form_open_multipart('datapeserta/simpan/'); ?>
                    <input type="hidden" name="id_kelompok" value="<?= $kelompok->id; ?>">
                    <input type="hidden" name="angkatan" value="<?= $kelompok->angkatan; ?>">
                    <div class="header">
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="photo">Upload Pas Photo</label>
                        <div class="col-5">
                            <input class="form-control" type="file" name="photo" id="photo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="nama_peserta">Nama Peserta</label>
                        <div class="col-5">
                            <input class="form-control" type="text" name="nama_peserta" id="nama_peserta">
                            <?= form_error('nama_peserta', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="email">Email</label>
                        <div class="col-5">
                            <input class="form-control" type="text" name="email" id="email">
                            <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="no_tlpn">Nomor Telepon</label>
                        <div class="col-5">
                            <input class="form-control" type="text" name="no_tlpn" id="no_tlpn">
                            <?= form_error('no_tlpn', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="no_tlpn">Jenis Kelamin</label>
                        <div class="col-5">
                            <select name="jenis_kelamin" class="form-control" id="">
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                            <?= form_error('jenis_kelamin', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>