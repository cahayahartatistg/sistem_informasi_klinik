<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PegawaiModel;
use App\WilayahModel;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = PegawaiModel::all();
        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai = PegawaiModel::all();
        $wilayah = WilayahModel::all();
        return view('pegawai.create', compact('pegawai', 'wilayah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PegawaiModel::create([
            'nama_pegawai' => $request->nama_pegawai,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_wilayah' => $request->id_wilayah

        ]);
        return redirect('/pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $wilayah = WilayahModel::all();
        $pegawai = PegawaiModel::find($id);
        return view('pegawai.edit', compact('wilayah', 'pegawai'));
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
        $pegawai = PegawaiModel::find($id);
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->alamat = $request->alamat;
        $pegawai->no_telp = $request->no_telp;
        $pegawai->id_wilayah = $request->id_wilayah;
        $pegawai->save();

        return redirect('/pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = PegawaiModel::find($id);
        $pegawai->delete();

        return redirect('/pegawai');
    }
}
