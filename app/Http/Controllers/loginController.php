<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\ObatModel;
use App\PasienModel;
use DB;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Foundation\Auth\User;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Login.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cek = User::where('email', $request->email)->first();
        // dd($cek);
        if ($cek == NULL) {
            return redirect('login');
        }
        if ($cek->role == "admin") {
            if (Hash::check($request->password, $cek->password)) {
                $data = array(
                    'nama' => $cek->nama,
                    'email' => $cek->email,
                    'password' => $cek->password,
                    'gender' => $cek->gender,
                    'role' => $cek->role,
                );
                $request->session()->put($data);
                return view('tampilan.index');
            } else {
                return redirect('login');
            }
        } else {
            if (Hash::check($request->password, $cek->password)) {
                $data = array(
                    'nama' => $cek->nama,
                    'email' => $cek->email,
                    'password' => $cek->password,
                    'gender' => $cek->gender,
                    'role' => $cek->role,
                );
                $request->session()->put($data);
                return view('tampilan2.index');
            } else {
                return redirect('login');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        session()->flush();
        return redirect('login');
    }
}