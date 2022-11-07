<?php

namespace App\Http\Controllers;

use App\Models\Apoterker;
use Illuminate\Http\Request;

class ApoterkerController extends Controller
{
    public function __construct()
    {
        $this->Apoteker = new Apoterker;
    }

    public function indexobat()
    {
        $obat = [
            'obat' => $this->Apoteker->showData(),
        ];
        return view('apoteker.list', $obat);
    }

    public function createobat()
    {
        return view('apoteker.tambah');
    }

    public function save(Request $request)
    {
        $request->validate([
            'kodeobat' => 'required',
            'namaobat' => 'required',
            'satuan' => 'required',
            'jumlah' => 'required',
        ], [
            'kodeobat.required' => 'Wajib Diisi',
            'namaobat.required' => 'Wajib Diisi',
            'satuan.required' => 'Wajib Diisi',
            'jumlah.required' => 'Wajib Diisi',
        ]);

        $result = [
            'kode_obat' => Request()->kodeobat,
            'nama_obat' => Request()->namaobat,
            'satuan' => Request()->satuan,
            'jumlah' => Request()->jumlah,
        ];

        $this->Apoteker->createData($result);

        return redirect('/apoteker/list')->with('pesan', 'Data Berhasil Di Tambah');
    }

    public function delete($id)
    {
        $this->Apoteker->DeleteData($id);
        return redirect('/apoteker/list')->with('pesan', 'Data Berhasil Di Hapus');
    }
}
