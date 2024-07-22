<?php

// Controllers
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HistoryController;

// Middlewares
use App\Http\Middleware\CheckAdminRole;

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

    Route::get('/history', [HistoryController::class, 'index'])->name('history');
    Route::get('/get-history', [HistoryController::class, 'getHistoryData'])->name('getHistoryData');
    Route::post('/history/store', [HistoryController::class, 'store'])->name('history.store');    
    Route::get('/history/{id}', [HistoryController::class, 'showHistory']);

    Route::get('/team', function () {
        return view('dashboard.team.index');
    })->name('team');

    // Messages Route
    Route::get('/messages', [MessageController::class, 'index'])->name('messages');
    Route::post('/get-messages', [MessageController::class, 'getMessages'])->name('getMessages');    
    Route::post('/get-archived-messages', [MessageController::class, 'getArchivedMessages'])->name('getArchivedMessages');
    Route::post('/archive-message', [MessageController::class, 'archiveMessage'])->name('archiveMessage');    
    Route::post('/delete-message', [MessageController::class, 'deleteMessage'])->name('deleteMessage');
    Route::get('/messages/{id}', [MessageController::class, 'showMessage']);

    




});

// Routes that only admins can access
Route::middleware(['auth','isAdmin'])->group(function () {
    // Users Route 
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::post('/get-users', [UserController::class, 'getUsers'])->name('getUsers');    
    Route::post('/delete-user', [UserController::class, 'deleteUser'])->name('deleteUser');
    Route::get('/users/{id}', [UserController::class, 'showUser'])->name('users.show');
    Route::post('/users/update/{id}', [UserController::class, 'updateUser'])->name('users.update');
});


    Route::get('/', [WelcomeController::class, 'index'])->name('welcome');    
    Route::get('/display-history', [WelcomeController::class, 'displayHistoryData'])->name('displayHistoryData');

    Route::post('/message/store', [WelcomeController::class, 'store'])->name('message.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
