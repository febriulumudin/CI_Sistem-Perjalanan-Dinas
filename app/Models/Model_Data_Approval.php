<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Data_Approval extends Model
{

    public function tampildata()
    {
        return $this->db->table('data_spt_pegawai')
            ->join('surat_perintah', 'surat_perintah.no_program=data_spt_pegawai.nomor_program')
            ->orderBy('id_surat_perintah', 'DESC')
            ->groupBy('nomor_program')
            ->get()
            ->getResultArray();
    }

    public function total()
    {
        return $this->db->table('data_spt_pegawai')
            ->groupBy('nomor_program')
            ->countAllResults();
    }

    public function tampildetail($id)
    {
        return $this->db->table('data_spt_pegawai')
            ->join('surat_perintah', 'surat_perintah.no_program=data_spt_pegawai.nomor_program')
            ->where('id_spt_pegawai', $id)
            ->get()
            ->getResultArray();
    }

    public function datapeserta($no)
    {
        return $this->db->table('data_spt_pegawai')
            ->join('data_pegawai', 'data_pegawai.nip=data_spt_pegawai.nip_pegawai')
            ->where('nomor_program', $no)
            ->where('status_pengajuan', '1')
            ->get()
            ->getResultArray();
    }

    public function totalpeserta($no)
    {
        return $this->db->table('data_spt_pegawai')
            ->where('nomor_program', $no)
            ->where('status_pengajuan', '1')
            ->countAllResults();
    }

    public function kwitansi()
    {
        return $this->db->table('data_spt_pegawai')
            ->join('surat_perintah', 'surat_perintah.no_program=data_spt_pegawai.nomor_program')
            ->join('data_rincian_biaya', 'data_rincian_biaya.id_spt=data_spt_pegawai.id_spt_pegawai')
            ->get()
            ->getResultArray();
    }

    public function kwitansi2()
    {
        return $this->db->table('data_spt_pegawai')
            ->join('surat_perintah', 'surat_perintah.no_program=data_spt_pegawai.nomor_program')
            ->join('data_rincian_biaya', 'data_rincian_biaya.id_spt=data_spt_pegawai.id_spt_pegawai')
            ->join('data_transportasi', 'data_transportasi.id_rincianbiaya=data_rincian_biaya.id_rincian_biaya')
            ->join('data_berangkat', 'data_berangkat.id_transport=data_transportasi.id_data_transportasi')
            ->join('data_kembali', 'data_kembali.id_transport=data_transportasi.id_data_transportasi')
            ->get()
            ->getResultArray();
    }


    public function approve_data($data)
    {
        $this->db->table('data_spt_pegawai')
            ->where('id_spt_pegawai', $data['id_spt_pegawai'])
            ->update($data);
    }

    public function simpan_data_spt_pegawai($data)
    {
        $this->db->table('data_spt_pegawai')->insert($data);
    }

    public function simpan_data_rincian_biaya($data)
    {
        $this->db->table('data_rincian_biaya')->insert($data);
    }
}
