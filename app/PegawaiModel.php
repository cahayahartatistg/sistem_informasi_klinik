<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PegawaiModel extends Model
{
    protected $table = 'pegawai_models';
    protected $fillable = ['nama_pegawai', 'alamat', 'no_telp', 'id_wilayah'];

    public function wilayah()
    {
        return $this->belongsTo('App\WilayahModel', 'id_wilayah', 'id');
    }
}