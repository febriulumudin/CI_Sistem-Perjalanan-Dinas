<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Master extends Model
{
    public function notice()
    {
        return $this->db->table('data_spt_pegawai')
            ->join('surat_perintah', 'surat_perintah.no_program=data_spt_pegawai.nomor_program')
            ->join('data_pegawai', 'data_pegawai.nip=data_spt_pegawai.nip_pegawai')
            ->where('status_pengajuan', '2')
            ->where('dilihat_admin', '0')
            ->countAllResults();
    }

    //PEMBERITAHUAN PERINTAH TUGAS
    public function noticespt()
    {
        return $this->db->table('surat_perintah')
            ->join('data_spt_pegawai', 'data_spt_pegawai.nomor_program=surat_perintah.no_program')
            ->where('status_pengajuan', '2')
            ->where('dilihat_admin', '0')
            ->groupBy('nomor_program')
            ->orderBy('id_surat_perintah', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function simpan_lihat_admin($data)
    {
        $this->db->table('data_spt_pegawai')
            ->where('nomor_program', $data['nomor_program'])
            ->update($data);
    }
}
