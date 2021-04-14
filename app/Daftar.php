<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $table = "daftar";
    protected $fillable = [
        'nama',
        'jk',
        'alamat',
        'agama',
        'asal_sekolah',
        'minat_jurusan',
        ];
}
