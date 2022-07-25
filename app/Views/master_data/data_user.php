                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="card-title" style="margin-top: 10px;">
                                            DATA USER
                                        </h2>
                                        <div class="text-primary pb-2" style="font-size: 16px; font-weight:500;">Total Data : <strong><?= $total ?></strong> </div>
                                        <div class="table-responsive">
                                            <table id="datatable" class="table table-striped table-bordered thead-primary dataTable no-footer" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">No</th>
                                                        <th class="text-center">Username</th>
                                                        <th class="text-center">Hak Akses</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($user as $key => $value) { ?>
                                                        <tr class="text-center">
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $value['username'] ?></td>
                                                            <td>
                                                                <?php $lvl = $value['hak_akses'];
                                                                if ($lvl == 1) {
                                                                    echo "Admin";
                                                                } else {
                                                                    echo "Petugas";
                                                                } ?>
                                                            </td>
                                                            <td>
                                                                <a href="/master/edit_data_user/<?= $value['id_user']; ?>" class="px-2 text-primary" data-placement="top" title="Ubah">
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