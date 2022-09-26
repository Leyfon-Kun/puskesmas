<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loket;

class LoketController extends Controller
{
    public function __construct()
    {
        $this->pasien = new Loket;
    }

    public function index()
    {
        $pasien = $this->pasien->showData();
        return view('Registrasi', compact(('pasien')));
    }
}
