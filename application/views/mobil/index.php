<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>List Mobil Tanki</h4>
                        </div>
                        <div class="card-body">
                            <a href="mobil/addMobilTanki" class="btn btn-primary mb-3">Add New</a>
                            <?= $this->session->flashdata('message'); ?>
                            <?= $this->session->unmark_flash('message'); ?>

                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Nopol</th>
                                            <th>Transportir</th>
                                            <th>Kapasitas</th>
                                            <th>Keur DLLAJ</th>
                                            <th>Tera Metrologi</th>
                                            <th>Pajak</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listmobil as $m) :?>
                                                <tr>
                                                    <td><?= $m['nopol']; ?></td>
                                                    <td><?= $m['transportir']; ?></td>
                                                    <td><?= $m['kap']; ?></td>
                                                    <td><?= date('d F Y', strtotime($m['tera'])); ?></td>
                                                    <td><?= date('d F Y', strtotime($m['keur'])); ?></td>
                                                    <td><?= date('d F Y', strtotime($m['pajak'])); ?></td>
                                                    <?php
                                                    if ($m['status'] == '1') { ?>
                                                        <td>OK</td>
                                                    <?php } elseif ($m['status'] == '2') { ?>
                                                        <td>Hampir Habis</td>
                                                    <?php } else { ?>
                                                        <td>Expired</td>
                                                    <?php } ?>
                                                    <td>
                                                        <a href="<?= base_url('mobil/editMobil/' . $m['id']); ?>" class="text-warning">Edit</a> |
                                                        <a href="<?= base_url('mobil/deleteMobil/' . $m['id']); ?>" onclick="return confirm('Are you sure ?')" class="text-danger">Delete</a>
                                                    </td>
                                                </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>