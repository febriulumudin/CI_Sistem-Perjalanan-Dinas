    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        TAMBAH DATA JABATAN
                    </h2>
                    <?php echo form_open('master/simpan_data_jabatan') ?>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Jabatan</label>
                                <input type="text" class="form-control" name="nam_jab">
                            </div>
                        </div>
                        <?php $kod_jab = $total + 1 ?>
                        <div class="col-md-6 hidden">
                            <div class="form-group">
                                <label>Kode Jabatan</label>
                                <input type="text" class="form-control" name="kod_jab" value="<?= $kod_jab ?>">
                            </div>
                        </div>
                    </div>

                    <div class="pt-2 mb-2">
                        <button type="submit" class="btn btn-primary w-md">Tambah</button>
                    </div>
                    <?php echo form_close() ?>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->