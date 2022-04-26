<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'judul' => ''
        ];

        return view('home/vHome', $data);
    }
}
