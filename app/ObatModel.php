<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObatModel extends Model
{
    protected $table = 'obat_models';
    protected $fillable = ['nama_obat', 'jenis_obat', 'stok_obat', 'harga'];
}