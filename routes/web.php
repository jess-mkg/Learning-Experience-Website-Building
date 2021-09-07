<?php

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
    return view('welcome');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/checklist', function () {
    return view('start');
});


Auth::routes();

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');

