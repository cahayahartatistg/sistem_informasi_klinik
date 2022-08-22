<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['nama', 'email', 'gender', 'password', 'role'];
}