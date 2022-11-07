<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loket;

class LoketController extends Controller
{
    public function __construct()
    {
        $this-> Loket = new Loket;
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
            'nopasien' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'tgllhr' => 'required',
            'tmplhr' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'jk' => 'required'
        ], [
            'nopasien.required' => 'Harap Diisi',
            'nama.required' => 'Wajib Diisi',
            'nik.required' => 'Wajib Diisi',
            'tgllhr.required' => 'Wajib Diisi',
            'tmplhr.required' => 'Wajib Diisi',
            'umur.required' => 'Wajib Diisi',
            'alamat.required' => 'Wajib Diisi',
            'nohp.required' => 'Wajib Diisi',
            'jk.required' => 'Wajib diisi'
        ]);

        $result = [
            'no_pasien' => Request()->nopasien,
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

    public function update($id)
    {
        $data = $this->Loket->DetailData($id);
        return view('loket.edit', compact(('data')));
    }


    public function edit($id)
    {
        Request()->validate([
            'nopasien' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'tgllhr' => 'required',
            'tmplhr' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'jk' => 'required'
        ], [
            'nopasien.required' => 'Harap Diisi',
            'nama.required' => 'Wajib Diisi',
            'nik.required' => 'Wajib Diisi',
            'tgllhr.required' => 'Wajib Diisi',
            'tmplhr.required' => 'Wajib Diisi',
            'umur.required' => 'Wajib Diisi',
            'alamat.required' => 'Wajib Diisi',
            'nohp.required' => 'Wajib Diisi',
            'jk.required' => 'Wajib diisi'
        ]);

        $result = [
            'no_pasien' => Request()->nopasien,
            'nama_pasien' => Request()->nama,
            'nik' => Request()->nik,
            'tgl_lahir' => Request()->tgllhr,
            'tmpt_lahir' => Request()->tmplhr,
            'umur' => Request()->umur,
            'alamat' => Request()->alamat,
            'telpon' => Request()->nohp,
            'jk' => Request()->jk
        ];

        $this->Loket->EditData($id, $result);

        // dd($id);

        return redirect('/loket/registrasi')->with('pesan', 'Data Berhasil Di Edit');
    }
}
