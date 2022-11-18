<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class Loket extends Model
{
    public function showData()
    {
        return DB::table('pasien')->get();
    }

    public function age()
    {
        return Carbon::parse($this->attributes['tgl_lahir'])->umur;
    }

    public function createData($data)
    {
        return DB::table('pasien')->insert($data);
    }

    public function DeleteData($id)
    {
        return DB::table('pasien')->where('no_pasien', $id)->delete();
    }

    public function EditData($id, $data)
    {
        return DB::table('pasien')->where('no_pasien', $id)->update($data);
    }
    public function DetailData($id)
    {
        return DB::table('pasien')->where('no_pasien', $id)->first();
    }
}
