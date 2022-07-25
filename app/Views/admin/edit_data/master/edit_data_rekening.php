<?php foreach ($rekening as $key => $value) : ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        UBAH DATA REKENING
                    </h2>
                    <?php echo form_open('/master/simpan_edit_data_rekening/' . $value['id_rekening']) ?>
                    <div class="row pt-3">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label>Kode Rekening</label>
                                <input type="text" class="form-control" name="kode_rek" value="<?= $value['kode_rekening'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 mb-2">
                        <button type="submit" class="btn btn-primary w-md">Simpan</button>
                    </div>
                    <?php echo form_close() ?>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
<?php endforeach; ?>