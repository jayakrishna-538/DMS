<?php

use App\Http\Controllers\facultyController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/overview', function () {
    return view('overview');
});

Route::get('/gate-materials', function () {
    return view('gate-materials');
});

Route::get('/infrastructure', function () {
    return view('infrastructure');
});

Route::get('/objectives', function () {
    return view('objectives');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/faculty/{faculty}', [facultyController::class, 'profileShow']);

Route::get('/students', function () {
    return view('students');
});

Route::get('/faculty', [facultyController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
