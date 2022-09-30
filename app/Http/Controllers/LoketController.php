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
        return view('loket.Registrasi', $pasien);
    }

    public function createpasien()
    {
        return view('loket.Daftar');
    }

    public function save(Request $request)
    {
        $request->validate([
            // 'nopasien' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'tgllhr' => 'required',
            'tmplhr' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'jk' => 'required'
        ], [
            // 'nopasien.required' => 'Harap Diisi',
            'nama.required' => 'Harap Diisi',
            'nik.required' => 'Harap Diisi',
            'tgllhr.required' => 'Harap Diisi',
            'tmplhr.required' => 'Harap Diisi',
            'umur.required' => 'Harap Diisi',
            'alamat.required' => 'Harap Diisi',
            'nohp.required' => 'Harap Diisi',
            'jk.required' => 'Harap diisi'
        ]);

        $result = [
            // 'no_pasien' => Request()->nopasien,
            'nama_pasien' => Request()->nama,
            'nik' => Request()->nik,
            'tgl_lahir' => Request()->tgllhr,
            'tmpt_lahir' => Request()->tmplhr,
            'umur' => Request()->umur,
            'alamat' => Request()->alamat,
            'telpon' => Request()->nohp,
            'jk' => Request()->jk
        ];

        $this->Loket->createData($result);

        return redirect('/loket/registrasi')->with('pesan', 'Data Berhasil Di Tambah');
    }

    public function delete($id)
    {
        $this->Loket->DeleteData($id);
        return redirect('/loket/registrasi')->with('pesan', 'Data Berhasil Di Hapus');
    }
}
