<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">
                    LAPORAN TUGAS
                </h2>
                <div class="text-primary pb-2" style="font-size: 16px; font-weight:500;">Total Data : <strong><?= $total ?></strong> </div>
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered thead-primary dataTable no-footer" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">No Program</th>
                                <th class="text-center">Surat Tugas</th>
                                <th class="text-center">Cek Detail</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1;
                            foreach ($laporan as $key => $value) { ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $value['no_program'] ?></td>
                                    <td style="max-width: 240px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?= $value['dalam_rangka'] ?></td>
                                    <td class="text-center">
                                        <a href="/laporan/laporan_tugas_detail/<?= $value['no_program'] ?>" class="px-2 text-success" ddata-placement="top" title="Detail">
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