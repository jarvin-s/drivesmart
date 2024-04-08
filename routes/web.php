<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LessonBlockController;
use App\Http\Controllers\StripCardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


// Protected routes
// Route::middleware('auth')->group(function () {
// Home page route

// Instructor routes
Route::group(['prefix' => 'instructors'], function () {
    Route::get('/', LessonBlockController::class . '@index')->name('instructors.index');
    Route::get('/stripcards', StripCardController::class . '@create')->name('stripcards.create');
    Route::post('/stripcards', StripCardController::class . '@store')->name('stripcards.store');
});
// });

// Login view
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/logout', [AuthController::class, 'logOut'])->name('logout');

// Login function (POST)
Route::prefix('api')->group(function () {
    Route::post('/login', [AuthController::class, 'checkLogin'])->name('checkLogin');
});