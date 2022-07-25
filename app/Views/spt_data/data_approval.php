                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="card-title">
                                            DATA APPROVAL
                                        </h2>
                                        <div class="text-primary pb-2" style="font-size: 16px; font-weight:500;">Total Data : <strong><?= $total ?></strong> </div>
                                        <div class="table-responsive">
                                            <table id="datatable" class="table table-striped table-bordered thead-primary dataTable no-footer" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">No</th>
                                                        <th class="text-center">Nomor Program</th>
                                                        <th class="text-center">Kegiatan</th>
                                                        <th class="text-center">Tanggal</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($approval as $key => $value) { ?>
                                                        <tr class="text-center">
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $value['no_program'] ?></td>
                                                            <td style="max-width: 240px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?= $value['dalam_rangka'] ?></td>
                                                            <td><?= $value['berangkat'] . ' Sampai ' . $value['berangkat'] ?></td>
                                                            <td>
                                                                <a href="/spt/detail_approval/<?= $value['id_spt_pegawai']; ?>/<?= $value['no_program']; ?>" class="px-2 text-success" data-placement="top" title="Detail">
                                                                    <i class="fa fa-info-circle"></i>
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