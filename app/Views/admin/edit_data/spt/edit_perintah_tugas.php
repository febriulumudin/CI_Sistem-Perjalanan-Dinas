<?php foreach ($surat_perintah as $key => $value) : ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        UBAH DATA SURAT PERINTAH
                    </h2>
                    <?php echo form_open('/spt/simpan_ubah_spt_dua/' . $value['id_surat_perintah'] . '/' . $value['no_program']) ?>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor Program</label>
                                <input type="text" class="form-control" name="np" value="<?= $value['no_program'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kegiatan</label>
                                <input type="text" class="form-control" name="keg" value="<?= $value['dalam_rangka'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Lokasi Tujuan</label>
                                <input type="text" class="form-control" name="lok" value="<?= $value['tujuan'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Instantsi</label>
                                <input type="text" class="form-control" name="ins" value="<?= $value['instansi'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Berangkat</label>
                                <input type="date" class="form-control" name="ber" value="<?= $value['berangkat'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kembali</label>
                                <input type="date" class="form-control" name="kem" value="<?= $value['kembali'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Lama Hari</label>
                                <input type="number" class="form-control" name="lamhar" value="<?= $value['lama_hari'] ?>">
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