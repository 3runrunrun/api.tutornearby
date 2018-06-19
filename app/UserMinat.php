<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMinat extends Model
{
    protected $table = 'user_minat';

    protected $fillable = [
        'id_user',
        'id_course'
    ];
}
