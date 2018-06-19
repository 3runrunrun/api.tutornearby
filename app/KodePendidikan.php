<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KodePendidikan extends Model
{
    protected $table = 'kode_pendidikan';

    protected $fillable = [
        'nama'
    ];
}
