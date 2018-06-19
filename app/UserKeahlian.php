<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserKeahlian extends Model
{
    protected $table = 'user_keahlian';

    protected $fillable = [
        'id_user',
        'id_course'
    ];
}
