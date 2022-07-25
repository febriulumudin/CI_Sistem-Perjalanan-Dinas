<div class="row">
    <?php foreach ($rincian as $key => $value) : ?>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        ISI DATA RINCIAN BIAYA
                    </h2>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Uang Harian</label>
                                <label>: </label>
                                <label><?= $value['uang_harian'] ?></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Biaya Penginapan</label>
                                <label>: </label>
                                <label><?= $value['biaya_penginapan'] ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Tempat Penginapan</label>
                                <label>: </label>
                                <label><?= $value['nama_tempat'] ?></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Uang Representasi</label>
                                <label>: </label>
                                <label><?= $value['uang_representasi'] ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Biaya Sewa Kendaraan</label>
                                <label>: </label>
                                <label><?= $value['sewa_kendaraan'] ?></label>
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
                                <label>: </label>
                                <label><?= $value['br_pesawat/ka'] ?></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Tiket</label>
                                <label>: </label>
                                <label><?= $value['br_no_tiket'] ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Terbang</label>
                                <label>: </label>
                                <label><?= $value['br_no_terbang'] ?></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Waktu</label>
                                <label>: </label>
                                <label><?= $value['br_jam'] ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Tempat Duduk</label>
                                <label>: </label>
                                <label><?= $value['br_no_tempat_duduk'] ?></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <label>: </label>
                                <label><?= $value['br_tanggal'] ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Asal</label>
                                <label>: </label>
                                <label><?= $value['br_asal'] ?></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tujuan</label>
                                <label>: </label>
                                <label><?= $value['br_tujuan'] ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga Tiket</label>
                                <label>: </label>
                                <label><?= $value['br_harga'] ?></label>
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
                                <label>: </label>
                                <label><?= $value['kmb_pesawat/ka'] ?></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Tiket</label>
                                <label>: </label>
                                <label><?= $value['kmb_no_tiket'] ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Terbang</label>
                                <label>: </label>
                                <label><?= $value['kmb_no_terbang'] ?></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Waktu</label>
                                <label>: </label>
                                <label><?= $value['kmb_jam'] ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Tempat Duduk</label>
                                <label>: </label>
                                <label><?= $value['kmb_no_tempat_duduk'] ?></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <label>: </label>
                                <label><?= $value['kmb_tanggal'] ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Asal</label>
                                <label>: </label>
                                <label><?= $value['kmb_asal'] ?></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tujuan</label>
                                <label>: </label>
                                <label><?= $value['kmb_tujuan'] ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga Tiket</label>
                                <label>: </label>
                                <label><?= $value['kmb_harga'] ?></label>
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
                                <br>
                                <span>Total <?= $total_bukti_harian ?> Data Terupload</span> <a href="#" data-toggle="modal" data-placement="top" title="Lihat Data" data-target="#lihat<?= $value['id_spt']; ?>"><u>LIHAT DATA</u></a>
                                <br><br>
                                <!---->

                                <!-- BUKTI PENGINAPAN-->
                                <label for="images">
                                    <strong>Bukti Pengeluaran Penginapan</strong>
                                </label>
                                <br>
                                <span>Total <?= $total_bukti_penginapan ?> Data Terupload</span> <a href="#" data-toggle="modal" data-placement="top" title="Lihat Data" data-target="#lihat_peng<?= $value['id_spt']; ?>"><u>LIHAT DATA</u></a>
                                <br><br>
                                <!---->

                                <!-- BUKTI REPRESENTASI-->
                                <label for="images">
                                    <strong>Bukti Pengeluaran Representasi</strong>
                                </label>
                                <br>
                                <span>Total <?= $total_bukti_representasi ?> Data Terupload</span> <a href="#" data-toggle="modal" data-placement="top" title="Lihat Data" data-target="#lihat_rep<?= $value['id_spt']; ?>"><u>LIHAT DATA</u></a>
                                <br><br>
                                <!---->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group file-area">
                                <!-- BUKTI SEWA KENDARAAN-->
                                <label for="images">
                                    <strong>Bukti Pengeluaran Sewa Kendaraan</strong>
                                </label>
                                <br>
                                <span>Total <?= $total_bukti_sewa ?> Data Terupload</span> <a href="#" data-toggle="modal" data-placement="top" title="Lihat Data" data-target="#lihat_sewa<?= $value['id_spt']; ?>"><u>LIHAT DATA</u></a>
                                <br><br>
                                <!---->

                                <!-- BUKTI TIKET-->
                                <label for="images">
                                    <strong>Bukti Pengeluaran Tiket</strong>
                                </label>
                                <br>
                                <span>Total <?= $total_bukti_tiket ?> Data Terupload</span> <a href="#" data-toggle="modal" data-placement="top" title="Lihat Data" data-target="#lihat_tiket<?= $value['id_spt']; ?>"><u>LIHAT DATA</u></a>
                                <br><br>
                                <!---->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                        <strong><?= $no++ ?>. <?= $value_bukti['jenis_bukti'] ?></strong>
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
                        <strong><?= $no++ ?>. <?= $value_bukti['jenis_bukti'] ?> </strong>
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
                        <strong><?= $no++ ?>. <?= $value_bukti['jenis_bukti'] ?> </strong>
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
                        <strong><?= $no++ ?>. <?= $value_bukti['jenis_bukti'] ?> </strong>
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
                        <strong><?= $no++ ?>. <?= $value_bukti['jenis_bukti'] ?> </strong>
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