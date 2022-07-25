<?php

namespace App\Controllers;

use App\Models\Model_Master;
use App\Models\Model_Data_Master_Surat_Perintah;
use App\Models\Model_Data_Approval;
use App\Models\Model_Data_Master_Anggota;
use App\Models\Model_Data_Pegawai;

class Spt extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->Model_Master = new Model_Master();
        $this->Model_Data_Surat_Perintah = new Model_Data_Master_Surat_Perintah();
        $this->Model_Data_Approval = new Model_Data_Approval();
        $this->Model_Data_Anggota = new Model_Data_Master_Anggota();
        $this->Model_Data_Pegawai = new Model_Data_Pegawai();
    }

    public function index()
    {
        $data = array(
            'title' => 'Surat Perintah Tugas',
            'isi' => 'table/spt'
        );
        return view('layout/v_wrapper', $data);
    }


    //---------------------------------------------------------------------------
    // MENU SURAT PERINTAH
    //---------------------------------------------------------------------------

    public function surat_perintah()
    {
        $data = array(
            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'title' => 'Surat Perintah Tugas',
            'surat_tugas' => $this->Model_Data_Surat_Perintah->tampildata(),
            'total' => $this->Model_Data_Surat_Perintah->total(),

            'isi' => 'spt_data/data_perintah_tugas'
        );
        return view('layout/v_wrapper', $data);
    }

    public function detail_surat_perintah($id, $no)
    {
        $data = array(
            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'surat_tugas' => $this->Model_Data_Surat_Perintah->tampildata(),
            'detail_approve' => $this->Model_Data_Surat_Perintah->tampildetailspt($id),
            'peserta' => $this->Model_Data_Surat_Perintah->datapesertaspt($no),
            'totalpeserta' => $this->Model_Data_Surat_Perintah->totalpesertaspt($no),

            'data_spt' => $this->Model_Data_Surat_Perintah->tampilpegawaispt($no),
            'isi' => 'spt_data/data_perintah_tugas_detail'
        );
        return view('layout/v_wrapper', $data);
    }
    public function detail_surat_perintah_dua($id, $no)
    {
        $data = array(
            'nomor_program' => $no,
            'dilihat_admin' => '1',
        );
        $this->Model_Master->simpan_lihat_admin($data);
        return redirect()->to(base_url('/spt/detail_surat_perintah/' . $id . '/' . $no));
    }


    //---------------------------------------------------------------------------
    // MENU APPROVAL
    //---------------------------------------------------------------------------

    public function approval()
    {
        $data = array(
            'title' => 'Approval',

            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'approval' => $this->Model_Data_Approval->tampildata(),
            'total' => $this->Model_Data_Approval->total(),
            'isi' => 'spt_data/data_approval'
        );
        return view('layout/v_wrapper', $data);
    }
    public function detail_approval($id, $no)
    {
        $data = array(
            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'detail_approve' => $this->Model_Data_Approval->tampildetail($id),
            'peserta' => $this->Model_Data_Approval->datapeserta($no),
            'totalpeserta' => $this->Model_Data_Approval->totalpeserta($no),

            'total_bukti_harian' => $this->Model_Data_Pegawai->total_bukti_harian($id),
            'total_bukti_penginapan' => $this->Model_Data_Pegawai->total_bukti_penginapan($id),
            'total_bukti_representasi' => $this->Model_Data_Pegawai->total_bukti_representasi($id),
            'total_bukti_sewa' => $this->Model_Data_Pegawai->total_bukti_sewakendaraan($id),
            'total_bukti_tiket' => $this->Model_Data_Pegawai->total_bukti_tiket($id),

            'kwitansi' => $this->Model_Data_Approval->kwitansi(),
            'isi' => 'spt_data/data_approval_detail'
        );
        return view('layout/v_wrapper', $data);
    }
    public function approve_data($id, $no)
    {
        $data = array(
            'id_spt_pegawai' => $id,
            'approval' => 'IYA',
        );
        $this->Model_Data_Approval->approve_data($data);
        return redirect()->to(base_url('/spt/detail_approval/' . $data['id_spt_pegawai'] . '/' . $no));
    }


    //---------------------------------------------------------------------------
    //ISI RINCIAN BIAYA
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


            'isi' => '/spt_data/data_approval_pengeluaran'
        );
        return view('layout/v_wrapper', $data);
    }

    //---------------------------------------------------------------------------
    //TAMBAH DATA
    //---------------------------------------------------------------------------


    public function tambah_data_spt()
    {
        $data = array(
            'title' => 'tambah data SPT',

            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'isi' => 'admin/tambah_data/spt/tambah_spt'
        );
        return view('layout/v_wrapper', $data);
    }


    //---------------------------------------------------------------------------
    //SIMPAN TAMBAH DATA
    //---------------------------------------------------------------------------

    public function simpan_data_spt()
    {
        $data = array(
            'no_program' => $this->request->getPost('np'),
            'dalam_rangka' => $this->request->getPost('keg'),
            'tujuan' => $this->request->getPost('lok'),
            //'no_rekening' => $this->request->getPost('no_rek'),
            'instansi' => $this->request->getPost('ins'),
            'berangkat' => $this->request->getPost('ber'),
            'kembali' => $this->request->getPost('kem'),
            'lama_hari' => $this->request->getPost('lamhar')
        );
        $this->Model_Data_Surat_Perintah->simpan_data_spt($data);

        $noprog = $this->request->getPost('np');
        return redirect()->to(base_url('/spt/simpan_data_spt_lanjut/' . $noprog));
    }

    public function simpan_data_spt_lanjut($noprog)
    {
        $data2 = array(
            'title' => 'tambah data SPT',

            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'surat_tugas' => $this->Model_Data_Surat_Perintah->tampildata_id($noprog),
            'anggota' => $this->Model_Data_Anggota->tampildata(),
            'isi' => 'admin/tambah_data/spt/tambah_spt_lanjut'
        );
        return view('layout/v_wrapper', $data2);
    }

    public function simpan_data_spt_lanjutan($noprog)
    {
        $data2 = array(
            'title' => 'tambah data SPT',

            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'surat_tugas' => $this->Model_Data_Surat_Perintah->tampildata_id($noprog),
            'anggota' => $this->Model_Data_Anggota->tampildataikut($noprog),
            'isi' => 'admin/tambah_data/spt/tambah_spt_lanjutan'
        );
        return view('layout/v_wrapper', $data2);
    }

    //---------------------------------------------------------------------------
    //EDIT DATA
    //---------------------------------------------------------------------------

    public function ubah_data($id_spt)
    {
        $data = array(
            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'surat_perintah' => $this->Model_Data_Surat_Perintah->tampildataedit($id_spt),
            'isi' => '/spt_data/data_perintah_tugas_edit'
        );
        return view('layout/v_wrapper', $data);
    }
    public function ubah_data_lanjutan($id_spt)
    {
        $data = array(
            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'surat_perintah' => $this->Model_Data_Surat_Perintah->tampildataedit($id_spt),
            'isi' => '/spt_data/data_perintah_tugas_edit'
        );
        return view('layout/v_wrapper', $data);
    }
    public function ubah_data_lanjutan_dua($id_spt)
    {
        $data = array(
            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'surat_perintah' => $this->Model_Data_Surat_Perintah->tampildataedit($id_spt),
            'isi' => '/admin/edit_data/spt/edit_perintah_tugas'
        );
        return view('layout/v_wrapper', $data);
    }


    //---------------------------------------------------------------------------
    //SIMPAN EDIT DATA
    //---------------------------------------------------------------------------

    public function simpan_ubah_spt($id, $no)
    {
        $data = array(
            'id_surat_perintah' => $id,
            'no_program' => $this->request->getPost('np'),
            'dalam_rangka' => $this->request->getPost('keg'),
            'tujuan' => $this->request->getPost('lok'),
            'instansi' => $this->request->getPost('ins'),
            'berangkat' => $this->request->getPost('ber'),
            'kembali' => $this->request->getPost('kem'),
            'lama_hari' => $this->request->getPost('lamhar'),
        );
        $this->Model_Data_Surat_Perintah->simpan_ubah_spt($data);
        $data2 = array(
            'nomor_program' => $this->request->getPost('np')
        );
        $nobar = $this->request->getPost('np');
        $this->Model_Data_Surat_Perintah->simpan_ubah_spt_pegawai($no, $data2);
        return redirect()->to(base_url('/spt/detail_surat_perintah/' . $id . '/' . $nobar));
    }
    public function simpan_ubah_spt_dua($id, $no)
    {
        $data = array(
            'id_surat_perintah' => $id,
            'no_program' => $this->request->getPost('np'),
            'dalam_rangka' => $this->request->getPost('keg'),
            'tujuan' => $this->request->getPost('lok'),
            'instansi' => $this->request->getPost('ins'),
            'berangkat' => $this->request->getPost('ber'),
            'kembali' => $this->request->getPost('kem'),
            'lama_hari' => $this->request->getPost('lamhar'),
        );
        $this->Model_Data_Surat_Perintah->simpan_ubah_spt($data);
        $data2 = array(
            'nomor_program' => $this->request->getPost('np')
        );
        $nobar = $this->request->getPost('np');
        $this->Model_Data_Surat_Perintah->simpan_ubah_spt_pegawai($no, $data2);
        return redirect()->to(base_url('/spt/simpan_data_spt_lanjutan/' . $nobar));
    }


    public function simpan_data_spt_lanjut_db($no)
    {
        $data = $this->request->getPost('nip');
        for ($i = 0; $i < sizeof($data); $i++) {
            $arr = array(
                'nomor_program' => $no,
                'nip_pegawai' => $data[$i],
                'approval' => 'TIDAK',
                'status_data' => 'BELUM',
            );
            $this->Model_Data_Approval->simpan_data_spt_pegawai($arr);
        }
        return redirect()->to(base_url('/spt/simpan_data_spt_lanjutan/' . $no));
    }

    /* LAMA
    public function simpan_data_spt_lanjutan_db($no)
    {
        $data = $this->request->getPost('id_spt');
        for ($i = 0; $i < sizeof($data); $i++) {
            $arr = array(
                'id_spt' => $data[$i],
            );
            $this->Model_Data_Approval->simpan_data_rincian_biaya($arr);
        }
        return redirect()->to(base_url('/spt/surat_perintah/'));
    } */


    //---------------------------------------------------------------------------
    //HAPUS DATA
    //---------------------------------------------------------------------------

    public function hapus_surat_perintah($id_spt, $noprog)
    {
        $data = $this->request->getPost('id_spt');
        for ($i = 0; $i < sizeof($data); $i++) {
            $data0 = array(
                'id_spt' => $data[$i]
            );
            $this->Model_Data_Surat_Perintah->hapusrincianspt($data0);
        }
        $data1 = array(
            'nomor_program' => $noprog
        );
        $this->Model_Data_Surat_Perintah->hapussptpegawai($data1);
        $data2 = array(
            'id_surat_perintah' => $id_spt
        );
        $this->Model_Data_Surat_Perintah->hapusspt($data2);

        session()->setFlashdata('Pesan', 'Data berhasil dihapus!!!');
        return redirect()->to(base_url('/spt/surat_perintah'));
    }

    public function hapus_peserta($id_spt, $id, $noprog)
    {
        $data = array(
            'id_spt_pegawai' => $id_spt
        );
        $this->Model_Data_Surat_Perintah->hapuspeserta($data);
        session()->setFlashdata('Pesan', 'Data berhasil dihapus!!!');
        return redirect()->to(base_url('/spt/detail_surat_perintah/' . $id . '/' . $noprog));
    }

    public function hapus_peserta_lanjutan($id_spt, $noprog)
    {
        $data = array(
            'id_spt_pegawai' => $id_spt
        );
        $this->Model_Data_Surat_Perintah->hapuspeserta($data);
        session()->setFlashdata('Pesan', 'Data berhasil dihapus!!!');
        return redirect()->to(base_url('/spt/simpan_data_spt_lanjutan/' . $noprog));
    }
}
