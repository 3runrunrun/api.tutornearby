<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseKategori extends Model
{
    protected $table = 'course_kategori';

    protected $primaryKey = 'id_kategori';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_kategori',
        'nama'
    ];

    public function course()
    {
        return $this->hasMany('App\Course');
    }
}
