<?php

namespace App\Controllers;

use App\Models\Model_Master;

class Beranda extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->Model_Master = new Model_Master();
    }
    public function index()
    {
        $data = array(
            'title' => 'beranda',

            'notice' => $this->Model_Master->notice(),
            'spt' => $this->Model_Master->noticespt(),

            'isi' => '/table/beranda'
        );
        return view('/layout/v_wrapper', $data);
    }

    //--------------------------------------------------------------------

}
