<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/save-event-registration', [App\Http\Controllers\EventRegistrationController::class, 'saveEventRegistration'])->name('save.EventRegistration');
// Route::get('send/mail', [SendMailController::class, 'sendMailWithAttachment']);

Route::get('/test-theme', function () {
    return view('admin.dashboard');
})->middleware('auth'); 

Route::get('/event-view', [App\Http\Controllers\HomeController::class, 'eventView'])->name('eventView');

Route::get('/event-registration', [App\Http\Controllers\EventRegistrationController::class, 'eventRegistration'])->name('eventRegistration');
