<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function formUser()
    {
        $data = [
            'title' => 'Tambah Pengguna',
            'judul' => 'Tambah Pengguna'
        ];
        return view('admin/vFormUser', $data);
    }
}
