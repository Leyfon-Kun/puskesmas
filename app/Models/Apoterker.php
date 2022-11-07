<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apoterker extends Model
{
    public function showData()
    {
        return DB::table('obat')->get();
    }

    public function createData($data)
    {
        return DB::table('obat')->insert($data);
    }

    public function DeleteData($id)
    {
        return DB::table('obat')->where('kode_obat', $id)->delete();
    }

    public function EditData($id, $data)
    {
        return DB::table('obat')->where('kode_obat', $id)->update($data);
    }
    public function DetailData($id)
    {
        return DB::table('obat')->where('kode_obat', $id)->first();
    }
}
