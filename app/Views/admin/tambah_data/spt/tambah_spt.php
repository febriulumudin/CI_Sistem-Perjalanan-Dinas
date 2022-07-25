    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        TAMBAH SURAT PERINTAH TUGAS
                    </h2>
                    <?php echo form_open('spt/simpan_data_spt') ?>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor Program</label>
                                <input type="text" class="form-control" name="np">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kegiatan</label>
                                <input type="text" class="form-control" name="keg">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Lokasi Tujuan</label>
                                <input type="text" class="form-control" name="lok">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Instantsi</label>
                                <input type="text" class="form-control" name="ins">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Berangkat</label>
                                <input type="date" class="form-control" name="ber">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kembali</label>
                                <input type="date" class="form-control" name="kem">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Lama Hari</label>
                                <input type="number" class="form-control" name="lamhar">
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