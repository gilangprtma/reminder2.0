<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>List Transportir</h4>
                        </div>
                        <div class="card-body">
                            <a href="transportir/addTrans" class="btn btn-primary mb-3">Add New</a>
                            <?= $this->session->flashdata('message'); ?>
                            <?= $this->session->unmark_flash('message'); ?>

                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Nama Transportir</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Aktif</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($list as $l) :?>
                                                <tr>
                                                    <td><?= $l['nama']; ?></td>
                                                    <td><?= $l['alamat']; ?></td>
                                                    <td><?= $l['telepon']; ?></td>
                                                    <?php
                                                    if ($l['is_active'] == '1') { ?>
                                                        <td>Aktif</td>
                                                        <?php } else { ?>
                                                            <td>Tidak Aktif</td>
                                                            <?php } ?>
                                                    <td>
                                                        <a href="<?= base_url('transportir/editTransportir/' . $l['id']); ?>" class="text-warning">Edit</a> |
                                                        <a href="<?= base_url('transportir/deleteTransportir/' . $l['id']); ?>" onclick="return confirm('Are you sure ?')" class="text-danger">Delete</a>
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