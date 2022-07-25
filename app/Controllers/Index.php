<?php

namespace App\Controllers;

use App\Models\Model_Auth;

class Index extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->Model_Auth = new Model_Auth();
    }

    public function index()
    {
        $data = array(
            'title' => 'Index',
        );
        return view('in_out/v_login', $data);
    }

    public function cek_login()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]
            ],
        ])) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $cek = $this->Model_Auth->login($username, $password);
            if ($cek) {
                //Jika Data Cocok
                session()->set('log', true);
                session()->set('id_user', $cek['id_user']);
                session()->set('username', $cek['username']);
                session()->set('password', $cek['password']);
                session()->set('hak_akses', $cek['hak_akses']);

                return redirect()->to(base_url('/beranda'));
            } else {
                //jika data tidak cocok
                session()->setFlashdata('Pesan', 'Login Gagal, Username Atau Password Tidak Cocok!!');
                return redirect()->to(base_url('/'));
            }
        } else {
        }
    }

    public function Keluar()
    {
        session()->remove('log');
        session()->set('username');
        session()->set('password');
        session()->set('hak_akses');
        session()->setFlashdata('Pesan', 'Akun Telah Logout!!');
        return redirect()->to(base_url('/'));

        //Atur di Folder FIlters->Auth_Filter.php dan di Config->Filters.php
    }

    //--------------------------------------------------------------------

}
