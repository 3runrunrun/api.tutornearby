<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Kode Aktivitas
Route::post('/api/kode-aktivitas/add', 'Api\KodeAktivitasController@store');

/**
 * Profile
 */
// Kode Pendidikan
Route::post('/api/kode-pendidikan/add', 'Api\Profile\KodePendidikanController@store');

// User
Route::get('/api/user', 'Api\Profile\UserController@index');
Route::post('/api/user/add', 'Api\Profile\UserController@store');

// User Keahlian
Route::post('/api/user-keahlian/add', 'Api\Profile\UserKeahlianController@store');

// User Minat
Route::post('/api/user-minat/add', 'Api\Profile\UserMinatController@store');

/**
 * Enrollment
 */

// Course
Route::post('/api/course/add', 'Api\Enrollment\CourseController@store');

// Course Kategori
Route::post('/api/course-kategori/add', 'Api\Enrollment\CourseKategoriController@store');

// Event
Route::post('/api/event/add', 'Api\Enrollment\EventController@store');

// Event Participants
Route::post('/api/event-participants/add', 'Api\Enrollment\EventParticipantsController@store');

// User Review

/**
 * Chat
 */
// Chat
Route::post('/api/chat/add', 'Api\Chat\ChatController@store');

// Chat Message
Route::post('/api/chat-message/add', 'Api\Chat\ChatMessageController@store');