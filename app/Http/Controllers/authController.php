<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function loginUI()
    {
        return view('auth.login');
    }
    public  function loginCheck(Request $request)
    {
        $request->validate([
            'username' => "required",
            'password' => "required",
        ]);

        $username = $request->username;
        $password = $request->password;

        if (Auth::attempt(['username' => $username, 'password' => $password, 'role' => 'admin'])) {
            return redirect('/dashboard');
        } else if (Auth::attempt(['username' => $username, 'password' => $password, 'role' => 'loket'])) {
            return redirect('/loket/pasien');
        } else if (Auth::attempt(['username' => $username, 'password' => $password, 'role' => 'dokter'])) {
            return redirect('/diagnosa');
        } else if (Auth::attempt(['username' => $username, 'password' => $password, 'role' => 'apoteker'])) {
            return redirect('/apoteker');
        } else (dd('data tidak ditemukan'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
