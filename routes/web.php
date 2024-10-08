<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LessonBlockController;
use App\Http\Controllers\StripCardController;
use Illuminate\Support\Facades\Route;

// Protected routes
Route::middleware(['auth'])->group(function () {
    // Home page route
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    // Contact page route
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::post('/contact', ContactController::class . '@store')->name('contact.store');

    // Instructor routes
    Route::middleware(['rol:medewerker'])->group(function () {
        Route::group(['prefix' => 'instructors'], function () {
            Route::get('/', LessonBlockController::class . '@index')->name('instructors.index');
            Route::get('/stripcards/create', StripCardController::class . '@create')->name('stripcards.create');
            Route::get('/stripcards', StripCardController::class . '@index')->name('stripcards.index');
            Route::post('/stripcards', StripCardController::class . '@store')->name('stripcards.store');
            Route::get('/{lessonblock}/edit', LessonBlockController::class . '@edit')->name('lessonblocks.edit');
            Route::put('/{lessonblock}/update', LessonBlockController::class . '@update')->name('lessonblocks.update');
            Route::put('/{lessonblock}/endLesson', LessonBlockController::class . '@endLesson')->name('lessonblocks.endLesson');
        });
    });
});

// Login view
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/logout', [AuthController::class, 'logOut'])->name('logout');

// Login function (POST)
Route::prefix('api')->group(function () {
    Route::post('/login', [AuthController::class, 'checkLogin'])->name('checkLogin');
});