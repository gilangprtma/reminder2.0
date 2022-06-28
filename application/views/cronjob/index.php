<?php
    $cronjson = json_encode($cron);
?>

<div class="main-content">
    <section class="section">
        <form method="POST" action="">
            <?= $this->session->flashdata('message'); ?>
            <?= $this->session->unmark_flash('message'); ?>
            <div class="section-body">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Periode Reminder Keur LLAJ</h4>
                            </div>
                            <div class="card-body">
                                <div class="section-title mt-0">Silahkan pilih hari untuk reminder</div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck60" name="keur1[]" value="60">
                                    <label class="custom-control-label" for="customCheck60">60 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck50" name="keur1[]" value="50">
                                    <label class="custom-control-label" for="customCheck50">50 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck40" name="keur1[]" value="40">
                                    <label class="custom-control-label" for="customCheck40">40 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck30" name="keur1[]" value="30">
                                    <label class="custom-control-label" for="customCheck30">30 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck25" name="keur1[]" value="25">
                                    <label class="custom-control-label" for="customCheck25">25 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck20" name="keur1[]" value="20">
                                    <label class="custom-control-label" for="customCheck20">20 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck15" name="keur1[]" value="15">
                                    <label class="custom-control-label" for="customCheck15">15 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck14" name="keur1[]" value="14">
                                    <label class="custom-control-label" for="customCheck14">14 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck10" name="keur1[]" value="10">
                                    <label class="custom-control-label" for="customCheck10">10 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck7" name="keur1[]" value="7">
                                    <label class="custom-control-label" for="customCheck7">7 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6" name="keur1[]" value="6">
                                    <label class="custom-control-label" for="customCheck6">6 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5" name="keur1[]" value="5">
                                    <label class="custom-control-label" for="customCheck5">5 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4" name="keur1[]" value="4">
                                    <label class="custom-control-label" for="customCheck4">4 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3" name="keur1[]" value="3">
                                    <label class="custom-control-label" for="customCheck3">3 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" name="keur1[]" value="2">
                                    <label class="custom-control-label" for="customCheck2">2 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="keur1[]" value="1">
                                    <label class="custom-control-label" for="customCheck1">1 Hari</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Periode Reminder Tera</h4>
                            </div>
                            <div class="card-body">
                                <div class="section-title mt-0">Silahkan pilih hari untuk reminder</div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customtera60" name="tera1[]" value="60">
                                    <label class="custom-control-label" for="customtera60">60 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customtera50" name="tera1[]" value="50">
                                    <label class="custom-control-label" for="customtera50">50 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customtera40" name="tera1[]" value="40">
                                    <label class="custom-control-label" for="customtera40">40 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customtera30" name="tera1[]" value="30">
                                    <label class="custom-control-label" for="customtera30">30 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customtera25" name="tera1[]" value="25">
                                    <label class="custom-control-label" for="customtera25">25 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customtera20" name="tera1[]" value="20">
                                    <label class="custom-control-label" for="customtera20">20 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customtera15" name="tera1[]" value="15">
                                    <label class="custom-control-label" for="customtera15">15 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customtera14" name="tera1[]" value="14">
                                    <label class="custom-control-label" for="customtera14">14 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customtera10" name="tera1[]" value="10">
                                    <label class="custom-control-label" for="customtera10">10 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customtera7" name="tera1[]" value="7">
                                    <label class="custom-control-label" for="customtera7">7 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customtera6" name="tera1[]" value="6">
                                    <label class="custom-control-label" for="customtera6">6 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customtera5" name="tera1[]" value="5">
                                    <label class="custom-control-label" for="customtera5">5 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customtera4" name="tera1[]" value="4">
                                    <label class="custom-control-label" for="customtera4">4 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customtera3" name="tera1[]" value="3">
                                    <label class="custom-control-label" for="customtera3">3 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customtera2" name="tera1[]" value="2">
                                    <label class="custom-control-label" for="customtera2">2 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customtera1" name="tera1[]" value="1">
                                    <label class="custom-control-label" for="customtera1">1 Hari</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Periode Reminder Pajak</h4>
                            </div>
                            <div class="card-body">
                                <div class="section-title mt-0">Silahkan pilih hari untuk reminder</div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="custompajak60" name="pajak1[]" value="60">
                                    <label class="custom-control-label" for="custompajak60">60 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="custompajak50" name="pajak1[]" value="50">
                                    <label class="custom-control-label" for="custompajak50">50 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="custompajak40" name="pajak1[]" value="40">
                                    <label class="custom-control-label" for="custompajak40">40 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="custompajak30" name="pajak1[]" value="30">
                                    <label class="custom-control-label" for="custompajak30">30 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="custompajak25" name="pajak1[]" value="25">
                                    <label class="custom-control-label" for="custompajak25">25 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="custompajak20" name="pajak1[]" value="20">
                                    <label class="custom-control-label" for="custompajak20">20 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="custompajak15" name="pajak1[]" value="15">
                                    <label class="custom-control-label" for="custompajak15">15 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="custompajak14" name="pajak1[]" value="14">
                                    <label class="custom-control-label" for="custompajak14">14 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="custompajak10" name="pajak1[]" value="10">
                                    <label class="custom-control-label" for="custompajak10">10 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="custompajak7" name="pajak1[]" value="7">
                                    <label class="custom-control-label" for="custompajak7">7 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="custompajak6" name="pajak1[]" value="6">
                                    <label class="custom-control-label" for="custompajak6">6 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="custompajak5" name="pajak1[]" value="5">
                                    <label class="custom-control-label" for="custompajak5">5 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="custompajak4" name="pajak1[]" value="4">
                                    <label class="custom-control-label" for="custompajak4">4 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="custompajak3" name="pajak1[]" value="3">
                                    <label class="custom-control-label" for="custompajak3">3 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="custompajak2" name="pajak1[]" value="2">
                                    <label class="custom-control-label" for="custompajak2">2 Hari</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="custompajak1" name="pajak1[]" value="1">
                                    <label class="custom-control-label" for="custompajak1">1 Hari</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        $query = $this->db->query("SELECT * FROM cronjob");
                        if($query->num_rows()>0){
                    ?>
                    <div class="col-0">
                        <div class="card">
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                    <?php
                        }else{?>
                            <div class="col-0">
                                <div class="card">
                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </form>
    </section>
</div>



<script>
    var cron = JSON.parse('<?php echo $cronjson; ?>');
    console.log(cron);

    var keur = cron.keur1;
    var tera = cron.tera1;
    var pajak = cron.pajak1;

    //console.log(keur);
    //console.log(keur.split(','));
    var keurarr = keur.split(',');
    var teraarr = tera.split(',');
    var pajakarr = pajak.split(',');

    for(var k in keurarr) {
        //console.log(k, keurarr[k]);
        document.getElementById("customCheck"+keurarr[k]).checked=true;
    }

    for(var i in teraarr) {
        //console.log(k, keurarr[k]);
        document.getElementById("customtera"+teraarr[i]).checked=true;
    }

    for(var u in pajakarr) {
        //console.log(k, keurarr[k]);
        document.getElementById("custompajak"+pajakarr[u]).checked=true;
    }
</script>