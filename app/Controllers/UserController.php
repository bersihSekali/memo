<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    protected $db, $builder;
    
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('memo');
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Surat',
            'judul' => 'Daftar Surat'
        ];

        return view('user/vListSurat', $data);
    }

    public function registSurat()
    {
        $data = [
            'title' => 'Registrasi Surat',
            'judul' => 'Form Registrasi Surat'
        ];

        return view('user/vFormSurat', $data);
    }
}
