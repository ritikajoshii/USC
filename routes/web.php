<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('', function () {
    return view('dashboard');

});

Route::get('/user_management', [HomeController::class, 'user_management'])->name('user_management');
Route::get('/technician', [HomeController::class, 'technician'])->name('technician');
Route::get('/add_technician', [HomeController::class, 'add_technician'])->name('add_technician');
Route::get('/technician_profile', [HomeController::class, 'technician_profile'])->name('technician_profile');
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');



Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';