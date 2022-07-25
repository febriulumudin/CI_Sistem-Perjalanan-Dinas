<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">
                    LAPORAN PEGAWAI
                </h2>
                <div class="text-primary pb-2" style="font-size: 16px; font-weight:500;">Total Data : <strong><?= $total ?></strong> </div>
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered thead-primary dataTable no-footer" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th rowspan="3" class="text-center" style="vertical-align: middle;">No</th>
                                <th colspan="4" class="text-center">Surrat Perintah Tugas</th>
                                <th colspan="6" class="text-center">SPPD</th>
                                <th colspan="8" class="text-center">Tanda Bukti/Kwitansi</th>
                                <th colspan="19" class="text-center">Data Transportasi/Akomodasi</th>
                            </tr>
                            <tr>
                                <th rowspan="2" class="text-center" style="vertical-align: middle;" style="vertical-align: middle;">Nama Lengkap Tanpa Gelar</th>
                                <th rowspan="2" class="text-center" style="vertical-align: middle;" style="vertical-align: middle;">Nip</th>
                                <th rowspan="2" class="text-center" style="vertical-align: middle;" style="vertical-align: middle;">Dalam Rangka</th>
                                <th rowspan="2" class="text-center" style="vertical-align: middle;" style="vertical-align: middle;">Bidang/Unit</th>

                                <th rowspan="2" class="text-center" style="vertical-align: middle;">Gol. Peg</th>
                                <th rowspan="2" class="text-center" style="vertical-align: middle;">Daerah Tujuan</th>
                                <th rowspan="2" class="text-center" style="vertical-align: middle;">Instansi</th>
                                <th rowspan="2" class="text-center" style="vertical-align: middle;">Berangkat</th>
                                <th rowspan="2" class="text-center" style="vertical-align: middle;">Kembali</th>
                                <th rowspan="2" class="text-center" style="vertical-align: middle;">Lama Hari</th>

                                <th rowspan="2" class="text-center" style="vertical-align: middle;">No. Bukti</th>
                                <th rowspan="2" class="text-center" style="vertical-align: middle;">Tanggal Bukti</th>
                                <th rowspan="2" class="text-center" style="vertical-align: middle;">Jumlah Dibayarkan</th>
                                <th colspan="5" class="text-center">Rincian Biaya</th>

                                <th rowspan="2" class="text-center" style="vertical-align: middle;">Penginapan</th>
                                <th colspan="9" class="text-center">Berangkat</th>
                                <th colspan="9" class="text-center">Kembali</th>
                            </tr>
                            <tr>
                                <th class="text-center">Uang Harian</th>
                                <th class="text-center">Biaya Transport</th>
                                <th class="text-center">Biaya Penginapan</th>
                                <th class="text-center">Uang Representasi</th>
                                <th class="text-center">Sewa Kendaraan</th>

                                <th class="text-center">Pswt/KA</th>
                                <th class="text-center">Nomor Tiket</th>
                                <th class="text-center">Nomor Flight</th>
                                <th class="text-center">Jam</th>
                                <th class="text-center">No. Tmpt Duduk</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Asal</th>
                                <th class="text-center">Tujuan</th>
                                <th class="text-center">Harga</th>

                                <th class="text-center">Pswt/KA</th>
                                <th class="text-center">Nomor Tiket</th>
                                <th class="text-center">Nomor Flight</th>
                                <th class="text-center">Jam</th>
                                <th class="text-center">No. Tmpt Duduk</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Asal</th>
                                <th class="text-center">Tujuan</th>
                                <th class="text-center">Harga</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1;
                            foreach ($laporan as $key => $value) { ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $value['nama'] ?></td>
                                    <td><?= $value['nip'] ?></td>
                                    <td style="max-width: 87%; text-overflow: ellipsis;"><?= $value['dalam_rangka'] ?></td>
                                    <td>Bidang SMA</td>

                                    <td><?= $value['golongan'] ?></td>
                                    <td><?= $value['tujuan'] ?></td>
                                    <td><?= $value['instansi'] ?></td>
                                    <td><?= $value['berangkat'] ?></td>
                                    <td><?= $value['kembali'] ?></td>
                                    <td><?= $value['lama_hari'] ?></td>

                                    <td><?= $value['no_bukti'] ?></td>
                                    <td><?= $value['tgl_bukti'] ?></td>
                                    <td></td>
                                    <td><?= $value['uang_harian'] ?></td>
                                    <td></td>
                                    <td><?= $value['biaya_penginapan'] ?></td>

                                    <td><?= $value['uang_representasi'] ?></td>
                                    <td><?= $value['sewa_kendaraan'] ?></td>
                                    <td><?= $value['nama_tempat'] ?></td>

                                    <td><?= $value['br_pesawat/ka'] ?></td>
                                    <td><?= $value['br_no_tiket'] ?></td>
                                    <td><?= $value['br_no_terbang'] ?></td>
                                    <td><?= $value['br_jam'] ?></td>
                                    <td><?= $value['br_no_tempat_duduk'] ?></td>
                                    <td><?= $value['br_tanggal'] ?></td>
                                    <td><?= $value['br_asal'] ?></td>
                                    <td><?= $value['br_tujuan'] ?></td>
                                    <td><?= $value['br_harga'] ?></td>

                                    <td><?= $value['kmb_pesawat/ka'] ?></td>
                                    <td><?= $value['kmb_no_tiket'] ?></td>
                                    <td><?= $value['kmb_no_terbang'] ?></td>
                                    <td><?= $value['kmb_jam'] ?></td>
                                    <td><?= $value['kmb_no_tempat_duduk'] ?></td>
                                    <td><?= $value['kmb_tanggal'] ?></td>
                                    <td><?= $value['kmb_asal'] ?></td>
                                    <td><?= $value['kmb_tujuan'] ?></td>
                                    <td><?= $value['kmb_harga'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div>