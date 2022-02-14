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
        
        if(in_groups('OPR')){
            $this->builder->where('dept_asal', 'OPR');
            $this->builder->orderBy('id_surat', 'DESC');
            $query = $this->builder->get();

            $data = [
                'title' => 'Daftar Surat',
                'judul' => 'Daftar Surat',
                'mails' => $query->getResult()
            ];
        }
        elseif(in_groups('PTI')){
            $this->builder->where('dept_asal', 'PTI');
            $this->builder->orderBy('id_surat', 'DESC');
            $query = $this->builder->get();

            $data = [
                'title' => 'Daftar Surat',
                'judul' => 'Daftar Surat',
                'mails' => $query->getResult()
            ];
        }
        elseif(in_groups('STI')){
            $this->builder->where('dept_asal', 'STI');
            $this->builder->orderBy('id_surat', 'DESC');
            $query = $this->builder->get();

            $data = [
                'title' => 'Daftar Surat',
                'judul' => 'Daftar Surat',
                'mails' => $query->getResult()
            ];
        }
        elseif(in_groups('PPO')){
            $this->builder->where('dept_asal', 'PPO');
            $this->builder->orderBy('id_surat', 'DESC');
            $query = $this->builder->get();

            $data = [
                'title' => 'Daftar Surat',
                'judul' => 'Daftar Surat',
                'mails' => $query->getResult()
            ];
        }
        elseif(in_groups('STL')){
            $this->builder->where('dept_asal', 'STL');
            $this->builder->orderBy('id_surat', 'DESC');
            $query = $this->builder->get();

            $data = [
                'title' => 'Daftar Surat',
                'judul' => 'Daftar Surat',
                'mails' => $query->getResult()
            ];
        }
        else{
            $this->builder->orderBy('id_surat', 'DESC');
            $query = $this->builder->get();

            $data = [
                'title' => 'Daftar Surat',
                'judul' => 'Daftar Surat',
                'mails' => $query->getResult()
            ];
        }

        return view('user/vListSurat', $data);
    }

    public function formSurat()
    {
        session();
        $data = [
            'title' => 'Registrasi Surat',
            'judul' => 'Form Registrasi Surat',
            'validation'=> \Config\Services::validation()
        ];

        return view('/user/vFormSurat', $data);
    }

    public function registSurat()
    {
        if(!$this->validate([
            'file' => [
                'rules' => 'uploaded[file] | ext_in[file, file.pdf]'
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/user/vFormSurat')->withInput()->with('validation', $validation);
            return redirect()->to('/user/formSurat')->withInput();
        }

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

    public function inKadept($id)
    {
        date_default_timezone_set("Asia/Jakarta");

        $data = [
            'tgl_masuk_kadept' => date("Y-m-d"),
            'status' => 1
        ];
        // dd($data);
        $this->builder->where('id_surat', $id);
        $this->builder->update($data);

        return redirect()->to('/user/listSurat')->with('message', 'Surat Berhasil Di Update');
    }

    public function outKadept($id)
    {
        date_default_timezone_set("Asia/Jakarta");

        $data = [
            'tgl_keluar_kadept' => date("Y-m-d"),
            'status' => 2
        ];
        // dd($data);
        $this->builder->where('id_surat', $id);
        $this->builder->update($data);

        return redirect()->to('/user/listSurat')->with('message', 'Surat Berhasil Di Update');
    }

    public function inKadiv($id)
    {
        date_default_timezone_set("Asia/Jakarta");

        $data = [
            'tgl_masuk_kadiv' => date("Y-m-d"),
            'status' => 3
        ];
        // dd($data);
        $this->builder->where('id_surat', $id);
        $this->builder->update($data);

        return redirect()->to('/user/listSurat')->with('message', 'Surat Berhasil Di Update');
    }

    public function outKadiv($id)
    {
        date_default_timezone_set("Asia/Jakarta");
        
        $update = [
            'tgl_keluar_kadiv' => date("Y-m-d"),
            'status' => 4
        ];
        $this->builder->where('id_surat', $id);
        $this->builder->update($update);

        function getRomawi($bln){
            switch ($bln){
                case 1: 
                    return "I";
                break;
                case 2:
                    return "II";
                break;
                case 3:
                    return "III";
                break;
                case 4:
                    return "IV";
                break;
                case 5:
                    return "V";
                break;
                case 6:
                    return "VI";
                break;
                case 7:
                    return "VII";
                break;
                case 8:
                    return "VIII";
                break;
                case 9:
                    return "IX";
                break;
                case 10:
                    return "X";
                break;
                case 11:
                    return "XI";
                break;
                case 12:
                    return "XII";
                break;
            }
        }

        $hari = date('d');
        if($hari < 10){
            $hari = sprintf("%02s", $hari);
        }
        $bulan = date('n');
        $romawi = getRomawi($bulan);
        $tahun = date ('Y');

        //query department
        $this->builder->select('dept_asal, dept_tujuan');
        $this->builder->where('id_surat', $id);
        $query = $this->builder->get();
        $dept = $query->getResult();
        $asal = $dept[0]->dept_asal;
        $tujuan = $dept[0]->dept_tujuan;
        
        //query nomor
        $this->builder->select("(Select Max(no_urut)+1)as no_urut", false);
        $this->builder->where('month(tgl_regist)', $bulan);
        $query = $this->builder->get();
        $no_urut = $query->getResult();
        $nomor = $hari . "0" . $no_urut[0]->no_urut . "/MO/" . $asal . "-" . $tujuan . "/" . $romawi . "/" . $tahun;
        // dd($nomor);
        
        $data = [
            'hari' => $hari,
            'bulan' => $bulan,
            'tahun' => $tahun,
            'no_urut' => $no_urut[0]->no_urut,
            'no_surat' => $nomor
        ];
        // dd($data);
        
        $this->builder->where('id_surat', $id);
        $this->builder->update($data);
        
        return redirect()->to('/user/listSurat')->with('message', 'Surat Behasil Di Update! Nomor Surat Berhasil Di Tambahkan');
    }

    public function formEditSurat($id)
    {
        $this->builder->where('id_surat', $id);
        $query = $this->builder->get();
        $data = [
            'title' => 'Edit Surat',
            'judul' => 'Edit Surat',
            'mails' => $query->getResult()
        ];

        return view('user/vFormEditSurat', $data);
    }

    public function editSurat($id)
    {
        $data = [
            'dept_tujuan' => $this->request->getPost('dept_tujuan'),
            'perihal' => $this->request->getPost('perihal'),
            'tgl_edit' => $this->request->getPost('tgl_edit')
        ];

        $this->builder->where('id_surat', $id);
        $this->builder->update($data);

        return redirect()->to('/user/listSurat')->with('message', 'Surat Berhasil Di Edit');
    }

    public function hapusSurat($id)
    {
        $this->builder->delete(['id_seurat' => $id]);
        
        return redirect()->to('/user/listSurat')->with('message', 'Surat Berhasil Di Hapus');
    }
}
