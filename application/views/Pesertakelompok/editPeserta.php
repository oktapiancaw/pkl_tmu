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
                    <h5>Update Data Peserta</h5>
                </div>
                <div class="card-body">
                    <?= form_open_multipart('datapeserta/update/' . $peserta->id); ?>
                    <div class="form-group row">
                        <label class="col-2" for="photo">Upload Pas Photo</label>
                        <input class="form-control col-5" type="file" value="<?= $peserta->nama_peserta; ?>" name="photo" id="photo">
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="nama_peserta">Nama Peserta</label>
                        <input class="form-control col-5" type="text" name="nama_peserta" value="<?= $peserta->nama_peserta; ?>" id="nama_peserta">
                        <?= form_error('nama_peserta', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="email">Email</label>
                        <input class="form-control col-5" type="text" name="email" value="<?= $peserta->email; ?>" id="email">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="no_tlpn">Nomor Telepon</label>
                        <input class="form-control col-5" type="text" name="no_tlpn" value="<?= $peserta->no_tlpn; ?>" id="no_tlpn">
                        <?= form_error('no_tlpn', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="no_tlpn">Jenis Kelamin</label>
                        <select class="form-control col-5" name="jenis_kelamin" id="">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                        <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Update">
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>