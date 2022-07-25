<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title my-0">
                    DATA JABATAN
                    &nbsp;
                    <a href="/master/tambah_data_jabatan" type="button" class="btn btn-outline-primary waves-effect waves-light" style="margin-top: 0rem !important; min-width: 1px; padding: 6px 10px">
                        <strong>TAMBAH</strong>
                    </a>
                </h2>
                <div class="text-primary pb-2" style="font-size: 16px; font-weight:500;">Total Data : <strong><?= $total ?></strong> </div>
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered thead-primary dataTable no-footer" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Jenis Anggota</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1;
                            foreach ($jabatan as $key => $value) { ?>
                                <tr class="text-center">
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['nama_jabatan'] ?></td>
                                    <td>
                                        <a href="/master/edit_jabatan/<?= $value['id_jabatan']; ?>" class="px-2 text-primary" data-placement="top" title="Ubah">
                                            <i class="fa fa-edit font-size-18"></i>
                                        </a>
                                        <a href="#" class="px-2 text-danger" data-toggle="modal" data-placement="top" title="Hapus" data-target="#hapus<?= $value['id_jabatan']; ?>">
                                            <i class="fa fa-trash font-size-18"></i>
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


<!--HAPUS-->
<?php foreach ($jabatan as $key => $value) { ?>
    <div class="modal fade" id="hapus<?= $value['id_jabatan']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Ingin Menghapus Jabatan <?= $value['nama_jabatan'] ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('/master/hapus_jabatan/' . $value['id_jabatan']) ?>" type="submit" class="btn btn-danger">Ya</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->