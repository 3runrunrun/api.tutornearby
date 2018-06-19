<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    protected $fillable = [
        'id_admin', 'email', 'username', 'password'
    ];

    public function log()
    {
        return $this->hasMany('App\Log');
    }
}
