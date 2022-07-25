<?php
foreach ($detail_approve as $key => $value) { ?>
    <?php
    function tgl_indo($tanggal)
    {
        $bulan = array(
            0 =>   '00',
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    }
    ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    if ($value['status_pengajuan'] == 0) { ?>
                        <h2 class="card-title" style="font-size: 21px;">
                            DETAIL DATA SURAT PERINTAH TUGAS <span class="btn btn-secondary float-right" style="font-size: 10px;">Belum Dikonfirmasi</span>
                        </h2>
                    <?php } elseif ($value['status_pengajuan'] == 1) { ?>
                        <h2 class="card-title" style="font-size: 21px;">
                            DETAIL DATA SURAT PERINTAH TUGAS <span class="btn btn-primary float-right" style="font-size: 10px;">Konfirmasi Disetujui</span>
                        </h2>
                    <?php } else { ?>
                        <h2 class="card-title" style="font-size: 21px;">
                            DETAIL DATA SURAT PERINTAH TUGAS <span class="btn btn-danger float-right" style="font-size: 10px;">Konfirmasi Dibatalkan</span>
                        </h2>
                    <?php }
                    ?>
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
                            <label>: <?= tgl_indo($value['berangkat']); ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label>Kembali</label>
                        </div>
                        <div class="col-md-10">
                            <label>: <?= tgl_indo($value['kembali']); ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label>Lama Hari</label>
                        </div>
                        <div class="col-md-10">
                            <label>: <?= $value['lama_hari'] ?> Hari</label>
                        </div>
                    </div>
                    <br>

                    <?php
                    foreach ($status as $key => $stts) {
                        if ($stts['status_pengajuan'] == 0) { ?>
                            <!-- 0 = Belum Mengajukan -->
                            <div class="form-group row">
                                <div class="col-md-10">
                                    <label style="font-size: 15px; text-align:justify;">Apakah anda pada hari itu tidak ada kegiatan tugas lainnya dan jika bisa menjalankan tugas pada hari itu pilih setuju permintaan, dan jika tidak bisa maka pilih batal permintaan dan isi alasan kenapa tidak mensetujui permintaan tugas ini!</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-5">
                                    <a href="/data_pegawai/setuju_permintaan/<?= $value['id_surat_perintah']; ?>/<?= $value['no_program'] ?>/<?= $value['nip_pegawai'] ?>/<?= $value['id_spt_pegawai'] ?>" type="button" class="btn btn-md btn-outline-primary float-right">
                                        <strong>Setujui Permintaan</strong>
                                    </a>
                                </div>
                                <div class="col-md-5">
                                    <a href="#" class="btn btn-md btn-outline-danger" data-toggle="modal" data-placement="top" title="Hapus" data-target="#hapusspt<?= $value['id_surat_perintah']; ?>">
                                        <strong>Batal Permintaan</strong>
                                    </a>
                                </div>
                            </div>
                        <?php } elseif ($stts['status_pengajuan'] == 1) { ?>
                            <!-- 1 = Setuju pengajuan -->
                            <div class="form-group row">
                                <div class="col-md-10">
                                    <label style="font-size: 15px; text-align:justify;">Anda menyetujui tugas ini, silahkan cek dan konfirmasi kembali jika terdapat informasi yang salah dan ingin membatalkan persetujuan. Dan jika membatalkan persetujuan maka isi alasan kenapa mengajukan pembatalan permintaan tugas ini!</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-10 text-center">
                                    <a href="#" class="btn btn-md btn-outline-danger" data-toggle="modal" data-placement="top" title="Hapus" data-target="#hapusspt<?= $value['id_surat_perintah']; ?>">
                                        <strong>Batal Permintaan</strong>
                                    </a>
                                </div>
                            </div>
                        <?php } else { ?>
                            <!-- 2 = Tolak pengajuan -->
                            <div class="form-group row">
                                <div class="col-md-10">
                                    <label style="font-size: 15px; text-align:justify;">Pemintaan penolakan diterima, jika terdapat kesalahan silahkan hubungi administrasi dan konfirmasi kembali</label>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>

            <div class="card">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card-body">
                            <h2 class="card-title" style="font-size: 19px;">
                                PESERTA YANG SANGGUP DAN MENSETUJUI PERMINTAAN PADA TUGAS INI
                            </h2>
                            <div class="text-primary pb-2" style="font-size: 15px; font-weight:500;">Total Data : <strong><?= $totalpeserta ?></strong> </div>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered table-striped thead-primary dataTable no-footer" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 7%;">No</th>
                                            <th class="text-center" style="width: 43%;">Nip</th>
                                            <th class="text-center" style="width: 50%;">Nama Pegawai</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($peserta as $key => $valuepeserta) { ?>
                                            <tr class="text-center">
                                                <td><?= $no++; ?></td>
                                                <td><?= $valuepeserta['nip'] ?></td>
                                                <td><?= $valuepeserta['nama'] ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div> <!-- end row -->

    <!--HAPUS-->
    <?php foreach ($detail_approve as $key => $value) { ?>
        <div class="modal fade" id="hapusspt<?= $value['id_surat_perintah']; ?>">
            <div class="modal-dialog">
                <?php echo form_open('/data_pegawai/tolak_permintaan/' . $value['id_surat_perintah'] . '/' . $value['no_program'] . '/' . $value['nip_pegawai'] . '/' . $value['id_spt_pegawai']) ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myModalLabel">Hapus Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span style="font-size: 15px;">Masukkan alasan kenapa anda tidak bisa memenuhi surat perintah tugas!!</span>
                        <input type="text" class="form-control" name="komen">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-danger">Ya</button>
                    </div>
                </div>
                <!-- /.modal-content -->
                <?php echo form_close() ?>
            </div>
            <!-- /.modal-dialog -->
        </div>
    <?php } ?>
    <!-- /.modal -->
<?php } ?>