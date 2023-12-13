<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CentresController;


    Route::middleware(['admin_db'])->group(function(){
        Route::get('/admin', [AdminController::class, 'adminView'])->name('admin');
        Route::post('/login', [AdminController::class, 'login'])->name('login');
        Route::get('/centres', [CentresController::class, 'index'])->name('centres');
        Route::get('/alumnat', [AdminController::class, 'alumnat'])->name('alumnat');
        Route::get('/professorat', [AdminController::class, 'professorat'])->name('professorat');
    });

    