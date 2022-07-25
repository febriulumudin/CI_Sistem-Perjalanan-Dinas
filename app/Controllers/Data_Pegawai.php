<?php

namespace App\Controllers;

use App\Models\Model_Data_Pegawai;

class Data_Pegawai extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->Model_Data_Pegawai = new Model_Data_Pegawai();
    }

    public function index()
    {
    }

    //PERINTAH TUGAS
    public function perintah_tugas($nip)
    {
        $data = array(
            'title' => 'Surat Perintah Tugas',
            'surat_tugas' => $this->Model_Data_Pegawai->tampildata($nip),
            //'rincian_biaya' => $this->Model_Data_Pegawai->tampildatarincian(),

            'notice' => $this->Model_Data_Pegawai->notice($nip),
            'spt' => $this->Model_Data_Pegawai->noticespt($nip),

            'total' => $this->Model_Data_Pegawai->total($nip),
            'isi' => 'pegawai/data_pegawai_perintah_tugas'
        );
        return view('layout_pegawai/v_wrapper', $data);
    }
    //DETAIL PERINTAH TUGAS
    public function detail_surat_perintah($id, $no, $nip, $idspt)
    {
        $data2 = array(
            'id_spt_pegawai' => $idspt,
            'status_dilihat' => '1',
        );
        $this->Model_Data_Pegawai->statusdilihat($data2);

        $data = array(
            'detail_approve' => $this->Model_Data_Pegawai->tampildetailspt($id),
            'status' => $this->Model_Data_Pegawai->status_persetujuan($no, $nip),

            'notice' => $this->Model_Data_Pegawai->notice($nip),
            'spt' => $this->Model_Data_Pegawai->noticespt($nip),

            'peserta' => $this->Model_Data_Pegawai->datapesertaspt($no),
            'totalpeserta' => $this->Model_Data_Pegawai->totalpesertabelum($no),

            'isi' => 'pegawai/data_pegawai_perintah_tugas_detail'
        );
        return view('layout_pegawai/v_wrapper', $data);
    }

    //SETUJU PERMINTAAN
    public function setuju_permintaan($id, $no, $nip, $idspt)
    {
        $data2 = array(
            'id_spt_pegawai' => $idspt,
            'status_pengajuan' => '1',
        );
        $this->Model_Data_Pegawai->setujutolak($data2);
        $data3 = array(
            'id_spt' => $idspt,
        );
        $this->Model_Data_Pegawai->simpan_data_rincian_biaya($data3);

        $data = array(
            'detail_approve' => $this->Model_Data_Pegawai->tampildetailspt($id),
            'status' => $this->Model_Data_Pegawai->status_persetujuan($no, $nip),

            'notice' => $this->Model_Data_Pegawai->notice($nip),
            'spt' => $this->Model_Data_Pegawai->noticespt($nip),

            'peserta' => $this->Model_Data_Pegawai->datapesertaspt($no),
            'totalpeserta' => $this->Model_Data_Pegawai->totalpesertaspt($no),

            'isi' => 'pegawai/data_pegawai_perintah_tugas_detail'
        );
        return redirect()->to(base_url('/data_pegawai/detail_surat_perintah/' . $id . "/" . $no . "/" . $nip . "/" . $idspt));
    }
    //TOLAK PERMINTAAN
    public function tolak_permintaan($id, $no, $nip, $idspt)
    {
        $data = array(
            'id_spt_pegawai' => $idspt,
            'komentar' => $this->request->getPost('komen')
        );
        $this->Model_Data_Pegawai->komentar($data);
        $data2 = array(
            'id_spt_pegawai' => $idspt,
            'status_pengajuan' => '2',
        );
        $this->Model_Data_Pegawai->setujutolak($data2);
        $data3 = array(
            'id_spt' => $idspt,
        );
        $this->Model_Data_Pegawai->hapus_data_rincian_biaya($data3);
        return redirect()->to(base_url('/data_pegawai/detail_surat_perintah/' . $id . "/" . $no . "/" . $nip . "/" . $idspt));
    }


    //---------------========**********========---------------//

    //RINCIAN BIAYA
    public function rincian_biaya($nip)
    {
        $data = array(
            'title' => 'Approval',
            'approval' => $this->Model_Data_Pegawai->tampildatarincian($nip),

            'notice' => $this->Model_Data_Pegawai->notice($nip),
            'spt' => $this->Model_Data_Pegawai->noticespt($nip),

            'total' => $this->Model_Data_Pegawai->totalrincianbiaya($nip),
            'isi' => '/pegawai/data_approval_pegawai'
        );
        return view('layout_pegawai/v_wrapper', $data);
    }

    //LAPORAN PEGAWAI
    public function laporan_pegawai($nip)
    {
        $data = array(
            'title' => 'Laporan Petugas',
            'peserta' => $this->Model_Data_Pegawai->tampildata($nip),

            'notice' => $this->Model_Data_Pegawai->notice($nip),
            'spt' => $this->Model_Data_Pegawai->noticespt($nip),

            'total' => $this->Model_Data_Pegawai->total($nip),
            'isi' => '/pegawai/data_laporan_pegawai'
        );
        return view('layout_pegawai/v_wrapper', $data);
    }


    //---------------------------------------------------------------------------
    //EDIT DATA
    //---------------------------------------------------------------------------

    public function isi_rincianbiaya($id, $nip)
    {
        $data = array(
            'idspt' => $id,
            'nip' => $nip,

            'rincian' => $this->Model_Data_Pegawai->tampildatarincianbiaya($id),
            'notice' => $this->Model_Data_Pegawai->notice($nip),
            'spt' => $this->Model_Data_Pegawai->noticespt($nip),


            'bukti_harian' => $this->Model_Data_Pegawai->bukti_harian($id),
            'total_bukti_harian' => $this->Model_Data_Pegawai->total_bukti_harian($id),

            'bukti_penginapan' => $this->Model_Data_Pegawai->bukti_penginapan($id),
            'total_bukti_penginapan' => $this->Model_Data_Pegawai->total_bukti_penginapan($id),

            'bukti_representasi' => $this->Model_Data_Pegawai->bukti_representasi($id),
            'total_bukti_representasi' => $this->Model_Data_Pegawai->total_bukti_representasi($id),

            'bukti_sewa' => $this->Model_Data_Pegawai->bukti_sewakendaraan($id),
            'total_bukti_sewa' => $this->Model_Data_Pegawai->total_bukti_sewakendaraan($id),

            'bukti_tiket' => $this->Model_Data_Pegawai->bukti_tiket($id),
            'total_bukti_tiket' => $this->Model_Data_Pegawai->total_bukti_tiket($id),


            'isi' => '/pegawai/edit_data_approval_pegawai'
        );
        return view('layout_pegawai/v_wrapper', $data);
    }

    //---------------------------------------------------------------------------
    //SIMPAN EDIT DATA
    //---------------------------------------------------------------------------

    public function simpan_isi_rincian($id, $nip, $id_spt)
    {
        $data = array(
            'id_rincian_biaya' => $id,

            'uang_harian' => $this->request->getPost('uang_harian'),
            'biaya_penginapan' => $this->request->getPost('biaya_penginapan'),
            'nama_tempat' => $this->request->getPost('nama_tmp'),
            'uang_representasi' => $this->request->getPost('uang_rep'),
            'sewa_kendaraan' => $this->request->getPost('uang_sewa'),

            'br_pesawat/ka' => $this->request->getPost('psw_ka'),
            'br_no_tiket' => $this->request->getPost('no_tiket'),
            'br_no_terbang' => $this->request->getPost('no_terbang'),
            'br_jam' => $this->request->getPost('waktu'),
            'br_no_tempat_duduk' => $this->request->getPost('no_tempat_duduk'),
            'br_tanggal' => $this->request->getPost('tgl'),
            'br_asal' => $this->request->getPost('asal'),
            'br_tujuan' => $this->request->getPost('tujuan'),
            'br_harga' => $this->request->getPost('harga_tiket'),

            'kmb_pesawat/ka' => $this->request->getPost('kmb_psw_ka'),
            'kmb_no_tiket' => $this->request->getPost('kmb_no_tiket'),
            'kmb_no_terbang' => $this->request->getPost('kmb_no_terbang'),
            'kmb_jam' => $this->request->getPost('kmb_waktu'),
            'kmb_no_tempat_duduk' => $this->request->getPost('kmb_no_tempat_duduk'),
            'kmb_tanggal' => $this->request->getPost('kmb_tgl'),
            'kmb_asal' => $this->request->getPost('kmb_asal'),
            'kmb_tujuan' => $this->request->getPost('kmb_tujuan'),
            'kmb_harga' => $this->request->getPost('kmb_harga_tiket'),
        );
        $this->Model_Data_Pegawai->simpanubah_rincianbiaya($data);

        $datas = $this->request->getFiles();
        if ($datas) {
            foreach ($datas['image_harian'] as $key => $img) {
                if ($img == "") {
                } else {
                    $fileName = time() . $img->getClientName();
                    $img->move('buktipembayaran', $fileName);
                    $data2 = [
                        'id_spt' => $id_spt,
                        'jenis_bukti' => 'Bukti Harian',
                        'bukti_pembayaran' => $fileName
                    ];
                    $this->Model_Data_Pegawai->buktipembayaran($data2);
                };
            };
        };

        if ($datas) {
            foreach ($datas['image_peng'] as $key => $img) {
                if ($img == "") {
                } else {
                    $fileName = time() . $img->getClientName();
                    $img->move('buktipembayaran', $fileName);
                    $data2 = [
                        'id_spt' => $id_spt,
                        'jenis_bukti' => 'Bukti Penginapan',
                        'bukti_pembayaran' => $fileName
                    ];
                    $this->Model_Data_Pegawai->buktipembayaran($data2);
                };
            };
        };

        if ($datas) {
            foreach ($datas['image_rep'] as $key => $img) {
                if ($img == "") {
                } else {
                    $fileName = time() . $img->getClientName();
                    $img->move('buktipembayaran', $fileName);
                    $data2 = [
                        'id_spt' => $id_spt,
                        'jenis_bukti' => 'Bukti Representasi',
                        'bukti_pembayaran' => $fileName
                    ];
                    $this->Model_Data_Pegawai->buktipembayaran($data2);
                }
            };
        };

        if ($datas) {
            foreach ($datas['image_sewa'] as $key => $img) {
                if ($img == "") {
                } else {
                    $fileName = time() . $img->getClientName();
                    $img->move('buktipembayaran', $fileName);
                    $data2 = [
                        'id_spt' => $id_spt,
                        'jenis_bukti' => 'Bukti Sewa Kendaraan',
                        'bukti_pembayaran' => $fileName
                    ];
                    $this->Model_Data_Pegawai->buktipembayaran($data2);
                }
            };
        };

        if ($datas) {
            foreach ($datas['image_tiket'] as $key => $img) {
                if ($img == "") {
                } else {
                    $fileName = time() . $img->getClientName();
                    $img->move('buktipembayaran', $fileName);
                    $data2 = [
                        'id_spt' => $id_spt,
                        'jenis_bukti' => 'Bukti Tiket',
                        'bukti_pembayaran' => $fileName
                    ];
                    $this->Model_Data_Pegawai->buktipembayaran($data2);
                }
            };
        };

        $u_h = (int)$this->request->getPost('uang_harian');
        $b_p = (int)$this->request->getPost('biaya_penginapan');
        $u_r = (int)$this->request->getPost('uang_rep');
        $u_s = (int)$this->request->getPost('uang_sewa');
        $h_tb = (int)$this->request->getPost('harga_tiket');
        $h_tk = (int)$this->request->getPost('kmb_harga_tiket');
        $total = $u_h + $b_p + $u_r + $u_s + $h_tb + $h_tk;
        $dataint = array(
            'id_spt_pegawai' => $id_spt,
            'jml_seluruh' => $total
        );
        $this->Model_Data_Pegawai->jumlah_keseluruhan($dataint);
        $data_status = array(
            'id_spt_pegawai' => $id_spt,
            'status_data' => 'SUDAH',
        );
        $this->Model_Data_Pegawai->status_data($data_status);

        return redirect()->to(base_url('/data_pegawai/rincian_biaya/' . $nip));
    }

    //---------------------------------------------------------------------------
    //HAPUS DATA BUKTI
    //---------------------------------------------------------------------------

    public function hapus_bukti_pembayaran($id, $bukti, $id_spt, $nip)
    {
        $target_file = 'buktipembayaran/' . $bukti;
        unlink($target_file);
        $data = array(
            'id_bukti_pembayaran' => $id
        );
        $this->Model_Data_Pegawai->hapusdata_pembayaran($data);
        return redirect()->to(base_url('/data_pegawai/isi_rincianbiaya/' . $id_spt . '/' . $nip));
    }
}
