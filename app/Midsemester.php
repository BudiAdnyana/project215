<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Midsemester extends Model
{
    //
    protected $primaryKey = 'id_215';
    protected $fillable = ['kolom_nim', 'kolom_nama', 'kolom_umur', 'kolom_alamat'];
}
