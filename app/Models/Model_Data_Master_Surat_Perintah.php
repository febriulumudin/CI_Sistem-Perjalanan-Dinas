<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Data_Master_Surat_Perintah extends Model
{
    //DATA SURAT PERINTAH TUGAS
    public function tampildata()
    {
        return $this->db->table('surat_perintah')
            ->orderBy('id_surat_perintah', 'DESC')
            ->get()
            ->getResultArray();
    }
    public function tampildatarincian()
    {
        return $this->db->table('data_rincian_biaya')
            ->join('data_spt_pegawai', 'data_spt_pegawai.id_spt_pegawai=data_rincian_biaya.id_spt')
            ->join('surat_perintah', 'surat_perintah.no_program=data_spt_pegawai.nomor_program')
            ->get()
            ->getResultArray();
    }
    public function total()
    {
        return $this->db->table('surat_perintah')->countAll();
    }

    //DATA SURAT PERINTAH TUGAS DETAIL
    public function tampildetailspt($id)
    {
        return $this->db->table('surat_perintah')
            ->where('id_surat_perintah', $id)
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
    public function totalpesertaspt($no)
    {
        return $this->db->table('data_spt_pegawai')
            ->where('nomor_program', $no)
            ->countAllResults();
    }

    //SIMPAN DATA TAMBAH
    public function simpan_data_spt($data)
    {
        $this->db->table('surat_perintah')->insert($data);
    }

    //TAMPIL BERDASAR ID
    public function tampildata_id($no)
    {
        return $this->db->table('surat_perintah')
            ->where('no_program', $no)
            ->get()
            ->getResultArray();
    }

    //HAPUS DATA
    public function hapusspt($data)
    {
        $this->db->table('surat_perintah')
            ->where('id_surat_perintah', $data['id_surat_perintah'])
            ->delete($data);
    }
    public function hapussptpegawai($data)
    {
        $this->db->table('data_spt_pegawai')
            ->where('nomor_program', $data['nomor_program'])
            ->delete($data);
    }



    public function tampilpegawaispt($data)
    {
        return $this->db->table('data_spt_pegawai')
            ->where('nomor_program', $data)
            ->get()
            ->getResultArray();
    }
    public function hapusrincianspt($data)
    {
        $this->db->table('data_rincian_biaya')
            ->where('id_spt', $data['id_spt'])
            ->delete($data);
    }




    public function hapuspeserta($data)
    {
        $this->db->table('data_spt_pegawai')
            ->where('id_spt_pegawai', $data['id_spt_pegawai'])
            ->delete($data);
    }


    //EDIT DAN SIMPAN DATA
    public function tampildataedit($id)
    {
        return $this->db->table('surat_perintah')
            ->where('id_surat_perintah', $id)
            ->get()
            ->getResultArray();
    }
    public function simpan_ubah_spt($data)
    {
        $this->db->table('surat_perintah')
            ->where('id_surat_perintah', $data['id_surat_perintah'])
            ->update($data);
    }
    public function simpan_ubah_spt_pegawai($no, $data2)
    {
        $this->db->table('data_spt_pegawai')
            ->where('nomor_program', $no)
            ->update($data2);
    }

    //BUKTI
    public function bukti_tiket($id)
    {
        return $this->db->table('data_bukti_pembayaran')
            ->where('id_spt', $id)
            ->get()
            ->getResultArray();
    }
    //HAPUS DATA
    public function hapusdata_pembayaran($data)
    {
        $this->db->table('data_bukti_pembayaran')
            ->where('id_bukti_pembayaran', $data['id_bukti_pembayaran'])
            ->delete($data);
    }
}
