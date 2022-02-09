<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Masuk',
        ];

        return view('login/vLogin', $data);
    }
}
