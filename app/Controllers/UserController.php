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
        $this->builder->orderBy('id_surat', 'DESC');
        $query = $this->builder->get();
        
        $data = [
            'title' => 'Daftar Surat',
            'judul' => 'Daftar Surat',
            'mails' => $query->getResult()
        ];
        // dd($data);

        return view('user/vListSurat', $data);
    }

    public function formSurat()
    {
        $data = [
            'title' => 'Registrasi Surat',
            'judul' => 'Form Registrasi Surat',
        ];

        return view('/user/vFormSurat', $data);
    }

    public function registSurat()
    {
        $data = [
            'tgl_regist' => $this->request->getPost('tgl_regist'),
            'pic' => $this->request->getPost('pic'),
            'dept_asal' => $this->request->getPost('dept_asal'),
            'dept_tujuan' => $this->request->getPost('dept_tujuan'),
            'perihal' => $this->request->getPost('perihal'),
        ];
        // dd($data);
        $this->builder->insert($data);

        return redirect()->to('/user/formSurat')->with('message', 'Surat Baru Berhasil Ditambahkan');
    }
}
