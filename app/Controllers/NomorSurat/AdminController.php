<?php

namespace App\Controllers\NomorSurat;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }
    public function formUser()
    {
        $data = [
            'title' => 'Tambah Pengguna',
            'judul' => 'Tambah Pengguna'
        ];
        return view('admin/vFormUser', $data);
    }

    public function listUser()
    {
        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data = [
            'title' => 'Daftar Nama Pengguna',
            'judul' => 'Daftar Nama Pengguna',
            'users' => $query->getResult()    
        ];

        return view('admin/vListUser', $data);
    }

    public function editUser($id)
    {
        $update = $this->db->table('auth_groups_users');
        $update->set('group_id', $this->request->getPost('role'), false);
        $update->where('user_id', $id);
        $update->update();

        return redirect()->to('admin/listUser')->with('message', 'Pengguna Berhasil di Update');
    }

    public function hapusUser($id)
    {
        $this->builder->delete(['id' => $id]);

        return redirect()->to('admin/listUser')->with('message', 'User Berhasil di Hapus');
    }
}
