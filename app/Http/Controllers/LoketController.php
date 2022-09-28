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

    public function createpasien()
    {
        return view('Daftar');
    }

    public function save(Request $request)
    {
        $request->validate([
            'no' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'nohp' => 'required'
        ],[
            'no.required' => 'diisi ya sayangkuh',
            'nama.required' => 'diisi ya sayangkuh',
            'nik.required' => 'diisi ya sayangkuh',
            'nohp.required' => 'diisi ya sayangkuh'
        ]);

        $result = [
            'no' => Request()->no,
            'nama' => request()->nama,
            'nik' => request()->nik,
            'nohp' => request()->no
        ];

        $this->Loket->createData($result);

        return redirect('/loket/pasien')->with('pesan', 'Data Berhasil Di Tambah');
    }

}
