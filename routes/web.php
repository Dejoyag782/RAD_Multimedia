<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;


Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard.dash.index');
    })->name('dashboard');

    Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard');


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

    // Route::get('/messages', function () {
    //     return view('dashboard.messages.index');
    // })->name('messages');

    // Route::get('/users', function () {
    //     return view('dashboard.users.index');
    // })->name('users');

    // Messages Route
    Route::get('/messages', [MessageController::class, 'index'])->name('messages');
    Route::post('/get-messages', [MessageController::class, 'getMessages'])->name('getMessages');    
    Route::post('/get-archived-messages', [MessageController::class, 'getArchivedMessages'])->name('getArchivedMessages');
    Route::post('/archive-message', [MessageController::class, 'archiveMessage'])->name('archiveMessage');    
    Route::post('/delete-message', [MessageController::class, 'deleteMessage'])->name('deleteMessage');
    Route::get('/messages/{id}', [MessageController::class, 'showMessage']);

    // Users Route 
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::post('/get-users', [UserController::class, 'getUsers'])->name('getUsers');    
    Route::post('/delete-user', [UserController::class, 'deleteUser'])->name('deleteUser');
    Route::get('/users/{id}', [UserController::class, 'showUser']);


});


    Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
    Route::post('/message/store', [WelcomeController::class, 'store'])->name('message.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
