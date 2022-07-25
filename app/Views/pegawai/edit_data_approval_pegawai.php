<div class="row">
    <?php foreach ($rincian as $key => $value) : ?>
        <div class="col-12">
            <?php echo form_open_multipart('/data_pegawai/simpan_isi_rincian/' . $value['id_rincian_biaya'] . '/' . $value['nip_pegawai'] . '/' . $value['id_spt']) ?>

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        ISI DATA RINCIAN BIAYA
                    </h2>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Uang Harian</label>
                                <input type="text" class="form-control" name="uang_harian" value="<?= $value['uang_harian'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Biaya Penginapan</label>
                                <input type="text" class="form-control" name="biaya_penginapan" value="<?= $value['biaya_penginapan'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Tempat Penginapan</label>
                                <input type="text" class="form-control" name="nama_tmp" value="<?= $value['nama_tempat'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Uang Representasi</label>
                                <input type="text" class="form-control" name="uang_rep" value="<?= $value['uang_representasi'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php if ($value['sewa_kendaraan'] == NULL) { ?>
                                    <label>Biaya Sewa Kendaraan</label>
                                    <input type="text" class="form-control" name="uang_sewa" onfocus="if(this.value == 'Masukkan Nominal Total Penyewaan'){this.value = ''}" value="Masukkan Nominal Total Penyewaan">
                                    <label style="font-size: 12px;"><i>(Jika anda menyewa kendaraan ketika ditempat. Seperti menyewa mobil, motor atau kendaraan lain untuk menempuh perjalanan dari penginapan ke tempat tugas)</i></label>
                                <?php } else { ?>
                                    <label>Biaya Sewa Kendaraan</label>
                                    <input type="text" class="form-control" name="uang_sewa" value="<?= $value['sewa_kendaraan'] ?>">
                                    <label style="font-size: 12px;"><i>(Jika anda menyewa kendaraan ketika ditempat. Seperti menyewa mobil, motor atau kendaraan lain untuk menempuh perjalanan dari penginapan ke tempat tugas)</i></label>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mt-3 pb-1">
                        TRANSPORTASI BERANGKAT
                    </h3>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Transportasi</label>
                                <select class="form-control" name="psw_ka">
                                    <?php if ($value['br_pesawat/ka'] == 'Pesawat') { ?>
                                        <option value="">---</option>
                                        <option value="Pesawat" selected>Pesawat</option>
                                        <option value="Kereta Api">Kereta Api</option>
                                    <?php } elseif ($value['br_pesawat/ka'] == 'Kereta Api') { ?> {
                                        <option value="">---</option>
                                        <option value="Pesawat">Pesawat</option>
                                        <option value="Kereta Api" selected>Kereta Api</option>
                                    <?php } else { ?>
                                        <option value="" selected>---</option>
                                        <option value="Pesawat">Pesawat</option>
                                        <option value="Kereta Api">Kereta Api</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Tiket</label>
                                <input type="text" class="form-control" name="no_tiket" value="<?= $value['br_no_tiket'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Terbang</label>
                                <input type="text" class="form-control" name="no_terbang" value="<?= $value['br_no_terbang'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Waktu</label>
                                <input type="time" class="form-control" name="waktu" value="<?= $value['br_jam'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Tempat Duduk</label>
                                <input type="text" class="form-control" name="no_tempat_duduk" value="<?= $value['br_no_tempat_duduk'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="tgl" value="<?= $value['br_tanggal'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Asal</label>
                                <input type="text" class="form-control" name="asal" value="<?= $value['br_asal'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tujuan</label>
                                <input type="text" class="form-control" name="tujuan" value="<?= $value['br_tujuan'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga Tiket</label>
                                <input type="text" class="form-control" name="harga_tiket" value="<?= $value['br_harga'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mt-3 pb-1">
                        TRANSPORTASI KEMBALI
                    </h3>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Transportasi</label>
                                <select class="form-control" name="kmb_psw_ka">
                                    <?php if ($value['kmb_pesawat/ka'] == 'Pesawat') { ?>
                                        <option value="">---</option>
                                        <option value="Pesawat" selected>Pesawat</option>
                                        <option value="Kereta Api">Kereta Api</option>
                                    <?php } elseif ($value['kmb_pesawat/ka'] == 'Kereta Api') { ?> {
                                        <option value="">---</option>
                                        <option value="Pesawat">Pesawat</option>
                                        <option value="Kereta Api" selected>Kereta Api</option>
                                    <?php } else { ?>
                                        <option value="" selected>---</option>
                                        <option value="Pesawat">Pesawat</option>
                                        <option value="Kereta Api">Kereta Api</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Tiket</label>
                                <input type="text" class="form-control" name="kmb_no_tiket" value="<?= $value['kmb_no_tiket'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Terbang</label>
                                <input type="text" class="form-control" name="kmb_no_terbang" value="<?= $value['kmb_no_terbang'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Waktu</label>
                                <input type="time" class="form-control" name="kmb_waktu" value="<?= $value['kmb_jam'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Tempat Duduk</label>
                                <input type="text" class="form-control" name="kmb_no_tempat_duduk" value="<?= $value['kmb_no_tempat_duduk'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="kmb_tgl" value="<?= $value['kmb_tanggal'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Asal</label>
                                <input type="text" class="form-control" name="kmb_asal" value="<?= $value['kmb_asal'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tujuan</label>
                                <input type="text" class="form-control" name="kmb_tujuan" value="<?= $value['kmb_tujuan'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga Tiket</label>
                                <input type="text" class="form-control" name="kmb_harga_tiket" value="<?= $value['kmb_harga'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mt-3 pb-1">
                        UNGGAH BUKTI PENGELUARAN
                    </h3>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group file-area">
                                <!-- BUKTI HARIAN-->
                                <label for="images">
                                    <strong>Bukti Pengeluaran Harian</strong>
                                </label>
                                <span class="text-danger" style="font-size: 11px;">*file dalam bentuk format gambar cont:.jpg/.png</span>
                                <br>
                                <span>Total <?= $total_bukti_harian ?> Data Terupload</span> <a href="#" data-toggle="modal" data-placement="top" title="Lihat Data" data-target="#lihat<?= $value['id_spt']; ?>"><u>LIHAT DATA</u></a>
                                <input type="file" class="form-control-file" name="image_harian[]" multiple="multiple" style="width: 100%;">
                                <br>
                                <!---->

                                <!-- BUKTI PENGINAPAN-->
                                <label for="images">
                                    <strong>Bukti Pengeluaran Penginapan</strong>
                                </label>
                                <span class="text-danger" style="font-size: 11px;">*file dalam bentuk format gambar cont:.jpg/.png</span>
                                <br>
                                <span>Total <?= $total_bukti_penginapan ?> Data Terupload</span> <a href="#" data-toggle="modal" data-placement="top" title="Lihat Data" data-target="#lihat_peng<?= $value['id_spt']; ?>"><u>LIHAT DATA</u></a>
                                <input type="file" class="form-control-file" name="image_peng[]" multiple="multiple" style="width: 100%;">
                                <br>
                                <!---->

                                <!-- BUKTI REPRESENTASI-->
                                <label for="images">
                                    <strong>Bukti Pengeluaran Representasi</strong>
                                </label>
                                <span class="text-danger" style="font-size: 11px;">*file dalam bentuk format gambar cont:.jpg/.png</span>
                                <br>
                                <span>Total <?= $total_bukti_representasi ?> Data Terupload</span> <a href="#" data-toggle="modal" data-placement="top" title="Lihat Data" data-target="#lihat_rep<?= $value['id_spt']; ?>"><u>LIHAT DATA</u></a>
                                <input type="file" class="form-control-file" name="image_rep[]" multiple="multiple" style="width: 100%;">
                                <br>
                                <!---->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group file-area">
                                <!-- BUKTI SEWA KENDARAAN-->
                                <label for="images">
                                    <strong>Bukti Pengeluaran Sewa Kendaraan</strong>
                                </label>
                                <span class="text-danger" style="font-size: 11px;">*file dalam bentuk format gambar cont:.jpg/.png</span>
                                <br>
                                <span>Total <?= $total_bukti_sewa ?> Data Terupload</span> <a href="#" data-toggle="modal" data-placement="top" title="Lihat Data" data-target="#lihat_sewa<?= $value['id_spt']; ?>"><u>LIHAT DATA</u></a>
                                <input type="file" class="form-control-file" name="image_sewa[]" multiple="multiple" style="width: 100%;">
                                <br>
                                <!---->

                                <!-- BUKTI TIKET-->
                                <label for="images">
                                    <strong>Bukti Pengeluaran Tiket</strong>
                                </label>
                                <span class="text-danger" style="font-size: 11px;">*file dalam bentuk format gambar cont:.jpg/.png</span>
                                <br>
                                <span>Total <?= $total_bukti_tiket ?> Data Terupload</span> <a href="#" data-toggle="modal" data-placement="top" title="Lihat Data" data-target="#lihat_tiket<?= $value['id_spt']; ?>"><u>LIHAT DATA</u></a>
                                <input type="file" class="form-control-file" name="image_tiket[]" multiple="multiple" style="width: 100%;">
                                <br>
                                <!---->
                            </div>
                        </div>
                    </div>

                    <div class="pt-2 mb-2">
                        <button type="submit" class="btn btn-primary w-md">Simpan</button>
                        <a class="btn btn-danger w-md" href="/data_pegawai/rincian_biaya/<?= $value['nip_pegawai'] ?>">Kembali</a>
                    </div>
                </div>
            </div>
            <?php echo form_close() ?>
        </div> <!-- end col -->
    <?php endforeach; ?>
</div> <!-- end row -->

<!--LIHAT DATA HARIAN-->
<?php foreach ($rincian as $key => $value) { ?>
    <div class="modal fade" id="lihat<?= $value['id_spt']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Data Yang Sudah Diupload</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php $no = 1;
                    foreach ($bukti_harian as $key => $value_bukti) { ?>
                        <strong><?= $no++ ?>. <?= $value_bukti['jenis_bukti'] ?> <u><a href="<?= base_url('/data_pegawai/hapus_bukti_pembayaran/' . $value_bukti['id_bukti_pembayaran'] . '/' . $value_bukti['bukti_pembayaran'] . '/' . $idspt . '/' . $nip) ?>" class="text-danger">HAPUS</a></u> </strong>
                        <br>
                        <img src="/buktipembayaran/<?= $value_bukti['bukti_pembayaran'] ?>" alt="" width="50%" height="50%">
                        <br>
                    <?php } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Kembali</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>

<!--LIHAT DATA PENGINAPAN-->
<?php foreach ($rincian as $key => $value) { ?>
    <div class="modal fade" id="lihat_peng<?= $value['id_spt']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Data Yang Sudah Diupload</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php $no = 1;
                    foreach ($bukti_penginapan as $key => $value_bukti) { ?>
                        <strong><?= $no++ ?>. <?= $value_bukti['jenis_bukti'] ?> <u><a href="<?= base_url('/data_pegawai/hapus_bukti_pembayaran/' . $value_bukti['id_bukti_pembayaran'] . '/' . $value_bukti['bukti_pembayaran'] . '/' . $idspt . '/' . $nip) ?>" class="text-danger">HAPUS</a></u> </strong>
                        <br>
                        <img src="/buktipembayaran/<?= $value_bukti['bukti_pembayaran'] ?>" alt="" width="50%" height="50%">
                        <br>
                    <?php } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Kembali</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>

<!--LIHAT DATA REPRESENTASI-->
<?php foreach ($rincian as $key => $value) { ?>
    <div class="modal fade" id="lihat_rep<?= $value['id_spt']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Data Yang Sudah Diupload</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php $no = 1;
                    foreach ($bukti_representasi as $key => $value_bukti) { ?>
                        <strong><?= $no++ ?>. <?= $value_bukti['jenis_bukti'] ?> <u><a href="<?= base_url('/data_pegawai/hapus_bukti_pembayaran/' . $value_bukti['id_bukti_pembayaran'] . '/' . $value_bukti['bukti_pembayaran'] . '/' . $idspt . '/' . $nip) ?>" class="text-danger">HAPUS</a></u> </strong>
                        <br>
                        <img src="/buktipembayaran/<?= $value_bukti['bukti_pembayaran'] ?>" alt="" width="50%" height="50%">
                        <br>
                    <?php } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Kembali</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>

<!--LIHAT DATA SEWA KENDARAAN-->
<?php foreach ($rincian as $key => $value) { ?>
    <div class="modal fade" id="lihat_sewa<?= $value['id_spt']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Data Yang Sudah Diupload</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php $no = 1;
                    foreach ($bukti_sewa as $key => $value_bukti) { ?>
                        <strong><?= $no++ ?>. <?= $value_bukti['jenis_bukti'] ?> <u><a href="<?= base_url('/data_pegawai/hapus_bukti_pembayaran/' . $value_bukti['id_bukti_pembayaran'] . '/' . $value_bukti['bukti_pembayaran'] . '/' . $idspt . '/' . $nip) ?>" class="text-danger">HAPUS</a></u> </strong>
                        <br>
                        <img src="/buktipembayaran/<?= $value_bukti['bukti_pembayaran'] ?>" alt="" width="50%" height="50%">
                        <br>
                    <?php } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Kembali</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>

<!--LIHAT DATA TIKET-->
<?php foreach ($rincian as $key => $value) { ?>
    <div class="modal fade" id="lihat_tiket<?= $value['id_spt']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Data Yang Sudah Diupload</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php $no = 1;
                    foreach ($bukti_tiket as $key => $value_bukti) { ?>
                        <strong><?= $no++ ?>. <?= $value_bukti['jenis_bukti'] ?> <u><a href="<?= base_url('/data_pegawai/hapus_bukti_pembayaran/' . $value_bukti['id_bukti_pembayaran'] . '/' . $value_bukti['bukti_pembayaran'] . '/' . $idspt . '/' . $nip) ?>" class="text-danger">HAPUS</a></u> </strong>
                        <br>
                        <img src="/buktipembayaran/<?= $value_bukti['bukti_pembayaran'] ?>" alt="" width="50%" height="50%">
                        <br>
                    <?php } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Kembali</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>