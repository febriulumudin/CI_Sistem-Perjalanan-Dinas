<?php

namespace App\Controllers;

use App\Models\Model_Transaksi;

class Transaksi extends BaseController
{
    public function __construct()
    {
        //$this->Model_Master = new Model_Transaksi();
    }

    public function index()
    {
        $data = array(
            'title' => 'master',
            'isi' => 'table/transaksi'
        );

        return view('layout/v_wrapper', $data);
    }

    public function kegiatan()
    {
        $data = array(
            'title' => 'transaksi/kegiatan',
            'isi' => 'master_transaksi/kegiatan'
        );

        return view('layout/v_wrapper', $data);
    }

    public function panjar()
    {
        $data = array(
            'title' => 'transaksi/panjar',
            'isi' => 'master_transaksi/panjar'
        );

        return view('layout/v_wrapper', $data);
    }

    public function pelunasan()
    {
        $data = array(
            'title' => 'transaksi/pelunasan',
            'isi' => 'master_transaksi/pelunasan'
        );

        return view('layout/v_wrapper', $data);
    }

    //--------------------------------------------------------------------

}
