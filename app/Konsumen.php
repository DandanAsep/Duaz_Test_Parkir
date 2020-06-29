<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    //
    protected $table = 'konsumen';

    //unutk mengatasi masalah mass_asignment
    protected $fillable = ['konsumen', 'jenis_kendaraan','no_polisi','tgl_lahir','jenis_kelamin','no_hp'];
}
