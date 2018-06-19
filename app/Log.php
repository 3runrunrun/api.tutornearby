<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'log';

    public function admin()
    {
        return $this->belongsTo('App\Admin'):
    }

    public function user()
    {
        return $this->belongsTo('App\User'):
    }

    public function kodeAktivitas()
    {
        return $this->belongsTo('App\KodeAktivitas'):
    }
}
