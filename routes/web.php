<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('pages.index'))->name('index');
Route::get('/explore', [RecipeController::class, 'index'])->name('explore');
Route::get('/about', fn() => view('pages.about'))->name('about');

Route::middleware('guest')->group(function () {
    Route::view('/login', 'pages.auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::view('/register', 'pages.auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');

    Route::prefix('recipes')->name('recipes.')->group(function () {
        Route::get('create', [RecipeController::class, 'create'])->name('create');
        Route::post('create', [RecipeController::class, 'store'])->name('store');
        Route::get('edit/{recipe}', [RecipeController::class, 'edit'])->name('edit');
        Route::put('edit/{recipe}', [RecipeController::class, 'update'])->name('update');
        Route::delete('{recipe}', [RecipeController::class, 'destroy'])->name('destroy');
    });
});

Route::get('recipes/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');

Route::get('/profile/{user}', [ProfileController::class, 'index'])->name('profile');
Route::post('/message', [MessageController::class, "send"])->name('message');
