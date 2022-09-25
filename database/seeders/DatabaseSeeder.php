<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=>'admin',
            'password'=>Hash::make('admin'),
            'role'=>'admin',
        ]);
        User::create([
            'username'=>'loket',
            'password'=>Hash::make('loket'),
            'role'=>'loket',
        ]);
    }
}
