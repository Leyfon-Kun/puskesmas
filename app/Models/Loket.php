<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Loket extends Model
{
    public function showData()
    {
        return DB::table('pasien')->get();
    }

    public function createData($data)
    {
        return DB::table('pasien')->insert($data);
    }

}
