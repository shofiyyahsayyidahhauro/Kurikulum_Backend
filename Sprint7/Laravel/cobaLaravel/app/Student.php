<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nama', 'nrp', 'email', 'jurusan']; //fillable adalah yang bisa diakses,,sedangkan guarded yang ngga boleh diakses.
}
