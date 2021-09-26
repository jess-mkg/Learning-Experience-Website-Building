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

Route::get('/checklist', [App\Http\Controllers\HomeController::class, 'checklist'])->name('checklist');

Route::get('/results', [App\Http\Controllers\HomeController::class, 'results'])->name('results');

Route::get('/settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('settings');

Route::get('/checklist-teachers', [App\Http\Controllers\HomeController::class, 'teachers'])->name('teachers');

Route::get('/checklist-parents', [App\Http\Controllers\HomeController::class, 'parents'])->name('parents');

Route::post('/submit/parentform', [App\Http\Controllers\TChecklistController::class, 'submitparentform']);

Route::post('/submit/teacherform', [App\Http\Controllers\TChecklistController::class, 'submitteacherform']);
