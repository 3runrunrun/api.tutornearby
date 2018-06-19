<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';
    
    protected $primaryKey = 'id_course';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_course',
        'id_kategori',
        'nama'
    ];

    public function courseKategori()
    {
        return $this->belongsTo('App\CourseKategori');
    }
}
