    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        PESERTA DAN LAPORAN
                    </h2>
                    <div class="text-primary pb-2" style="font-size: 16px; font-weight:500;">Total Data : <strong><?= $totalpeserta ?></strong> </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered thead-primary dataTable no-footer" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nip</th>
                                    <th class="text-center">Nama Pegawai</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 1;
                                foreach ($peserta as $key => $valuepeserta) { ?>
                                    <tr class="text-center">
                                        <td><?= $no++; ?></td>
                                        <td><?= $valuepeserta['nip_pegawai'] ?></td>
                                        <td><?= $valuepeserta['nama'] ?></td>
                                        <td>
                                            <a href="/laporan/cetak_laporan/<?= $valuepeserta['id_spt_pegawai'] ?>" class="px-2 text-success" title="Cetak" target="_blank">
                                                <i class="fa fa-print"></i>
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