<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'judul' => ''
        ];
        return view('templates/vHome', $data);
    }
}
