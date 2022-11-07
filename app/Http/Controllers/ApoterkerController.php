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

    public function delete($id)
    {
        $this->Apoteker->DeleteData($id);
        return redirect('/apoteker/list')->with('pesan', 'Data Berhasil Di Hapus');
    }
}
