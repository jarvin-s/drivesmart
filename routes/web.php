<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LessonBlockController;
use App\Http\Controllers\StripCardController;
use Illuminate\Support\Facades\Route;

// Protected routes
Route::middleware(['auth'])->group(function () {
    // Home page route
    Route::get('/', function () {
        return view('home');
    })->name('home');

    // Contact page route
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    // ! Role check, can't find 'rol'
    Route::middleware(['role:eigenaar,medewerker'])->group(function () {
        // Instructor routes
        Route::group(['prefix' => 'instructors'], function () {
            Route::get('/', LessonBlockController::class . '@index')->name('instructors.index');
            Route::get('/stripcards/create', StripCardController::class . '@create')->name('stripcards.create');
            Route::get('/stripcards', StripCardController::class . '@index')->name('stripcards.index');
            Route::post('/stripcards', StripCardController::class . '@store')->name('stripcards.store');
            Route::get('/{lessonblock}/edit', LessonBlockController::class . '@edit')->name('lessonblocks.edit');
            Route::put('/{lessonblock}', LessonBlockController::class . '@update')->name('lessonblocks.update');
        });
    });
});

// Login view
Route::get('/login', [AuthController::class, 'index'])->name('login');
// TODO: if user is logged in, redirect back to application
Route::post('/logout', [AuthController::class, 'logOut'])->name('logout');

// Login function (POST)
Route::prefix('api')->group(function () {
    Route::post('/login', [AuthController::class, 'checkLogin'])->name('checkLogin');
});