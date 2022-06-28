<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form method="POST" action="">
                            <div class="card-header">
                                <h4>Add User</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" value="<?= set_value('name'); ?>">
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="phone" value="<?= set_value('phone'); ?>">
                                        <?= form_error('phone', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Fungsi</label>
                                        <select name="fungsi" id="fungsi" class="form-control">
                                            <option value="">--Pilih Fungsi--</option>
                                            <option value="HSSE">HSSE</option>
                                            <option value="MS">MS</option>
                                            <option value="QQ">QQ</option>
                                            <option value="RS&D">RS&D</option>
                                            <option value="GASS">GASS</option>
                                            <option value="FLEET">FLEET</option>
                                            <option value="TRANSPORTIR">TRANSPORTIR</option>
                                        </select>
                                        <?= form_error('fungsi', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
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