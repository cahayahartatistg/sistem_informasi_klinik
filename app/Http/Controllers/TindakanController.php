<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TindakanModel;
use App\PasienModel;
use App\ObatModel;
// use Laravel\Tinker\TinkerCaster;

class TindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tindakan = TindakanModel::all();
        return view('tindakan.index', compact('tindakan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obat = ObatModel::all();
        $pasien = PasienModel::all();
        return view('tindakan.create', compact('obat', 'pasien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TindakanModel::create([
            'id_pasien' => $request->id_pasien,
            'tindakan' => $request->tindakan
        ]);

        // return redirect('/tindakan')->with('success', 'Permintaan anda sedang di proses!');
        return redirect('/tindakan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $obat = ObatModel::all();
        return view('tindakan.lanjuttindakan', compact('obat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $pasien = PasienModel::all();
        $tindakan = TindakanModel::find($id);
        return view('tindakan.edit', compact('pasien', 'tindakan'));
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
        $tindakan = TindakanModel::find($id);
        $tindakan->id_pasien = $request->id_pasien;
        $tindakan->tindakan = $request->tindakan;
        $tindakan->id_obat = $request->id_obat;
        $tindakan->save();

        return redirect('/tindakan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tindakan = TindakanModel::find($id);
        $tindakan->delete();


        return redirect('/tindakan')->with('succes', 'Berhasil Dihapus!');
    }
}