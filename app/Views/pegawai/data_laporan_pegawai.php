<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">
                    DATA LAPORAN TUGAS
                </h2>
                <div class="text-primary pb-2" style="font-size: 18px; font-weight:500;">Total Data : <strong><?= $total ?></strong> </div>
                <table id="datatable" class="table table-bordered table-striped mb-0 dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Kegiatan</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Status Approval</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach ($peserta as $key => $value) { ?>
                            <tr class="text-center">
                                <td><?= $no++; ?></td>
                                <td style="max-width: 240px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?= $value['dalam_rangka'] ?></td>
                                <td><?= $value['berangkat'] . ' Sampai ' . $value['berangkat'] ?></td>
                                <td><?= $value['approval'] ?></td>
                                <td>
                                    <?php if ($value['approval'] == 'IYA') { ?>
                                        <a href="/laporan/cetak_laporan/<?= $value['id_spt_pegawai'] ?>" class="px-2 text-success" title="Cetak">
                                            <i class="fa fa-print"></i>
                                        </a>
                                    <?php } else { ?>
                                        <a href="#" data-toggle="modal" data-placement="top" title="Gagal Cetak" data-target="#lihat<?= $value['id_spt_pegawai']; ?>">
                                            <i class="fa fa-print"></i>
                                        </a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<!--Tidak Bisa Cetak-->
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
                    Anda tidak dapat mencetak Kwitansi ini karena belum di Konfirmasi oleh admin, cek kembali atau hubungi admin!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger waves-effect" data-dismiss="modal">Keluar</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>