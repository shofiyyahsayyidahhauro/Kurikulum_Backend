<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    public $timestamps = false;
    protected $fillable = ['nama', 'email', 'phone', 'adress'];
}
