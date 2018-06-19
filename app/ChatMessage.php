<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    protected $table = 'chat_message';

    protected $fillable = [
        'id_message',
        'id_chat',
        'id_sender',
        'message',
        'time'
    ];

    protected $dates = [
        'time',
        'created_at',
        'updated_at'
    ];
}
