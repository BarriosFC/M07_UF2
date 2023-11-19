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
    //Route::get('/signin', [SignController::class, 'signin']);    // sin param ya no funcionan
    //Route::get('/signup', [SignController::class, 'signup']);    // sin param ya no funcionan
    Route::get('/signin/{v1}/{v2}/{v3}/{v4}', [SignController::class, 'signin']);
    Route::get('/signup/{v1}/{v2}/{v3}', [SignController::class, 'signup']);
});