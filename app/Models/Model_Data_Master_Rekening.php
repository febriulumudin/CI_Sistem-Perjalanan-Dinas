<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Data_Master_Rekening extends Model
{
    public function tampildata()
    {
        return $this->db->table('data_rekening')
            ->get()
            ->getResultArray();
    }

    public function total()
    {
        return $this->db->table('data_rekening')->countAll();
    }


    //EDIT DAN SIMPAN DATA
    public function tampildataedit($id)
    {
        return $this->db->table('data_rekening')
            ->where('id_rekening', $id)
            ->get()
            ->getResultArray();
    }
    public function simpan_edit_data_rekening($data)
    {
        $this->db->table('data_rekening')
            ->where('id_rekening', $data['id_rekening'])
            ->update($data);
    }
}
