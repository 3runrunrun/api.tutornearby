<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';

    protected $primaryKey = 'id_user';

    public $incrementing = false;
    protected $keyType  = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user',
        'nama',
        'email',
        'token',
        'telp',
        'alamat',
        'latitude',
        'longitude',
        'gender',
        'pendidikan'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'token'
    ];
}
