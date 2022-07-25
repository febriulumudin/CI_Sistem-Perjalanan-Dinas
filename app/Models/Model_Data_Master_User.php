<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Data_Master_User extends Model
{
    public function tampildata()
    {
        return $this->db->table('user')
            ->orderBy('id_user', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function total()
    {
        return $this->db->table('user')->countAll();
    }


    //EDIT DAN SIMPAN DATA
    public function tampildataedit($id)
    {
        return $this->db->table('user')
            ->where('id_user', $id)
            ->get()
            ->getResultArray();
    }
    public function simpan_edit_data_user($data)
    {
        $this->db->table('user')
            ->where('id_user', $data['id_user'])
            ->update($data);
    }
}
