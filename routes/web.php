<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dash.index');
    })->name('dashboard');

    Route::get('/services', function () {
        return view('dashboard.services.index');
    })->name('services');

    Route::get('/portfolio', function () {
        return view('dashboard.portfolio.index');
    })->name('portfolio');

    Route::get('/history', function () {
        return view('dashboard.history.index');
    })->name('history');

    Route::get('/team', function () {
        return view('dashboard.team.index');
    })->name('team');

    Route::get('/messages', function () {
        return view('dashboard.messages.index');
    })->name('messages');

    Route::get('/users', function () {
        return view('dashboard.users.index');
    })->name('users');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
