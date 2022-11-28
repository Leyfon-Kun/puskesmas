<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loket;
use Carbon\Carbon;

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
            'noantrian' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'tgllhr' => 'required',
            'tmplhr' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'jk' => 'required'
        ], [
            'noantrian.required' => 'Wajib Diisi',
            'nama.required' => 'Wajib Diisi',
            'nik.required' => 'Wajib Diisi',
            'tgllhr.required' => 'Wajib Diisi',
            'tmplhr.required' => 'Wajib Diisi',
            'alamat.required' => 'Wajib Diisi',
            'nohp.required' => 'Wajib Diisi',
            'jk.required' => 'Wajib diisi'
        ]);

        $umur = Carbon::parse(Request()->tgllhr)->age;

        $result = [
            'no_antrian' => Request()->noantrian,
            'nama_pasien' => Request()->nama,
            'nik' => Request()->nik,
            'tgl_lahir' => Request()->tgllhr,
            'tmpt_lahir' => Request()->tmplhr,
            'alamat' => Request()->alamat,
            'umur' => $umur,
            'telpon' => Request()->nohp,
            'jk' => Request()->jk,
            'tgl_daftar' => Request()->tgldftr
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
            'noantrian' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'tgllhr' => 'required',
            'tmplhr' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'jk' => 'required'
        ], [
            'noantrian.required' => 'Wajib Diisi',
            'nama.required' => 'Wajib Diisi',
            'nik.required' => 'Wajib Diisi',
            'tgllhr.required' => 'Wajib Diisi',
            'tmplhr.required' => 'Wajib Diisi',
            'alamat.required' => 'Wajib Diisi',
            'nohp.required' => 'Wajib Diisi',
            'jk.required' => 'Wajib diisi'
        ]);

        $umur = Carbon::parse(Request()->tgllhr)->age;

        $result = [
            'no_antrian' => Request()->noantrian,
            'nama_pasien' => Request()->nama,
            'nik' => Request()->nik,
            'tgl_lahir' => Request()->tgllhr,
            'tmpt_lahir' => Request()->tmplhr,
            'alamat' => Request()->alamat,
            'umur' => $umur,
            'telpon' => Request()->nohp,
            'jk' => Request()->jk,
            'tgl_daftar' => Request()->tgldftr
        ];

        $this->Loket->EditData($id, $result);


        return redirect('/loket/registrasi')->with('pesan', 'Data Berhasil Di Edit');
    }
}
