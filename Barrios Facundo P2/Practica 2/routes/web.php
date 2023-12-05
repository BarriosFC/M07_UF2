<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('facundo')->group(function(){
    Route::get('/signin', [SignController::class, 'signin'])->name('signin');
    Route::get('/signup', [SignController::class, 'signup'])->name('signup');
});