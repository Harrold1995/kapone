<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('login'); // Named for consistency

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::view('/job-listing', 'job-listing')->name('job-listing');
    Route::view('/time-logs', 'time-logs')->name('time-logs');
    Route::view('/time-off-requests', 'time-off-requests')->name('time-off-requests');
    Route::view('/certifications', 'certifications')->name('certifications');
    Route::view('/overtime-requests', 'overtime-requests')->name('overtime-requests');
    Route::view('/knowledge-base', 'knowledge-base')->name('knowledge-base');
    Route::view('/reminders', 'reminders')->name('reminders');
    Route::view('/referrals', 'referrals')->name('referrals');
    Route::view('/tickets', 'tickets')->name('tickets');
    Route::view('/email-signature', 'email-signature')->name('email-signature');
});

require __DIR__.'/auth.php';