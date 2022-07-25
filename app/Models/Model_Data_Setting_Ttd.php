<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Data_Setting_Ttd extends Model
{
    public function tampildata()
    {
        return $this->db->table('data_setting_ttd')
            ->orderBy('id_setting_ttd', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function total()
    {
        return $this->db->table('data_setting_ttd')->countAll();
    }


    //EDIT DAN SIMPAN DATA
    public function tampildataedit($id)
    {
        return $this->db->table('data_setting_ttd')
            ->where('id_setting_ttd', $id)
            ->get()
            ->getResultArray();
    }
    public function simpan_edit_data_setting_ttd($data)
    {
        $this->db->table('data_setting_ttd')
            ->where('id_setting_ttd', $data['id_setting_ttd'])
            ->update($data);
    }
}
