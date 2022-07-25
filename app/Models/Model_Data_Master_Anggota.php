<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Data_Master_Anggota extends Model
{
    public function tampilakun($id)
    {
        return $this->db->table('data_pegawai')
            ->where('id_pegawai', $id)
            ->get()
            ->getResultArray();
    }

    public function tampildata()
    {
        return $this->db->table('data_pegawai')
            ->join('data_jabatan', 'data_jabatan.kode_jabatan=data_pegawai.kode_jabatan')
            ->join('data_golongan', 'data_golongan.id_golongan=data_pegawai.gol_pegawai')
            ->orderBy('id_pegawai', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function tampildataikut($noprog)
    {
        return $this->db->table('data_spt_pegawai')
            ->join('data_pegawai', 'data_pegawai.nip=data_spt_pegawai.nip_pegawai')
            ->join('data_jabatan', 'data_jabatan.kode_jabatan=data_pegawai.kode_jabatan')
            ->join('data_golongan', 'data_golongan.id_golongan=data_pegawai.gol_pegawai')
            ->where('nomor_program', $noprog)
            ->get()
            ->getResultArray();
    }

    public function tampildatagolongan()
    {
        return $this->db->table('data_golongan')
            ->orderBy('id_golongan', 'ASC')
            ->get()
            ->getResultArray();
    }


    //TOTAL
    public function total()
    {
        return $this->db->table('data_pegawai')->countAll();
    }


    //SIMPAN DATA TAMBAH
    public function simpan_data_anggota($data)
    {
        $this->db->table('data_pegawai')->insert($data);
    }


    //EDIT DAN SIMPAN DATA
    public function tampildataedit($id)
    {
        return $this->db->table('data_pegawai')
            ->where('id_pegawai', $id)
            ->get()
            ->getResultArray();
    }
    public function simpan_edit_data_anggota($data)
    {
        $this->db->table('data_pegawai')
            ->where('id_pegawai', $data['id_pegawai'])
            ->update($data);
    }


    //HAPUS DATA
    public function hapusdata($data)
    {
        $this->db->table('data_pegawai')
            ->where('id_pegawai', $data['id_pegawai'])
            ->delete($data);
    }
}
