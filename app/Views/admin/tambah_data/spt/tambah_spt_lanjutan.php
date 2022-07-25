<?php foreach ($surat_tugas as $key => $value) { ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title" style="font-size: 19px;">
                        TAMBAH SURAT PERINTAH TUGAS LANJUTAN
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
                            <label>: <?= $value['dalam_rangka'] ?></label>
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
                            <label>No Rekening</label>
                        </div>
                        <div class="col-md-10">
                            <label>: <?= $value['no_rekening'] ?></label>
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
                            <a href="/spt/ubah_data_lanjutan_dua/<?= $value['id_surat_perintah'] ?>" type="button" class="btn btn-md btn-outline-primary float-right">
                                <strong>Ubah Data</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card mt-2 mb-2">
                <div class="card-body">
                    <h2 class="card-title" style="font-size: 18px;">
                        PESERTA YANG IKUT DALAM PERINTAH TUGAS
                        &nbsp;
                        <a href="/spt/simpan_data_spt_lanjut/<?= $value['no_program'] ?>" type="button" class="btn btn-sm btn-outline-primary" style="padding-top: -30px;">
                            <strong>TAMBAH PESERTA</strong>
                        </a>
                    </h2>
                    <?php echo form_open('/spt/simpan_data_spt_lanjutan_db/' . $value['no_program']) ?>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <div class="table-responsive" style="width: 100%;">
                                <table id="datatable" class="table table-striped table-bordered thead-primary dataTable no-footer table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="9%">No</th>
                                            <th class="text-center">Nip</th>
                                            <th class="text-center">Nama Pegawai</th>
                                            <th class="text-center">Jabatan</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($anggota as $key => $valueuser) { ?>
                                            <tr class="text-center">
                                                <!--<td><input type="checkbox" name="id_spt[]" value="<?= $valueuser['id_spt_pegawai'] ?>" style="visibility: hidden;" checked><?= $valueuser['nip'] ?></td>-->
                                                <td><?= $no++ ?></td>
                                                <td><?= $valueuser['nip'] ?></td>
                                                <td><?= $valueuser['nama'] ?></td>
                                                <td><?= $valueuser['nama_jabatan'] ?></td>
                                                <td>
                                                    <a href="#" class="px-2 text-danger" data-toggle="modal" data-placement="top" title="Hapus" data-target="#hapus<?= $valueuser['id_spt_pegawai']; ?>">
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
                    <div class="form-group row">
                        <div class="col-md-10">
                            <a href="/spt/detail_surat_perintah/<?= $value['id_surat_perintah']; ?>/<?= $value['no_program'] ?>" class="btn btn-md btn-outline-primary float-right mt-3 mb-2">
                                <strong>Simpan Data</strong>
                            </a>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <!--HAPUS-->
    <?php foreach ($anggota as $key => $valuepeserta) { ?>
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
                        <a href="<?= base_url('/spt/hapus_peserta_lanjutan/' . $valuepeserta['id_spt_pegawai'] . '/' . $valuepeserta['nomor_program']) ?>" type="submit" class="btn btn-danger">Ya</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    <?php } ?>
<?php } ?>