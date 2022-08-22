<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeranjangModel extends Model
{
    protected $table = 'keranjangs';
    protected $fillable = ['id_obat', 'jumlah'];
}
