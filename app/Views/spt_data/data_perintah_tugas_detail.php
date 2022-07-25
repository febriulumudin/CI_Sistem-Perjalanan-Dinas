<?php
foreach ($detail_approve as $key => $value) { ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title" style="font-size: 21px;">
                        DETAIL DATA SURAT PERINTAH TUGAS
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
                            <label>: < $value['no_rekening'] ?></label>
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
                    <div class="form-group row">
                        <div class="col-md-10">
                            <a href="#" class="btn btn-md btn-outline-danger float-right" data-toggle="modal" data-placement="top" title="Hapus" data-target="#hapussp<?= $value['id_surat_perintah']; ?>">
                                <strong>Hapus Data</strong>
                            </a>
                            <a href="/spt/ubah_data/<?= $value['id_surat_perintah'] ?>" type="button" class="btn btn-md btn-outline-primary float-right">
                                <strong>Ubah Data</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card-body">
                            <h2 class="card-title my-0" style="font-size: 18px;">
                                PESERTA YANG IKUT DALAM PERINTAH TUGAS
                                &nbsp;
                                <a href="/spt/simpan_data_spt_lanjut/<?= $value['no_program'] ?>" type="button" class="btn btn-sm btn-outline-primary" style="padding-top: -30px;">
                                    <strong>TAMBAH PESERTA</strong>
                                </a>
                            </h2>
                            <div class="text-primary pb-2" style="font-size: 16px; font-weight:500;">Total Data : <strong><?= $totalpeserta ?></strong> </div>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped table-bordered thead-primary dataTable no-footer" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nip</th>
                                            <th class="text-center">Nama Pegawai</th>
                                            <th class="text-center">Konfirmasi</th>
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
                                                <?php
                                                if ($valuepeserta['status_pengajuan'] == 0) { ?>
                                                    <td>
                                                        <span class="btn btn-secondary" style="margin-top: -5px; margin-bottom: -3px; font-size: 10px;">Belum Dikonfirmasi</span>
                                                    </td>
                                                <?php } elseif ($valuepeserta['status_pengajuan'] == 1) { ?>
                                                    <td>
                                                        <span class="btn btn-primary" style="margin-top: -5px; margin-bottom: -3px; font-size: 10px;">Konfirmasi Disetujui</span>
                                                    </td>
                                                <?php } else { ?>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-placement="top" title="Lihat Komentar" data-target="#lihat<?= $valuepeserta['id_spt_pegawai']; ?>">
                                                            <span class="btn btn-danger" style="margin-top: -5px; margin-bottom: -3px; font-size: 10px;">Konfirmasi Dibatalkan</span>
                                                        </a>
                                                    </td>
                                                <?php } ?>
                                                <td>
                                                    <a href="#" class="px-2 text-danger" data-toggle="modal" data-placement="top" title="Hapus" data-target="#hapus<?= $valuepeserta['id_spt_pegawai']; ?>">
                                                        <i class="fa fa-trash" style="font-size: 15px;"></i>
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
            </div>
        </div>
    </div> <!-- end row -->


    <!--HAPUS PESERTA-->
    <?php foreach ($peserta as $key => $valuepeserta) { ?>
        <div class="modal fade" id="hapus<?= $valuepeserta['id_spt_pegawai']; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myModalLabel">Hapus Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Ingin Menghapus Peserta <?= $valuepeserta['nama'] ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Tidak</button>
                        <a href="<?= base_url('/spt/hapus_peserta/' . $valuepeserta['id_spt_pegawai'] . '/' . $value['id_surat_perintah'] . '/' . $valuepeserta['nomor_program']) ?>" type="submit" class="btn btn-danger">Ya</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    <?php } ?>
    <!-- /.modal -->

    <!--HAPUS SURAT PERINTAH-->
    <?php foreach ($surat_tugas as $key => $value) { ?>
        <div class="modal fade" id="hapussp<?= $value['id_surat_perintah']; ?>">
            <div class="modal-dialog">
                <?php echo form_open('/spt/hapus_surat_perintah/' . $value['id_surat_perintah'] . '/' . $value['no_program']) ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myModalLabel">Hapus Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Ingin Menghapus Surat Perintah <?= $value['no_program'] ?>
                        <?php foreach ($data_spt as $key => $valuesp) { ?>
                            <input type="checkbox" name="id_spt[]" value="<?= $valuesp['id_spt_pegawai'] ?>" style="visibility: hidden;" checked>
                        <?php } ?>
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

    <!--LIHAT KOMENTAR PESERTA PENOLAKAN-->
    <?php foreach ($peserta as $key => $valuepeserta) { ?>
        <div class="modal fade" id="lihat<?= $valuepeserta['id_spt_pegawai']; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myModalLabel">Hapus Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Alasan komentar kenapa membatalkan konfirmasi :
                        <table border="0">
                            <tr>
                                <td class="pt-2 pr-2 pb-2" style="font-size: 14px;">
                                    <?= $valuepeserta['komentar']; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    <?php } ?>
    <!-- /.modal -->
<?php } ?>