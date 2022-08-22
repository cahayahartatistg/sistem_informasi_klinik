<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WilayahModel extends Model
{
    protected $table = 'wilayah_models';
    protected $fillable = ['nama_daerah'];
}