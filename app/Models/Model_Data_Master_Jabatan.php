<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Data_Master_Jabatan extends Model
{
    public function tampildata()
    {
        return $this->db->table('data_jabatan')
            ->orderBy('id_jabatan', 'ASC')
            ->get()
            ->getResultArray();
    }

    //TOTAL
    public function total()
    {
        return $this->db->table('data_jabatan')->countAll();
    }


    //SIMPAN DATA TAMBAH
    public function simpan_data_jabatan($data)
    {
        $this->db->table('data_jabatan')->insert($data);
    }


    //EDIT DAN SIMPAN DATA
    public function tampildataedit($id)
    {
        return $this->db->table('data_jabatan')
            ->where('id_jabatan', $id)
            ->get()
            ->getResultArray();
    }
    public function simpan_edit_data_jabatan($data)
    {
        $this->db->table('data_jabatan')
            ->where('id_jabatan', $data['id_jabatan'])
            ->update($data);
    }


    //HAPUS DATA
    public function hapusdata($data)
    {
        $this->db->table('data_jabatan')
            ->where('id_jabatan', $data['id_jabatan'])
            ->delete($data);
    }
}
