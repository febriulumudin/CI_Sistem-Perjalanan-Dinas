<?php

namespace App\Controllers;

use App\Models\Model_Master;
use App\Models\Model_Data_Master_User;
use App\Models\Model_Data_Master_Anggota;
use App\Models\Model_Data_Master_Jabatan;
use App\Models\Model_Data_Master_Rekening;
use App\Models\Model_Data_Setting_Ttd;
use App\Models\Model_Data_Approval;

class Master extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->Model_Master = new Model_Master();
        $this->Model_Data_User = new Model_Data_Master_User();
        $this->Model_Data_Anggota = new Model_Data_Master_Anggota();
        $this->Model_Data_Jabatan = new Model_Data_Master_Jabatan();
        $this->Model_Data_Rekening = new Model_Data_Master_Rekening();
        $this->Model_Data_Setting_Ttd = new Model_Data_Setting_Ttd();
        $this->Model_Data_Approval = new Model_Data_Approval();
    }

    public function index()
    {
        $data = array(
            'title' => 'master',
            'isi' => 'table/master'
        );
        return view('layout/v_wrapper', $data);
    }

    public function data_anggota()
    {
        $data = array(
            'title' => 'data_anggota',
            'user' => $this->Model_Data_Anggota->tampildata(),
            'total' => $this->Model_Data_Anggota->total(),

            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'isi' => 'master_data/data_anggota'
        );
        return view('layout/v_wrapper', $data);
    }

    public function jenis_anggota()
    {
        $data = array(
            'title' => 'jenis_anggota',
            'jabatan' => $this->Model_Data_Jabatan->tampildata(),
            'total' => $this->Model_Data_Jabatan->total(),

            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'isi' => 'master_data/jenis_anggota'
        );
        return view('layout/v_wrapper', $data);
    }

    public function setting_ttd()
    {
        $data = array(
            'title' => 'setting_ttd',
            'ttd' => $this->Model_Data_Setting_Ttd->tampildata(),
            'total' => $this->Model_Data_Setting_Ttd->total(),

            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'isi' => 'master_data/data_setting_ttd'
        );
        return view('layout/v_wrapper', $data);
    }

    public function data_user()
    {
        $data = array(
            'title' => 'master/data_user',
            'user' => $this->Model_Data_User->tampildata(),
            'total' => $this->Model_Data_User->total(),

            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'isi' => 'master_data/data_user'
        );
        return view('layout/v_wrapper', $data);
    }

    public function data_rekening()
    {
        $data = array(
            'title' => 'master/data_user',
            'rekening' => $this->Model_Data_Rekening->tampildata(),
            'total' => $this->Model_Data_Rekening->total(),

            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'isi' => 'master_data/data_rekening'
        );
        return view('layout/v_wrapper', $data);
    }



    //---------------------------------------------------------------------------
    //TAMBAH DATA
    //---------------------------------------------------------------------------


    public function tambah_data_anggota()
    {
        $data = array(
            'title' => 'tambah data anggota',
            'jabatan' => $this->Model_Data_Jabatan->tampildata(),
            'golongan' => $this->Model_Data_Anggota->tampildatagolongan(),

            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'isi' => 'admin/tambah_data/master/tambah_data_anggota'
        );
        return view('layout/v_wrapper', $data);
    }
    public function tambah_data_jabatan()
    {
        $data = array(
            'title' => 'tambah data jabatan',
            'total' => $this->Model_Data_Jabatan->total(),

            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'isi' => 'admin/tambah_data/master/tambah_data_jabatan'
        );
        return view('layout/v_wrapper', $data);
    }


    //---------------------------------------------------------------------------
    //SIMPAN TAMBAH DATA
    //---------------------------------------------------------------------------


    public function simpan_data_anggota()
    {
        $data = array(
            'nip' => $this->request->getPost('nip'),
            'nama' => $this->request->getPost('nama'),
            'no_hp' => $this->request->getPost('no_hp'),
            'gol_pegawai' => $this->request->getPost('gol_peg'),
            'kode_jabatan' => $this->request->getPost('jabatan'),
            'pendidikan_ijasah' => $this->request->getPost('pen_ija'),
            'sts_pns' => $this->request->getPost('sts_pns'),
            'jen_kel' => $this->request->getPost('jenkel')
        );
        $this->Model_Data_Anggota->simpan_data_anggota($data);
        return redirect()->to(base_url('/master/data_anggota'));
    }
    public function simpan_data_jabatan()
    {
        $data = array(
            'nama_jabatan' => $this->request->getPost('nam_jab'),
            'kode_jabatan' => $this->request->getPost('kod_jab'),
        );
        $this->Model_Data_Jabatan->simpan_data_jabatan($data);
        return redirect()->to(base_url('/master/jenis_anggota'));
    }


    //---------------------------------------------------------------------------
    //EDIT DATA
    //---------------------------------------------------------------------------


    public function edit_pegawai($id_pegawai)
    {
        $data = array(
            'pegawai' => $this->Model_Data_Anggota->tampildataedit($id_pegawai),
            'jabatan' => $this->Model_Data_Jabatan->tampildata(),
            'golongan' => $this->Model_Data_Anggota->tampildatagolongan(),

            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'isi' => '/admin/edit_data/master/edit_data_anggota'
        );
        return view('layout/v_wrapper', $data);
    }
    public function edit_jabatan($id_jabatan)
    {
        $data = array(
            'jabatan' => $this->Model_Data_Jabatan->tampildataedit($id_jabatan),

            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'isi' => '/admin/edit_data/master/edit_data_jabatan'
        );
        return view('layout/v_wrapper', $data);
    }
    public function edit_setting_ttd($id_setting_ttd)
    {
        $data = array(
            'setting_ttd' => $this->Model_Data_Setting_Ttd->tampildataedit($id_setting_ttd),

            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'isi' => '/admin/edit_data/master/edit_data_setting_ttd'
        );
        return view('layout/v_wrapper', $data);
    }
    public function edit_data_user($id_user)
    {
        $data = array(
            'user' => $this->Model_Data_User->tampildataedit($id_user),

            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'isi' => '/admin/edit_data/master/edit_data_user'
        );
        return view('layout/v_wrapper', $data);
    }
    public function edit_data_rekening($id_rek)
    {
        $data = array(
            'rekening' => $this->Model_Data_Rekening->tampildataedit($id_rek),

            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'isi' => '/admin/edit_data/master/edit_data_rekening'
        );
        return view('layout/v_wrapper', $data);
    }


    //---------------------------------------------------------------------------
    //SIMPAN EDIT DATA
    //---------------------------------------------------------------------------


    public function simpan_edit_data_anggota($id_pegawai)
    {
        $data = array(
            'id_pegawai' => $id_pegawai,
            'nip' => $this->request->getPost('nip'),
            'nama' => $this->request->getPost('nama'),
            'no_hp' => $this->request->getPost('no_hp'),
            'jen_kel' => $this->request->getPost('jenkel'),
            'gol_pegawai' => $this->request->getPost('gol_peg'),
            'kode_jabatan' => $this->request->getPost('jabatan'),
            'pendidikan_ijasah' => $this->request->getPost('pen_ija'),
            'sts_pns' => $this->request->getPost('sts_pns')
        );
        $this->Model_Data_Anggota->simpan_edit_data_anggota($data);
        return redirect()->to(base_url('/master/data_anggota'));
    }
    public function simpan_edit_data_jabatan($id_jabatan)
    {
        $data = array(
            'id_jabatan' => $id_jabatan,
            'nama_jabatan' => $this->request->getPost('nam_jab'),
        );
        $this->Model_Data_Jabatan->simpan_edit_data_jabatan($data);
        return redirect()->to(base_url('/master/jenis_anggota'));
    }

    public function simpan_edit_data_setting_ttd($id_setting_ttd)
    {
        $data = array(
            'id_setting_ttd' => $id_setting_ttd,
            'nama_ttd' => $this->request->getPost('nama_ttd'),
            'nip' => $this->request->getPost('nip'),
            'jabatan' => $this->request->getPost('jabatan'),
        );
        $this->Model_Data_Setting_Ttd->simpan_edit_data_setting_ttd($data);
        return redirect()->to(base_url('/master/setting_ttd'));
    }
    public function simpan_edit_data_user($id_user)
    {
        $data = array(
            'id_user' => $id_user,
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
        );
        $this->Model_Data_User->simpan_edit_data_user($data);
        return redirect()->to(base_url('/master/data_user'));
    }
    public function simpan_edit_data_rekening($id_rek)
    {
        $data = array(
            'id_rekening' => $id_rek,
            'kode_rekening' => $this->request->getPost('kode_rek'),
        );
        $this->Model_Data_Rekening->simpan_edit_data_rekening($data);
        return redirect()->to(base_url('/master/data_rekening'));
    }


    //---------------------------------------------------------------------------
    //HAPUS DATA
    //---------------------------------------------------------------------------


    public function hapus_pegawai($id_pegawai)
    {
        $data = array(
            'id_pegawai' => $id_pegawai
        );
        $this->Model_Data_Anggota->hapusdata($data);
        session()->setFlashdata('Pesan', 'Data berhasil dihapus!!!');
        return redirect()->to(base_url('/master/data_anggota'));
    }
    public function hapus_jabatan($id)
    {
        $data = array(
            'id_jabatan' => $id
        );
        $this->Model_Data_Jabatan->hapusdata($data);
        session()->setFlashdata('Pesan', 'Data berhasil dihapus!!!');
        return redirect()->to(base_url('/master/jenis_anggota'));
    }
}
