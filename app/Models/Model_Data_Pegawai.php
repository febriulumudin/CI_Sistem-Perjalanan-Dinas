<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Data_Pegawai extends Model
{
    //PERINTAH TUGAS
    public function tampildata($nip)
    {
        return $this->db->table('data_spt_pegawai')
            ->join('surat_perintah', 'surat_perintah.no_program=data_spt_pegawai.nomor_program')
            ->orderBy('id_surat_perintah', 'DESC')
            ->where('nip_pegawai', $nip)
            ->get()
            ->getResultArray();
    }
    public function total($nip)
    {
        return $this->db->table('data_spt_pegawai')
            ->where('nip_pegawai', $nip)
            ->countAllResults();
    }

    //RINCIAN BIAYA
    public function tampildatarincian($nip)
    {
        return $this->db->table('data_rincian_biaya')
            ->join('data_spt_pegawai', 'data_spt_pegawai.id_spt_pegawai=data_rincian_biaya.id_spt')
            ->join('surat_perintah', 'surat_perintah.no_program=data_spt_pegawai.nomor_program')
            ->orderBy('id_surat_perintah', 'DESC')
            ->where('nip_pegawai', $nip)
            ->get()
            ->getResultArray();
    }
    public function totalrincianbiaya($nip)
    {
        return $this->db->table('data_rincian_biaya')
            ->join('data_spt_pegawai', 'data_spt_pegawai.id_spt_pegawai=data_rincian_biaya.id_spt')
            ->where('nip_pegawai', $nip)
            ->countAllResults();
    }

    //SIMPAN DATA TAMBAH
    public function simpan_rincianbiaya($data)
    {
        $this->db->table('data_rincian_biaya')->insert($data);
    }

    public function simpanubah_rincianbiaya($data)
    {
        $this->db->table('data_rincian_biaya')
            ->where('id_rincian_biaya', $data['id_rincian_biaya'])
            ->update($data);
    }

    public function tampildatarincianbiaya($id)
    {
        return $this->db->table('data_rincian_biaya')
            ->join('data_spt_pegawai', 'data_spt_pegawai.id_spt_pegawai=data_rincian_biaya.id_spt')
            ->where('id_spt', $id)
            ->get()
            ->getResultArray();
    }

    public function datapeserta($no)
    {
        return $this->db->table('data_spt_pegawai')
            ->join('data_pegawai', 'data_pegawai.nip=data_spt_pegawai.nip_pegawai')
            ->where('nomor_program', $no)
            ->get()
            ->getResultArray();
    }

    public function totalpeserta($no)
    {
        return $this->db->table('data_spt_pegawai')
            ->where('nomor_program', $no)
            ->countAllResults();
    }

    public function kwitansi()
    {
        return $this->db->table('data_spt_pegawai')
            ->join('surat_perintah', 'surat_perintah.no_program=data_spt_pegawai.nomor_program')
            ->join('data_kwitansi', 'data_kwitansi.id_spt_pegawai=data_spt_pegawai.id_spt_pegawai')
            ->join('data_rincian_biaya', 'data_rincian_biaya.id_rincian_biaya=data_kwitansi.id_rincianbiaya')
            ->join('data_transportasi', 'data_transportasi.id_data_transportasi=data_rincian_biaya.id_datatransportasi')
            ->join('data_berangkat', 'data_berangkat.id_berangkat=data_transportasi.id_berangkat')
            ->join('data_kembali', 'data_kembali.id_kembali=data_transportasi.id_kembali')
            ->get()
            ->getResultArray();
    }

    public function approve_data($data)
    {
        $this->db->table('data_spt_pegawai')
            ->where('id_spt_pegawai', $data['id_spt_pegawai'])
            ->update($data);
    }




    public function tampildetailspt($id)
    {
        return $this->db->table('data_spt_pegawai')
            ->join('surat_perintah', 'surat_perintah.no_program=data_spt_pegawai.nomor_program')
            ->where('id_surat_perintah', $id)
            ->get()
            ->getResultArray();
    }
    public function status_persetujuan($no, $nip)
    {
        return $this->db->table('data_spt_pegawai')
            ->where('nomor_program', $no)
            ->where('nip_pegawai', $nip)
            ->get()
            ->getResultArray();
    }
    public function datapesertaspt($no)
    {
        return $this->db->table('data_spt_pegawai')
            ->join('data_pegawai', 'data_pegawai.nip=data_spt_pegawai.nip_pegawai')
            ->where('status_pengajuan', '1')
            ->where('nomor_program', $no)
            ->get()
            ->getResultArray();
    }

    public function statusdilihat($data2)
    {
        $this->db->table('data_spt_pegawai')
            ->where('id_spt_pegawai', $data2['id_spt_pegawai'])
            ->update($data2);
    }
    public function setujutolak($data2)
    {
        $this->db->table('data_spt_pegawai')
            ->where('id_spt_pegawai', $data2['id_spt_pegawai'])
            ->update($data2);
    }
    public function komentar($data2)
    {
        $this->db->table('data_spt_pegawai')
            ->where('id_spt_pegawai', $data2['id_spt_pegawai'])
            ->update($data2);
    }
    public function totalpesertaspt($no)
    {
        return $this->db->table('data_spt_pegawai')
            ->where('nomor_program', $no)
            ->countAllResults();
    }
    //TOTAL BELUM KONFIRMASI
    public function totalpesertabelum($no)
    {
        return $this->db->table('data_spt_pegawai')
            ->where('nomor_program', $no)
            ->where('status_pengajuan', '1')
            ->countAllResults();
    }

    //PEMBERITAHUAN PERINTAH TUGAS YANG BELUM DILIHAT
    public function notice($nip)
    {
        return $this->db->table('data_spt_pegawai')
            ->where('nip_pegawai', $nip)
            ->where('status_dilihat', '0')
            ->countAllResults();
    }
    //PEMBERITAHUAN SEMUA PERINTAH TUGAS
    public function noticespt($nip)
    {
        return $this->db->table('data_spt_pegawai')
            ->join('surat_perintah', 'surat_perintah.no_program=data_spt_pegawai.nomor_program')
            ->where('nip_pegawai', $nip)
            ->where('status_dilihat', '0')
            ->get()
            ->getResultArray();
    }

    public function simpan_data_rincian_biaya($data)
    {
        $this->db->table('data_rincian_biaya')->insert($data);
    }
    public function hapus_data_rincian_biaya($data)
    {
        $this->db->table('data_rincian_biaya')
            ->where('id_spt', $data)
            ->delete($data);
    }

    public function jumlah_keseluruhan($data)
    {
        $this->db->table('data_spt_pegawai')
            ->where('id_spt_pegawai', $data['id_spt_pegawai'])
            ->update($data);
    }
    public function status_data($data2)
    {
        $this->db->table('data_spt_pegawai')
            ->where('id_spt_pegawai', $data2['id_spt_pegawai'])
            ->update($data2);
    }

















    //Bukati Harian
    public function bukti_harian($id)
    {
        return $this->db->table('data_bukti_pembayaran')
            ->where('id_spt', $id)
            ->where('jenis_bukti', 'Bukti Harian')
            ->get()
            ->getResultArray();
    }
    public function total_bukti_harian($id)
    {
        return $this->db->table('data_bukti_pembayaran')
            ->where('id_spt', $id)
            ->where('jenis_bukti', 'Bukti Harian')
            ->countAllResults();
    }

    //Bukti Penginapan
    public function bukti_penginapan($id)
    {
        return $this->db->table('data_bukti_pembayaran')
            ->where('id_spt', $id)
            ->where('jenis_bukti', 'Bukti Penginapan')
            ->get()
            ->getResultArray();
    }
    public function total_bukti_penginapan($id)
    {
        return $this->db->table('data_bukti_pembayaran')
            ->where('id_spt', $id)
            ->where('jenis_bukti', 'Bukti Penginapan')
            ->countAllResults();
    }

    //Bukti Representasi
    public function bukti_representasi($id)
    {
        return $this->db->table('data_bukti_pembayaran')
            ->where('id_spt', $id)
            ->where('jenis_bukti', 'Bukti Representasi')
            ->get()
            ->getResultArray();
    }
    public function total_bukti_representasi($id)
    {
        return $this->db->table('data_bukti_pembayaran')
            ->where('id_spt', $id)
            ->where('jenis_bukti', 'Bukti Representasi')
            ->countAllResults();
    }

    //Bukti Sewa Kendaraan
    public function bukti_sewakendaraan($id)
    {
        return $this->db->table('data_bukti_pembayaran')
            ->where('id_spt', $id)
            ->where('jenis_bukti', 'Bukti Sewa Kendaraan')
            ->get()
            ->getResultArray();
    }
    public function total_bukti_sewakendaraan($id)
    {
        return $this->db->table('data_bukti_pembayaran')
            ->where('id_spt', $id)
            ->where('jenis_bukti', 'Bukti Sewa Kendaraan')
            ->countAllResults();
    }

    //Bukti Sewa Tiket
    public function bukti_tiket($id)
    {
        return $this->db->table('data_bukti_pembayaran')
            ->where('id_spt', $id)
            ->where('jenis_bukti', 'Bukti tiket')
            ->get()
            ->getResultArray();
    }
    public function total_bukti_tiket($id)
    {
        return $this->db->table('data_bukti_pembayaran')
            ->where('id_spt', $id)
            ->where('jenis_bukti', 'Bukti Tiket')
            ->countAllResults();
    }


    //TAMBAH DATA HARIAN
    public function buktipembayaran($data)
    {
        $this->db->table('data_bukti_pembayaran')->insert($data);
    }


    //HAPUS DATA
    public function hapusdata_pembayaran($data)
    {
        $this->db->table('data_bukti_pembayaran')
            ->where('id_bukti_pembayaran', $data['id_bukti_pembayaran'])
            ->delete($data);
    }
}
