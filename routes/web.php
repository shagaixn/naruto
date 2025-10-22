<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});
        // home
        Route::get('/home', [HomeController::class, 'home'])->name('home');
        Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('books', BookController::class);
Route::resource('setting', SettingController::class);
Route::get('/books', [BookController::class, 'index'])->name('books.index');

    
});
        