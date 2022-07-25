    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title my-0">
                        DATA ANGGOTA & STAF
                        &nbsp;
                        <a href="/master/tambah_data_anggota" type="button" class="btn btn-md btn-outline-primary">
                            <strong>TAMBAH</strong>
                        </a>
                    </h2>
                    <div class="text-primary pb-2" style="font-size: 16px; font-weight:500; ">Total Data : <strong><?= $total ?></strong> </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered thead-primary dataTable no-footer" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">NIP</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Jabatan</th>
                                    <th class="text-center">Golongan</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 1;
                                foreach ($user as $key => $value) { ?>
                                    <tr class="text-center">
                                        <td><?= $no++; ?></td>
                                        <td><?= $value['nip'] ?></td>
                                        <td><?= $value['nama'] ?></td>
                                        <td><?= $value['nama_jabatan'] ?></td>
                                        <td><?= $value['golongan'] ?></td>
                                        <td>
                                            <?php $status = $value['sts_pns'];
                                            if ($status == 'IYA') {
                                                echo "PNS";
                                            } else {
                                                echo "Tidak PNS";
                                            } ?>
                                        </td>
                                        <td>
                                            <a href="/master/edit_pegawai/<?= $value['id_pegawai']; ?>" class="px-2 text-primary" data-placement="top" title="Ubah">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="px-2 text-danger" data-toggle="modal" data-placement="top" title="Hapus" data-target="#hapus<?= $value['id_pegawai']; ?>">
                                                <i class="fa fa-trash"></i>
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
    <?php foreach ($user as $key => $value) { ?>
        <div class="modal fade" id="hapus<?= $value['id_pegawai']; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myModalLabel">Hapus Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Ingin Menghapus Data Pegawai <?= $value['nama'] ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Tidak</button>
                        <a href="<?= base_url('/master/hapus_pegawai/' . $value['id_pegawai']) ?>" type="submit" class="btn btn-danger">Ya</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    <?php } ?>
    <!-- /.modal -->