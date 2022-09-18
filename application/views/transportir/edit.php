<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form method="POST" action="">
                            <div class="card-header">
                                <h4>Ubah Transportir</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <input type="hidden" name="id" value="<?= $trans['id']; ?>">
                                    <div class="form-group col-md-6">
                                        <label>Nama Transportir</label>
                                        <input type="text" class="form-control" name="nama" value="<?= $trans['nama']; ?>">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Telepon / Wa</label>
                                        <input type="text" class="form-control" name="telepon" value="<?= $trans['telepon']; ?>">
                                        <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" name="alamat" value="<?= $trans['alamat']; ?>">
                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>