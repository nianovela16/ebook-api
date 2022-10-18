<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Nis' => 3103120162,
            'Nama' => 'Nia Novela Ariandini',
            'Phone' => '081392150129',
            'Class' => 'XII RPL 5',
        ];
    }
}
