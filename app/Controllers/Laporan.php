<?php

namespace App\Controllers;

use App\Models\Model_Master;
use App\Models\Model_Data_Master_Surat_Perintah;
use App\Models\Model_Data_Approval;
use App\Models\Model_Data_Master_Anggota;
use App\Models\Model_Data_Master_Laporan;
use Dompdf\Dompdf;

class Laporan extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->Model_Master = new Model_Master();
        $this->Model_Data_Surat_Perintah = new Model_Data_Master_Surat_Perintah();
        $this->Model_Data_Approval = new Model_Data_Approval();
        $this->Model_Data_Anggota = new Model_Data_Master_Anggota();
        $this->Model_Data_Laporan = new Model_Data_Master_Laporan();
    }

    public function index()
    {
        $data = array(
            'title' => 'Laporan Surat Perintah Tugas',
            'isi' => 'table/laporan'
        );
        return view('layout/v_wrapper', $data);
    }

    public function laporan_pegawai()
    {
        $data = array(
            'title' => 'Laporan Data Pegawai Surat Perintah Tugas',

            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'laporan' => $this->Model_Data_Laporan->tampildata(),
            'total' => $this->Model_Data_Laporan->total(),
            'isi' => 'laporan/laporan_pegawai'
        );
        return view('layout/v_wrapper', $data);
    }

    public function laporan_tugas()
    {
        $data = array(
            'title' => 'Laporan Data Tugas Surat Perintah Tugas',

            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'laporan' => $this->Model_Data_Laporan->tampildatatugas(),
            'total' => $this->Model_Data_Laporan->totaltugas(),
            'isi' => 'laporan/laporan_tugas'
        );
        return view('layout/v_wrapper', $data);
    }

    public function laporan_tugas_detail($no)
    {
        $data = array(
            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'peserta' => $this->Model_Data_Laporan->datapesertaspt($no),
            'totalpeserta' => $this->Model_Data_Laporan->totalpesertaspt($no),

            'isi' => 'laporan/laporan_tugas_detail'
        );
        return view('layout/v_wrapper', $data);
    }

    //laporan
    public function cetak_laporan($id_spt)
    {
        $data = array(
            'peserta' => $this->Model_Data_Laporan->cetaklaporanspt($id_spt),
            'rekening' => $this->Model_Data_Laporan->rekening(),
            'kuasa' => $this->Model_Data_Laporan->kuasa(),
            'bendahara' => $this->Model_Data_Laporan->bendahara(),
            'rincian_biaya' => $this->Model_Data_Laporan->rincianbiaya($id_spt),
        );
        $html = view('/laporan/laporan_tugas_print', $data);

        //Pdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        //Size
        $dompdf->setPaper('A3', 'potrait');
        $dompdf->render();
        $dompdf->stream('Laporan Petugas.pdf', array("Attachment" => false));
    }

    public function cetak_laporan_cek($id_spt) // UNTUK CEK BENTUK LAPORAN
    {
        $data = array(
            'peserta' => $this->Model_Data_Laporan->cetaklaporanspt($id_spt),
            'rekening' => $this->Model_Data_Laporan->rekening(),
            'kuasa' => $this->Model_Data_Laporan->kuasa(),
            'bendahara' => $this->Model_Data_Laporan->bendahara(),
            'rincian_biaya' => $this->Model_Data_Laporan->rincianbiaya($id_spt),
        );
        return view('laporan/laporan_tugas_print', $data);
    }
}
