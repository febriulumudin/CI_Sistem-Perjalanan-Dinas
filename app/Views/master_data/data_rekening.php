<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">
                    PENGATURAN KODE REKENING
                </h2>
                <div class="text-primary pb-2" style="font-size: 16px; font-weight:500;">Total Data : <strong><?= $total ?></strong> </div>
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered thead-primary dataTable no-footer" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Kode Rekening</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1;
                            foreach ($rekening as $key => $value) { ?>
                                <tr class="text-center">
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['kode_rekening'] ?></td>
                                    <td>
                                        <a href="/master/edit_data_rekening/<?= $value['id_rekening']; ?>" class="px-2 text-primary" data-placement="top" title="Ubah">
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