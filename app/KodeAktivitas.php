<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KodeAktivitas extends Model
{
    protected $table = 'kode_aktivitas';

    protected $fillable = [
        'nama'
    ];
}
