<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class authController extends Controller
{
    public function loginUI(){
        return view('login.login');
    }
    public  function loginCheck(Request $request)
    {
        $valid = $request->validate([
            'username'=>"required",
            'password'=>"required",
        ]);

        $username = $request->username;
        $password = $request->password;

        if (Auth::attempt(['username'=>$username,'password'=>$password,'tipe'=>1])) {
return redirect('/dashboard');
        }else if (Auth::attempt(['username'=>$username,'password'=>$password,'tipe'=>2])) {

        }




    }
}
