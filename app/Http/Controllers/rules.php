<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use App\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;

class rules extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function login()
    {
        return view('Login.login');
    }
    public function Register()
    {
        return view('Login.register');
    }

    public function RegisterAkun(Request $request)
    {
        $register = AuthUser::create($request->all());
        return view('Login.login');
    }
}
