<?php
foreach ($detail_approve as $key => $value) { ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title" style="font-size: 21px;">
                        DETAIL DATA APPROVAL
                    </h2>
                    <div class="form-group row mt-3 pt-3" style="font-size: 15px;">
                        <div class="col-md-2">
                            <label>Nomor Program</label>
                        </div>
                        <div class="col-md-10">
                            <label>: <?= $value['no_program'] ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label>Kegiatan</label>
                        </div>
                        <div class="col-md-10">
                            <label style="vertical-align:top;">:</label>
                            <label style="max-width: 87%; text-overflow: ellipsis;"> <?= $value['dalam_rangka'] ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label>Tujuan</label>
                        </div>
                        <div class="col-md-10">
                            <label>: <?= $value['tujuan'] ?></label>
                        </div>
                    </div>
                    <!--
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label>No Rekening</label>
                        </div>
                        <div class="col-md-10">
                            <label>: <= $value['no_rekening'] ?></label>
                        </div>
                    </div>
-->
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label>Instansi</label>
                        </div>
                        <div class="col-md-10">
                            <label>: <?= $value['instansi'] ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label>Berangkat</label>
                        </div>
                        <div class="col-md-10">
                            <label>: <?= $value['berangkat'] ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label>Kembali</label>
                        </div>
                        <div class="col-md-10">
                            <label>: <?= $value['kembali'] ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label>Lama Hari</label>
                        </div>
                        <div class="col-md-10">
                            <label>: <?= $value['lama_hari'] ?></label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body my-0">
                    <h2 class="card-title" style="font-size: 21px;">
                        PESERTA YANG IKUT DALAM PERINTAH TUGAS
                    </h2>
                    <div class="text-primary pb-2" style="font-size: 16px; font-weight:500;">Total Data : <strong><?= $totalpeserta ?></strong> </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered thead-primary dataTable no-footer" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nip</th>
                                    <th class="text-center">Nama Pegawai</th>
                                    <th class="text-center">Approve</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 1;
                                foreach ($peserta as $key => $valuepeserta) { ?>
                                    <tr class="text-center">
                                        <td><?= $no++; ?></td>
                                        <td><?= $valuepeserta['nip'] ?></td>
                                        <td><?= $valuepeserta['nama'] ?></td>
                                        <td>
                                            <?php if ($valuepeserta['approval'] == 'IYA') { ?>
                                                <i class="fa fa-check-circle font-size-18 text-success"> </i>
                                            <?php } else { ?>
                                                <a href="#" class="px-2 text-danger" data-toggle="modal" data-placement="top" title="Approve" data-target="#approve<?= $value['id_spt_pegawai']; ?>">
                                                    <!-- <i class="fa fa-times-circle font-size-18 text-danger"> </i> -->
                                                    <span class="btn btn-sm btn-danger" style="margin-top: -5px; margin-bottom: -3px; font-size: 10px;">Approve Data</span>
                                                </a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a href="/spt/isi_rincianbiaya/<?= $value['id_spt_pegawai']; ?>/<?= $value['nip_pegawai']; ?>" class="px-2 text-success" data-placement="top" title="Isi Data">
                                                <i class="fa fa-info-circle font-size-18"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
<?php } ?>


<!--APPROVAL-->
<?php foreach ($detail_approve as $key => $value) { ?>
    <div class="modal fade" id="approve<?= $value['id_spt_pegawai']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Approve Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Ingin Mengapprove Data Ini, Cek Kembali Sebelum Di Approve
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('/spt/approve_data/' . $value['id_spt_pegawai'] . '/' . $value['no_program']) ?>" type="submit" class="btn btn-success">Ya</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->


<!-- Modals Detail Rincian Biaya -->
<?php foreach ($kwitansi as $key => $value) : ?>
    <div class="modal fade" id="modalkwitansi<?= $value['id_spt_pegawai'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Detail Kwitansi Rincian Biaya</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group row" style="font-size: 15px;">
                            <div class="col-md-3">
                                <label>Nomor Bukti</label>
                            </div>
                            <div class="col-md-9">
                                <label>: <?= $value['no_bukti'] ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label>Tanggal Bukti</label>
                            </div>
                            <div class="col-md-9">
                                <label>: <?= $value['tgl_bukti'] ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label>Jumlah Keseluruhan</label>
                            </div>
                            <div class="col-md-9">
                                <label>: <?= $value['jml_seluruh'] ?></label>
                            </div>
                        </div>

                        <div class="form-group pt-2">
                            <div class="col-md-12">
                                <h5>Rincian Biaya</h5>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label>Uang Harian</label>
                            </div>
                            <div class="col-md-9">
                                <label>: <?= $value['uang_harian'] ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label>Biaya Penginapan</label>
                            </div>
                            <div class="col-md-9">
                                <label>: <?= $value['biaya_penginapan'] ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label>Nama Tempat</label>
                            </div>
                            <div class="col-md-9">
                                <label>: <?= $value['nama_tempat'] ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label>Uang Representasi</label>
                            </div>
                            <div class="col-md-9">
                                <label>: <?= $value['uang_representasi'] ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label>Sewa Kendaraan</label>
                            </div>
                            <div class="col-md-9">
                                <label>: <?= $value['sewa_kendaraan'] ?></label>
                            </div>
                        </div>

                        <div class="form-group pt-2">
                            <div class="col-md-12">
                                <h5>Transportasi :</h5>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <h5>Berangkat</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label>Pesawat/KA</label>
                                    </div>
                                    <div class="col-md-10">
                                        <label>: <?= $value['br_pesawat/ka'] ?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label>No Tiket</label>
                                    </div>
                                    <div class="col-md-10">
                                        <label>: <?= $value['br_no_tiket'] ?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label>No Terbang</label>
                                    </div>
                                    <div class="col-md-10">
                                        <label>: <?= $value['br_no_terbang'] ?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label>Pukul</label>
                                    </div>
                                    <div class="col-md-10">
                                        <label>: <?= $value['br_jam'] ?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label>No Tempat Duduk</label>
                                    </div>
                                    <div class="col-md-10">
                                        <label>: <?= $value['br_no_tempat_duduk'] ?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label>Tanggal</label>
                                    </div>
                                    <div class="col-md-10">
                                        <label>: <?= $value['br_tanggal'] ?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label>Asal</label>
                                    </div>
                                    <div class="col-md-10">
                                        <label>: <?= $value['br_asal'] ?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label>Tujuan</label>
                                    </div>
                                    <div class="col-md-10">
                                        <label>: <?= $value['br_tujuan'] ?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label>Harga</label>
                                    </div>
                                    <div class="col-md-10">
                                        <label>: <?= $value['br_harga'] ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12">
                                <h5>Kembali</h5>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>Pesawat/KA</label>
                            </div>
                            <div class="col-md-10">
                                <label>: <?= $value['kmb_pesawat/ka'] ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>No Tiket</label>
                            </div>
                            <div class="col-md-10">
                                <label>: <?= $value['kmb_no_tiket'] ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>No Terbang</label>
                            </div>
                            <div class="col-md-10">
                                <label>: <?= $value['kmb_no_terbang'] ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>Pukul</label>
                            </div>
                            <div class="col-md-10">
                                <label>: <?= $value['kmb_jam'] ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>No Tempat Duduk</label>
                            </div>
                            <div class="col-md-10">
                                <label>: <?= $value['kmb_no_tempat_duduk'] ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>Tanggal</label>
                            </div>
                            <div class="col-md-10">
                                <label>: <?= $value['kmb_tanggal'] ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>Asal</label>
                            </div>
                            <div class="col-md-10">
                                <label>: <?= $value['kmb_asal'] ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>Tujuan</label>
                            </div>
                            <div class="col-md-10">
                                <label>: <?= $value['kmb_tujuan'] ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>Harga</label>
                            </div>
                            <div class="col-md-10">
                                <label>: <?= $value['kmb_harga'] ?></label>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12">
                                <h5>Bukti Pengeluaran</h5>
                            </div>
                        </div>
                        <div class="form-group row">
                            <!-- BUKTI HARIAN-->
                            <div class="col-md-12">
                                <strong><label for="images" style="margin-bottom: -10px;">Bukti Pengeluaran Harian</label></strong>
                                <br>
                                <span>Total <?= $total_bukti_harian ?> Data Terupload</span> <a href="#" data-toggle="modal" data-placement="top" title="Lihat Data" data-target="#lihat<?= $value['id_spt']; ?>"><u>LIHAT DATA</u></a>
                            </div>
                            <!---->
                        </div>

                        <div class="form-group row">
                            <!-- BUKTI PENGINAPAN-->
                            <div class="col-md-12">
                                <strong><label for="images" style="margin-bottom: -10px;">Bukti Pengeluaran Harian</label></strong>
                                <br>
                                <span>Total <?= $total_bukti_penginapan ?> Data Terupload</span> <a href="#" data-toggle="modal" data-placement="top" title="Lihat Data" data-target="#lihat_peng<?= $value['id_spt']; ?>"><u>LIHAT DATA</u></a>
                            </div>
                            <!---->
                        </div>

                        <div class="form-group row">
                            <!-- BUKTI REPRESENTASI-->
                            <div class="col-md-12">
                                <strong><label for="images" style="margin-bottom: -10px;">Bukti Pengeluaran Harian</label></strong>
                                <br>
                                <span>Total <?= $total_bukti_representasi ?> Data Terupload</span> <a href="#" data-toggle="modal" data-placement="top" title="Lihat Data" data-target="#lihat_rep<?= $value['id_spt']; ?>"><u>LIHAT DATA</u></a>
                            </div>
                            <!---->
                        </div>

                        <div class="form-group row">
                            <!-- BUKTI SEWA KENDARAAN-->
                            <div class="col-md-12">
                                <strong><label for="images" style="margin-bottom: -10px;">Bukti Pengeluaran Harian</label></strong>
                                <br>
                                <span>Total <?= $total_bukti_sewa ?> Data Terupload</span> <a href="#" data-toggle="modal" data-placement="top" title="Lihat Data" data-target="#lihat_sewa<?= $value['id_spt']; ?>"><u>LIHAT DATA</u></a>
                            </div>
                            <!---->
                        </div>

                        <div class="form-group row">
                            <!-- BUKTI TIKET-->
                            <div class="col-md-12">
                                <strong><label for="images" style="margin-bottom: -10px;">Bukti Pengeluaran Harian</label></strong>
                                <br>
                                <span>Total <?= $total_bukti_tiket ?> Data Terupload</span> <a href="#" data-toggle="modal" data-placement="top" title="Lihat Data" data-target="#lihat_tiket<?= $value['id_spt']; ?>"><u>LIHAT DATA</u></a>
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="display: inline-block !important;">
                    <a href="#" class="btn btn-danger float-right" data-dismiss="modal">Keluar</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>