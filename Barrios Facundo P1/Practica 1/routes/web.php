<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('facundo')->group(function(){
    //Route::get('/signin', [FirstController::class, 'signin']);    // sin param ya no funcionan
    //Route::get('/signup', [FirstController::class, 'signup']);    // sin param ya no funcionan
    Route::get('/signin/{v1}/{v2}/{v3}/{v4}', [FirstController::class, 'signin']);
    Route::get('/signup/{v1}/{v2}/{v3}', [FirstController::class, 'signup']);
});

// parametros => Route::get('/usuarios/{id}', function ($id) { return "Mostrando perfil del usuario: ".$id; }