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
})->name('contacts');

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

Route::post('/form-to-email', function () {
    if(isset($_POST['form_submit'])) {
        $to = "jessie.mcgrahan@gmail.com"; // this is your Email address
        $from = $_POST['email'];    // this is the sender's Email address
        $name = $_POST['name'];
        $subject = "Form submission";
        $subject2 = "Copy of your form submission";
        $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
        $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];
        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
        // You can also use header('Location: thank_you.php'); to redirect to another page.
        }
        return back()->route('contacts');
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

