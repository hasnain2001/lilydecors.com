<?php
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/employee.php';
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth','role:user'])->group(function () {
        Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');
    });

    Route::controller(ProfileController::class)->name('profile')->middleware('auth')->group(function () {
    Route::get('/profile', 'edit')->name('profile.edit');
    Route::patch('/profile', 'update')->name('profile.update');
    Route::delete('/profile', 'destroy')->name('profile.destroy');
    });



