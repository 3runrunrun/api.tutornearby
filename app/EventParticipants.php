<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventParticipants extends Model
{
    protected $table = 'event_participants';

    protected $fillable = [
        'id_participant',
        'id_event',
        'id_user'
    ];
}
