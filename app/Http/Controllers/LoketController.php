<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loket;

class LoketController extends Controller
{
    public function __construct()
    {
        $this->Loket = new Loket;
    }

    public function indexpasien()
    {
        $pasien = [
            'pasien' => $this->Loket->showData(),
        ];
        return view('Registrasi', $pasien);
    }

    public function indexregistrasipasien()
    {
        return view('Daftar');
    }
}
