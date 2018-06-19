<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';

    protected $fillable = [
        'id_event',
        'nama',
        'id_user',
        'waktu_awal',
        'waktu_akhir',
        'alamat',
        'latitude',
        'longitude',
        'deskripsi',
        'aktif'
    ];

    protected $dates = [
        'waktu_awal',
        'waktu_akhir',
        'created_at',
        'updated_at'
    ];
}
