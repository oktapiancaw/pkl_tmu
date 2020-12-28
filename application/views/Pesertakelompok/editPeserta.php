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
                    <?= form_open_multipart('peserta_controller/update/'); ?>
                    <input type="hidden" name="id" value="<?= $peserta->id; ?>">
                    <div class="form-group row">
                        <label class="col-2" for="photo">Upload Pas Photo</label>
                        <input class="form-control col-5" type="file" name="f_photo" id="photo">
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="nama_peserta">Nama Peserta</label>
                        <input class="form-control col-5" type="text" name="nama_peserta" value="<?= $peserta->nama_peserta; ?>" id="nama_peserta">
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="email">Email</label>
                        <input class="form-control col-5" type="text" name="email" value="<?= $peserta->email; ?>" id="email">
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="no_tlpn">Nomor Telepon</label>
                        <input class="form-control col-5" type="text" name="no_tlpn" value="<?= $peserta->no_tlpn; ?>" id="no_tlpn">
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="no_tlpn">Jenis Kelamin</label>
                        <select class="form-control col-5" name="jenis_kelamin" id="">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
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