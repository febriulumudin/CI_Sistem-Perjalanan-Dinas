<?php foreach ($setting_ttd as $key => $value) : ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        UBAH SETTING TANDA TANGAN
                    </h2>
                    <?php echo form_open('master/simpan_edit_data_setting_ttd/' . $value['id_setting_ttd']) ?>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Penanda Tangan</label>
                                <input type="text" class="form-control" name="nama_ttd" value="<?= $value['nama_ttd'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nip</label>
                                <input type="text" class="form-control" name="nip" value="<?= $value['nip'] ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jabatan Penanda Tangan</label>
                                <input type="text" class="form-control" name="jabatan" value="<?= $value['jabatan'] ?>" readonly>
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