<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Data_Master_Laporan extends Model
{
    public function tampildata()
    {
        return $this->db->table('data_spt_pegawai')
            ->join('surat_perintah', 'surat_perintah.no_program=data_spt_pegawai.nomor_program')
            ->join('data_pegawai', 'data_pegawai.nip=data_spt_pegawai.nip_pegawai')
            ->join('data_golongan', 'data_golongan.id_golongan=data_pegawai.gol_pegawai')
            ->join('data_rincian_biaya', 'data_rincian_biaya.id_spt=data_spt_pegawai.id_spt_pegawai')

            //->join('data_berangkat', 'data_berangkat.id_transport=data_transportasi.id_data_transportasi')

            ->orderBy('id_surat_perintah', 'ASC')
            ->get()
            ->getResultArray();
    }
    public function tampildatatugas()
    {
        return $this->db->table('surat_perintah')
            ->orderBy('id_surat_perintah', 'ASC')
            ->get()
            ->getResultArray();
    }
    public function datapesertaspt($no)
    {
        return $this->db->table('data_spt_pegawai')
            ->join('data_pegawai', 'data_pegawai.nip=data_spt_pegawai.nip_pegawai')
            ->where('nomor_program', $no)
            ->get()
            ->getResultArray();
    }

    //TOTAL
    public function total()
    {
        return $this->db->table('data_spt_pegawai')->countAll();
    }
    public function totaltugas()
    {
        return $this->db->table('surat_perintah')->countAll();
    }
    public function totalpesertaspt($no)
    {
        return $this->db->table('data_spt_pegawai')
            ->where('nomor_program', $no)
            ->countAllResults();
    }

    //Cetak
    public function cetaklaporanspt($id_spt)
    {
        return $this->db->table('data_spt_pegawai')
            ->join('surat_perintah', 'surat_perintah.no_program=data_spt_pegawai.nomor_program')
            ->join('data_pegawai', 'data_pegawai.nip=data_spt_pegawai.nip_pegawai')
            ->where('id_spt_pegawai', $id_spt)
            ->get()
            ->getResultArray();
    }
    public function rincianbiaya($id_spt)
    {
        return $this->db->table('data_rincian_biaya')
            ->join('data_spt_pegawai', 'data_spt_pegawai.id_spt_pegawai=data_rincian_biaya.id_spt')
            ->where('id_spt', $id_spt)
            ->get()
            ->getResultArray();
    }
    public function rekening()
    {
        return $this->db->table('data_rekening')
            ->where('id_rekening', '1')
            ->get()
            ->getResultArray();
    }

    public function kuasa()
    {
        return $this->db->table('data_setting_ttd')
            ->where('id_setting_ttd', '1')
            ->get()
            ->getResultArray();
    }
    public function bendahara()
    {
        return $this->db->table('data_setting_ttd')
            ->where('id_setting_ttd', '2')
            ->get()
            ->getResultArray();
    }
}
