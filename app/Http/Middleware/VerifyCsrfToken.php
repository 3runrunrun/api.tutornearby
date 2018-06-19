<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/api/*'
        /*// Course
        '/course/add',

        // Course kategori
        '/course-kategori/add',

        // Kode pendidikan
        '/kode-pendidikan/add',
        
        // Kode aktivitas
        '/kode-aktivitas/add',*/
    ];
}
