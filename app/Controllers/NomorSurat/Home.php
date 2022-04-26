<?php

namespace App\Controllers\NomorSurat;

use App\Controllers\BaseController;

class Home extends BaseController
{
    protected $builder, $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('memo');
    }

    public function index()
    {
        $this->builder->selectCount('id_surat');
        $total = $this->builder->get();

        $this->builder->selectCount('status', 'noAction');
        $this->builder->where('status', 0);
        $noAction = $this->builder->get();

        $this->builder->selectCount('status', 'progres');
        $this->builder->where('status >=', 1);
        $this->builder->where('status <=', 3);
        $progres = $this->builder->get();
        
        $this->builder->selectCount('status', 'done');
        $this->builder->where('status', 4);
        $done = $this->builder->get();

        $data = [
            'title' => 'Beranda',
            'judul' => '',
            'total' => $total->getResult(),
            'noAction' => $noAction->getResult(),
            'progres' => $progres->getResult(),
            'done' => $done->getResult()
        ];

        // dd($data);
        return view('nomorSurat/templates/vHome', $data);
    }
}
