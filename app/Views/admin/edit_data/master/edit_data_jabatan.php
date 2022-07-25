<?php foreach ($jabatan as $key => $value) : ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        UBAH DATA JABATAn
                    </h2>
                    <?php echo form_open('master/simpan_edit_data_jabatan/' . $value['id_jabatan']) ?>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Jabatan</label>
                                <input type="text" class="form-control" name="nam_jab" value="<?= $value['nama_jabatan'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kode Jabatan</label>
                                <input type="text" class="form-control" name="nama" value="<?= $value['kode_jabatan'] ?>" readonly>
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