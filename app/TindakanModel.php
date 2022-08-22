<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TindakanModel extends Model
{
    protected $table = 'tindakan_models';
    protected $fillable = ['id_pasien', 'tindakan', 'id_obat'];

    public function pasien()
    {
        return $this->belongsTo('App\PasienModel', 'id_pasien', 'id');
    }
    public function obat()
    {
        return $this->belongsTo('App\ObatModel', 'id_obat', 'id');
    }
}