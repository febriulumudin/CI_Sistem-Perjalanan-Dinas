<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">
                    DATA PERINTAH TUGAS
                    &nbsp;
                </h2>
                <div class="text-primary pb-2" style="font-size: 16px; font-weight:500;">Total Data : <strong><?= $total ?></strong> </div>
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-striped thead-primary dataTable no-footer" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">&nbsp;&nbsp;</th>
                                <th class="text-center">No</th>
                                <th class="text-center">Dalam Rangka</th>
                                <th class="text-center">Daerah Tujuan</th>
                                <th class="text-center">Lama Hari</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1;
                            foreach ($surat_tugas as $key => $value) { ?>
                                <tr>
                                    <?php
                                    if ($value['status_dilihat'] == 0) { ?>
                                        <td class="text-center"><i class="fa fa-eye-slash" data-placement="top" title="Belum Dilihat"></i></td>
                                    <?php } else { ?>
                                        <td class="text-center"><i class=" fa fa-eye" data-placement="top" title="Dilihat"></i></td>
                                    <?php } ?>
                                    <td><?= $no++; ?></td>
                                    <td style="max-width: 240px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?= $value['dalam_rangka'] ?></td>
                                    <td class="text-center"><?= $value['tujuan'] ?></td>
                                    <td class="text-center"><?= $value['lama_hari'] ?> Hari</td>
                                    <td class="text-center">
                                        <a href="/data_pegawai/detail_surat_perintah/<?= $value['id_surat_perintah']; ?>/<?= $value['no_program'] ?>/<?= $value['nip_pegawai'] ?>/<?= $value['id_spt_pegawai'] ?>" class="px-2 text-success" data-placement="top" title="Detail">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div>

<!--HAPUS-->
<?php foreach ($surat_tugas as $key => $value) { ?>
    <div class="modal fade" id="hapus<?= $value['id_surat_perintah']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Ingin Menghapus Surat Perintah <?= $value['no_program'] ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('/spt/hapus_surat_perintah/' . $value['id_surat_perintah'] . '/' . $value['no_program']) ?>" type="submit" class="btn btn-danger">Ya</a>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->