<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'chat';

    protected $fillable = [
        'id_chat',
        'id_user_1',
        'id_user_2'
    ];
}
