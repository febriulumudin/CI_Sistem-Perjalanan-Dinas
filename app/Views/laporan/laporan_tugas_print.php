<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dinas Pendidikan Jawa Timur</title>
    <style>
        .jj {
            text-align: center;
            font-family: arial;
            padding-top: 4px;
            width: 732px;
            height: 20px;
            border: 2px solid black;
            float: left;
            -ms-transform: skew(-20deg);
            -webkit-transform: skew(-20deg);
            transform: skew(-20deg);
        }

        .jj2 {
            font-style: unset;
            text-align: center;
            font-family: arial;
            padding-top: 4px;
            width: 210px;
            height: 20px;
            border: 2px solid black;
            float: left;
            -ms-transform: skew(-20deg);
            -webkit-transform: skew(-20deg);
            transform: skew(-20deg);
        }

        .baris {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .kolom {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }


        .kolom,
        .kolom-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .kolom-12 {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .test {
            width: 100px;
            background: red;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }

        .garis {
            width: 130px;
            height: 1px;
            background: black;
        }
    </style>

    <!-- STYLE PHP-->
    <!-- STYLE TERBILANG-->
    <?php
    function penyebut($nilai)
    {
        $nilai = abs($nilai);
        $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " " . $huruf[$nilai];
        } else if ($nilai < 20) {
            $temp = penyebut($nilai - 10) . " belas";
        } else if ($nilai < 100) {
            $temp = penyebut($nilai / 10) . " puluh" . penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " seratus" . penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = penyebut($nilai / 100) . " ratus" . penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " seribu" . penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = penyebut($nilai / 1000) . " ribu" . penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = penyebut($nilai / 1000000) . " juta" . penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = penyebut($nilai / 1000000000) . " miliar" . penyebut(fmod($nilai, 1000000000));
        } else if ($nilai < 1000000000000000) {
            $temp = penyebut($nilai / 1000000000000) . " triliun" . penyebut(fmod($nilai, 1000000000000));
        } else {
            "Data Salah";
        }
        return $temp;
    }
    function terbilang($nilai)
    {
        if ($nilai < 0) {
            $hasil = "minus " . trim(penyebut($nilai));
        } else {
            $hasil = trim(penyebut($nilai));
        }
        return $hasil;
    }
    ?>
    <!-- TANGAL INDONESIA-->
    <?php
    function tgl_indo($tanggal)
    {
        $bulan = array(
            0 =>   '00',
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    }
    ?>
</head>

<body style="font-family: arial">
    <?php
    foreach ($peserta as $key => $value) { ?>
        <div>
            <div style="padding-top: -30px;">
                <table>
                    <tr>
                        <td style="width: 70%;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                        <td>
                            <table style="border: 0px solid black; border-collapse: collapse;">
                                <tr>
                                    <td style="font-size: 15px; border: 1px solid black; border-right: 0px solid black; padding: 3px;">NO. BKU/HAL</td>
                                    <td style="font-size: 15px; border: 1px solid black; border-left: 0px solid black; padding: 3px; padding-right: 150px;">: </td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; border: 1px solid black; border-right: 0px solid black; padding: 3px;">NO. PROGRAM/KEG</td>
                                    <td style="font-size: 15px; border: 1px solid black; border-left: 0px solid black;  padding: 3px;">:&nbsp;&nbsp; <?= $value['no_program'] ?></td>
                                </tr>
                                <tr>
                                    <?php foreach ($rekening as $key => $valuerek) { ?>
                                        <td style="font-size: 15px; border: 1px solid black; border-right: 0px solid black; padding: 3px;">KODE REKENING</td>
                                        <td style="font-size: 15px; border: 1px solid black; border-left: 0px solid black;  padding: 3px;">:&nbsp;&nbsp; <?= $valuerek['kode_rekening'] ?></td>
                                    <?php } ?>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div style="padding-top: 4px; text-align:center;">
            <div style="font-size: 20px;">
                <strong><u>K W I T A N S I</u></strong>
            </div>
        </div>
        <div style="padding: 0px 50px 0px 50px;font-size: 15px;">
            <div>
                <table>
                    <tr>
                        <td width="160px">Terima Dari</td>
                        <td width="20px">:</td>
                        <td>
                            <strong>Kepala Dinas Pendidikan Provinsi Jawa Timur</strong>
                        </td>
                    </tr>
                    <tr>
                        <td width="160px">Terbilang</td>
                        <td width="20px">:</td>
                        <td style="text-transform:capitalize;">
                            <?php
                            $jml_terbilang = ucwords(terbilang($value['jml_seluruh']));
                            ?>
                            <div class="jj">
                                <strong># <?= $jml_terbilang ?> Rupiah #</strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top; padding-top: 10px;" width="160px">Untuk Pembayaran</td>
                        <td style="vertical-align: top; padding-top: 10px;" width="20px">:</td>
                        <td style="vertical-align: top; padding-top: 10px; text-transform:capitalize;" align="justify">
                            Uang Transportasi Koordinasi Dalam Layanan Penyusunan Kebijakan SMA di Jawa Timur Mengikuti Rapat Koordinasi Dalam Mensinergikan Rangkaian Kegiatan <?= $value['dalam_rangka'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 4px;" width="160px">Jumlah</td>
                        <td style="padding-top: 4px;" width="20px">:</td>
                        <td style="padding-top: 4px;">
                            <?php $jml = number_format($value['jml_seluruh'], 0, ".", "."); ?>
                            <div class="jj2">
                                <strong>Rp. <?= $jml ?>,-</strong>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <div>
            <table style="font-size: 15px;">
                <tr>
                    <td style="width: 35%; text-align: center;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td style="width: 35%; text-align: center;">
                        <span>Setuju Dibayar</span>
                        <br>
                        <span>Kuasa Pengunaan Anggaran</span>
                        <br><br><br><br><br>

                        <?php
                        foreach ($kuasa as $key => $valuekuasa) { ?>
                            <div style="font-weight: bold;"><u><?= $valuekuasa['nama_ttd'] ?></u></div>
                            <div style="font-weight: bold;">NIP. <?= $valuekuasa['nip'] ?></div>
                        <?php } ?>
                    </td>
                    <td style="width: 35%; text-align: center;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td style="width: 30%;">
                        <span>
                            Lunas Dibayar tgl. &emsp;&emsp;&emsp;
                            &emsp;&emsp;&emsp;&emsp;
                        </span>
                        <br>
                        <span>Bendahara Pengeluaran Pembantu</span>
                        <br><br><br><br><br>

                        <?php
                        foreach ($bendahara as $key => $valuebenda) { ?>
                            <div style="font-weight: bold; text-align: center;"><u><?= $valuebenda['nama_ttd'] ?></u></div>
                            <div style="font-weight: bold; text-align: center;">NIP. <?= $valuebenda['nip'] ?></div>
                        <?php } ?>
                    </td>
                    <td style="width: 35%; text-align: center;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td style="width: 35%; text-align: center;">
                        <span>Surabaya, <?= tgl_indo(date('Y-m-d')); ?></span>
                        <br>
                        <span>Yang menerima,</span>
                        <br><br><br><br><br>

                        <div style="font-weight: bold; text-transform:uppercase;"><u><?= $value['nama'] ?></u></div>
                        <div style="font-weight: bold;">NIP. <?= $value['nip'] ?></div>
                    </td>
                </tr>
            </table>
        </div>

        <hr width="95%" style="height:3px;border:none;color:#333;background-color:#333;">

        <div style="padding-top: 8px; text-align:center;">
            <div style="font-size: 20px;">
                <strong><u>RINCIAN BIAYA PERJALANAN DINAS</u></strong>
            </div>
        </div>
        <div style="padding: 20px 50px 0px 50px;">
            <div>
                <table>
                    <tr>
                        <td>Berdasarkan Surat Tugas</td>
                        <td></td>
                    </tr>
                    <tr>
                        <?php
                        $thn = date('Y');
                        ?>
                        <td>Nomor</td>
                        <td>: <?= $value['id_surat_perintah'] . '/' . $value['nomor_program'] . '/ ' . $thn ?></td>
                    </tr>
                    <tr>
                        <?php
                        $ber = tgl_indo($value['berangkat']);
                        ?>
                        <td>Tanggal</td>
                        <td>: <?= $ber ?> </td>
                    </tr>
                </table>
            </div>
        </div>
        <div style="padding: 10px 65px 0px 65px;">
            <div>
                <table rules="cols" width="100%" style="border-top: 1px solid black; border-bottom: 1px solid black;">
                    <thead>
                        <tr class="text-center">
                            <th scope="col" style="border-bottom: 1px solid black;">No</th>
                            <th scope="col" style="border-bottom: 1px solid black;">Perincian Biaya</th>
                            <th scope="col" style="border-bottom: 1px solid black;">Jumlah</th>
                            <th scope="col" style="border-bottom: 1px solid black;">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($rincian_biaya as $key => $valuerincian) {
                            $no = 1;
                            if ($valuerincian['uang_harian'] == '0') { ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td rowspan="7" style="padding-left: 10px;">Kota Surabaya, Tgl <?php tgl_indo(date('Y-m-d')); ?></td>
                                </tr>
                            <?php } else { ?>
                                <?php $uang_harian = number_format($valuerincian['uang_harian'], 0, ".", "."); ?>
                                <tr>
                                    <td width="5%" style="padding-top: 15px; padding-bottom: 15px; text-align:center;"><?= $no++ ?></td>
                                    <td style="padding-left: 10px;">Uang Harian</td>
                                    <td width="15%" style="padding-left: 10px;">
                                        <center>Rp. <?= $uang_harian ?>,-</center>
                                    </td>
                                    <td width="45%" rowspan="7" style="padding-left: 10px;">Kota Surabaya, Tgl <?= tgl_indo(date('Y-m-d')); ?></td>
                                </tr>
                            <?php } ?>

                            <?php if ($valuerincian['biaya_penginapan'] == '0') { ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            <?php } else { ?>
                                <?php $biaya_peng = number_format($valuerincian['biaya_penginapan'], 0, ".", "."); ?>
                                <tr>
                                    <td width="5%" style="padding-top: 15px; padding-bottom: 15px; text-align:center;"><?= $no++ ?></td>
                                    <td style="padding-left: 10px;">Biaya Penginapan</td>
                                    <td width="15%" style="padding-left: 10px;">
                                        <center>Rp. <?= $biaya_peng ?>,-</center>
                                    </td>
                                </tr>
                            <?php } ?>

                            <?php if ($valuerincian['uang_representasi'] == '0') { ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            <?php } else { ?>
                                <?php $uang_re = number_format($valuerincian['uang_representasi'], 0, ".", "."); ?>
                                <tr>
                                    <td width="5%" style="padding-top: 15px; padding-bottom: 15px; text-align:center;"><?= $no++ ?></td>
                                    <td style="padding-left: 10px;">Uang Representasi</td>
                                    <td width="15%" style="padding-left: 10px;">
                                        <center>Rp. <?= $uang_re ?>,-</center>
                                    </td>
                                </tr>
                            <?php } ?>

                            <?php if ($valuerincian['sewa_kendaraan'] == '0') { ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            <?php } else { ?>
                                <?php $sewa = number_format($valuerincian['sewa_kendaraan'], 0, ".", "."); ?>
                                <tr>
                                    <td width="5%" style="padding-top: 15px; padding-bottom: 15px; text-align:center;"><?= $no++ ?></td>
                                    <td style="padding-left: 10px;">Sewa Kendaraan</td>
                                    <td width="15%" style="padding-left: 10px;">
                                        <center>Rp. <?= $sewa ?>,-</center>
                                    </td>
                                </tr>
                            <?php } ?>

                            <?php if ($valuerincian['br_harga'] == '0' && $valuerincian['kmb_harga'] == '0') { ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            <?php } elseif ($valuerincian['br_harga'] != '0' && $valuerincian['kmb_harga'] == '0' || $valuerincian['br_harga'] == '0' && $valuerincian['kmb_harga'] != '0') { ?>
                                <?php
                                $br = $valuerincian['br_harga'];
                                $kmb = $valuerincian['kmb_harga'];
                                $intbr = (int)$br;
                                $intkmb = (int)$kmb;
                                $totbrkmb = $intbr + $intkmb;
                                $no_totbrkmb = number_format($totbrkmb, 0, ".", ".");
                                ?>
                                <tr>
                                    <td width="5%" style="padding-top: 15px; padding-bottom: 15px; text-align:center;"><?= $no++ ?></td>
                                    <td style="padding-left: 10px;">Biaya Perjalanan</td>
                                    <td width="15%" style="padding-left: 10px;">
                                        <center>Rp. <?= $no_totbrkmb ?>,-</center>
                                    </td>
                                </tr>
                            <?php } else { ?>
                                <?php
                                $br = $valuerincian['br_harga'];
                                $kmb = $valuerincian['kmb_harga'];
                                $intbr = (int)$br;
                                $intkmb = (int)$kmb;
                                $totbrkmb = $intbr + $intkmb;
                                $no_totbrkmb = number_format($totbrkmb, 0, ".", ".");
                                ?>
                                <tr>
                                    <td width="5%" style="padding-top: 15px; padding-bottom: 15px; text-align:center;"><?= $no++ ?></td>
                                    <td style="padding-left: 10px;">Biaya Perjalanan</td>
                                    <td width="15%" style="padding-left: 10px;">
                                        <center>Rp. <?= $no_totbrkmb ?>,-</center>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                        <tr>
                            <td height="10px" class="pt-3 pb-2 text-center"></td>
                            <td class="pt-3 pb-2 pl-2"></td>
                            <td class="pt-3 pb-2 pl-2"></td>
                        </tr>
                        <tr>
                            <th colspan="2" style="border-top: 1px solid black;">JUMLAH</th>
                            <th class="pl-2" style="border-top: 1px solid black;">Rp. <?= $jml ?>,-</th>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="4" style="padding-left:15px; border-top: 1px solid black; text-align:left;">
                                Terbilang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                # <?= $jml_terbilang ?> Rupiah #
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div style="padding: 0px 65px 0px 65px;">
            <table>
                <tr>
                    <td style="width: 50%;">
                        <span></span>
                        <br>
                        <span>Telah dibayar sejumlah</span>
                        <br>
                        <span>Rp. <?= $jml ?>,-</span>
                        <br>
                        <span>Bendahara Pengeluaran Pembantu</span>
                        <br><br><br><br><br>

                        <?php
                        foreach ($bendahara as $key => $valuebenda) { ?>
                            <div style="font-weight: bold;"><u><?= $valuebenda['nama_ttd'] ?></u></div>
                            <div style="font-weight: bold;">NIP. <?= $valuebenda['nip'] ?></div>
                        <?php } ?>
                    </td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td style="width: 50%;">
                        <span>
                            Surabaya, <?= tgl_indo(date('Y-m-d')); ?>
                        </span>
                        <br>
                        <span>Telah dibayar sejumlah</span>
                        <br>
                        <span>Rp. <?= $jml ?>,-</span>
                        <br>
                        <span>Yang menerima,</span>
                        <br><br><br><br><br>

                        <div style="font-weight: bold; text-align: center;"><u><?= $value['nama'] ?></u></div>
                        <div style="font-weight: bold; text-align: center;">NIP. <?= $value['nip'] ?></div>
                    </td>
                </tr>
            </table>
        </div>

        <hr width="95%" style="height:3px;border:none;color:#333;background-color:#333;">

        <div style="padding-top: 8px; text-align:center;">
            <div style="font-size: 20px;">
                <strong><u>PERHITUNGAN SPPD RAMPUNG</u></strong>
            </div>
        </div>
        <div style="padding: 20px 50px 0px 50px;">
            <div>
                <table>
                    <tr>
                        <td>Ditetapkan sejumlah</td>
                        <td>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;:
                        </td>
                        <td>&nbsp;&nbsp;</td>
                        <td>Rp.&nbsp;&nbsp;</td>
                        <td><?= $jml ?>,-</td>
                    </tr>
                    <tr>
                        <td>Uang muka yang telah dibayar</td>
                        <td>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;:
                        </td>
                        <td>&nbsp;&nbsp;</td>
                        <td>Rp.&nbsp;&nbsp;</td>
                        <td>,-</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="garis"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Sisa kurang / lebih</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;:
                        </td>
                        <td>&nbsp;&nbsp;</td>
                        <td>Rp.&nbsp;&nbsp;</td>
                        <td><?= $jml ?>,-</td>
                    </tr>
                </table>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <table style="font-size: 15px;">
                <tr>
                    <td style="text-align: center;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td style="width: 50%;">
                        <div style="text-align: center;">
                            <span>
                                KUASA PENGGUNA ANGGARAN
                            </span>
                        </div>
                        <br><br><br><br><br>
                        <?php
                        foreach ($kuasa as $key => $valuekuasa) { ?>
                            <div style="font-weight: bold; text-align: center;"><u><?= $valuekuasa['nama_ttd'] ?></u></div>
                            <div style="font-weight: bold; text-align: center;">NIP. <?= $valuekuasa['nip'] ?></div>
                        <?php } ?>
                    </td>
                </tr>
            </table>
        </div>
    <?php } ?>

</body>

</html>