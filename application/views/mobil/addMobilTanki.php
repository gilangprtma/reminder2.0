<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form method="POST" action="">
                            <div class="card-header">
                                <h4>Tambah Mobil Tanki</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nomor Polisi</label>
                                        <input type="text" class="form-control" name="nopol" value="<?= set_value('nopol'); ?>">
                                        <?= form_error('nopol', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                            Masukkan nopol tanpa spasi, misal AB1234ZX
                                        </small>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Transportir</label>
                                        <select list="id" name="transportir" id="id" class="form-control select2">
                                            <option value="">Transportir</option>
                                            <?php foreach ($transportir as $t) : ?>
                                                <option value="<?= $t['id']; ?>"><?= $t['nama']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('id', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Kapasitas</label>
                                        <input type="text" class="form-control" name="kap" value="<?= set_value('kap'); ?>">
                                        <?= form_error('kap', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                            Masukkan kapasitas KLnya saja, misal 16, 24, 32.
                                        </small>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Jenis Produk</label>
                                        <select name="jenis" id="jenis" class="form-control">
                                            <option value="">--Pilih Jenis Produk--</option>
                                            <option value="Multi Produk">Multi Produk</option>
                                            <option value="Pertashop">Pertashop</option>
                                            <option value="Industri">Industri</option>
                                            <option value="Avtur">Avtur</option>
                                        </select>
                                        <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Surat Tera Metrologi</label>
                                        <input type="date" class="form-control" name="tera" value="<?= set_value('tera'); ?>">
                                        <?= form_error('tera', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Surat Keur DLLAJ</label>
                                        <input type="date" class="form-control" name="keur" value="<?= set_value('keur'); ?>">
                                        <?= form_error('keur', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>STNK</label>
                                        <input type="date" class="form-control" name="pajak" value="<?= set_value('pajak'); ?>">
                                        <?= form_error('pajak', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>