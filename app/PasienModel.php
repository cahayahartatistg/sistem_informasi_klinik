<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasienModel extends Model
{
    protected $table = 'pasien_models';
    protected $fillable = ['nama_pasien', 'alamat', 'no_telp', 'keluhan'];
}