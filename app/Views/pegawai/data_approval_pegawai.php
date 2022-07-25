                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="card-title">
                                            DATA RINCIAN BIAYA
                                        </h2>
                                        <div class="text-primary pb-2" style="font-size: 18px; font-weight:500;">Total Data : <strong><?= $total ?></strong> </div>
                                        <table id="datatable" class="table table-bordered table-striped mb-0 dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Kegiatan</th>
                                                    <th class="text-center">Tanggal</th>
                                                    <th class="text-center">Status Data</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($approval as $key => $value) { ?>
                                                    <tr class="text-center">
                                                        <td><?= $no++; ?></td>
                                                        <td style="max-width: 240px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?= $value['dalam_rangka'] ?></td>
                                                        <td><?= $value['berangkat'] . ' Sampai ' . $value['berangkat'] ?></td>
                                                        <td><?= $value['status_data'] ?></td>
                                                        <td>
                                                            <a href="/data_pegawai/isi_rincianbiaya/<?= $value['id_spt_pegawai']; ?>/<?= $value['nip_pegawai']; ?>" class="px-2 text-primary" data-placement="top" title="Isi Data">
                                                                <i class="fa fa-edit font-size-18"></i>
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