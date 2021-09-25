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

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/start-checklist', function () {
    return view('start');
});

Route::view("/page", "parent");
Auth::routes();

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');

Auth::routes();

Route::get('/checklist', [App\Http\Controllers\HomeController::class, 'checklist'])->name('checklist');

Auth::routes();

Route::get('/results', [App\Http\Controllers\HomeController::class, 'results'])->name('results');

Auth::routes();

Route::get('/settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('settings');

Auth::routes();
Route::view('/checklist-teachers', 'teachers');
Route::post('submit', [App\Http\Controllers\TChecklistController::class, 'submitteacherform']);

Auth::routes();
Route::view('/checklist-parents', 'parents');
Route::post('submit', [App\Http\Controllers\TChecklistController::class, 'submitparentform']);
