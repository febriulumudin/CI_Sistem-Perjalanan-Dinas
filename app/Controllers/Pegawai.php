<?php

namespace App\Controllers;

use App\Models\Model_Auth;
use App\Models\Model_Data_Pegawai;

class Pegawai extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->Model_Auth = new Model_Auth();
        $this->Model_Data_Pegawai = new Model_Data_Pegawai();
    }

    public function index()
    {
        $data = array(
            'title' => 'Index',
        );
        return view('in_out/v_login_pegawai', $data);
    }

    public function beranda($nip)
    {
        $data = array(
            'title' => 'Index',

            'notice' => $this->Model_Data_Pegawai->notice($nip),
            'spt' => $this->Model_Data_Pegawai->noticespt($nip),

            'isi' => 'pegawai/beranda_pegawai',
        );
        return view('layout_pegawai/v_wrapper', $data);
    }

    public function cek_login()
    {
        if ($this->validate([
            'nip' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]
            ],
        ])) {
            $nip = $this->request->getPost('nip');
            $cek = $this->Model_Auth->login_pegawai($nip);
            if ($cek) {
                //Jika Data Cocok
                session()->set('log', true);
                session()->set('id_pegawai', $cek['id_pegawai']);
                session()->set('nip', $cek['nip']);
                session()->set('nama', $cek['nama']);
                session()->set('jen_kel', $cek['jen_kel']);

                return redirect()->to(base_url('/pegawai/beranda/' . session()->get('nip')));
            } else {
                //jika data tidak cocok
                session()->setFlashdata('Pesan', 'Login Gagal, Email Atau Password Tidak Cocok!!');
                return redirect()->to(base_url('/pegawai'));
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getError());
            return redirect()->to(base_url('/pegawai'));
        }
    }

    public function keluar()
    {
        session()->remove('log');
        session()->set('id_pegawai');
        session()->set('nip');
        session()->set('nama');
        session()->set('jen_kel');
        session()->setFlashdata('Pesan', 'Akun Telah Logout!!');
        return redirect()->to(base_url('/pegawai'));

        //Atur di Folder FIlters->Auth_Filter.php dan di Config->Filters.php
    }

    //--------------------------------------------------------------------

}
