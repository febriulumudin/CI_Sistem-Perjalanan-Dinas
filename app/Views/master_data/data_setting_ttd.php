<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">
                    PENGATURAN PENANDA TANGAN SPT
                </h2>
                <div class="text-primary pb-2" style="font-size: 16px; font-weight:500;">Total Data : <strong><?= $total ?></strong> </div>
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered thead-primary dataTable no-footer" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Penanda Tangan</th>
                                <th class="text-center">Nip</th>
                                <th class="text-center">Jabatan</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1;
                            foreach ($ttd as $key => $value) { ?>
                                <tr class="text-center">
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['nama_ttd'] ?></td>
                                    <td><?= $value['nip'] ?></td>
                                    <td><?= $value['jabatan'] ?></td>
                                    <td>
                                        <a href="/master/edit_setting_ttd/<?= $value['id_setting_ttd']; ?>" class="px-2 text-primary" data-placement="top" title="Ubah">
                                            <i class="fa fa-edit font-size-18"></i>
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