<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CentresController;
use App\Http\Controllers\Admin\ProfessoratController;


    Route::middleware(['admin_db'])->group(function(){
        Route::get('/admin', [AdminController::class, 'adminView'])->name('admin');
        Route::post('/login', [AdminController::class, 'login'])->name('login');
        Route::get('/centres', [CentresController::class, 'index'])->name('centres');
        Route::get('/alumnat', [AdminController::class, 'alumnat'])->name('alumnat');
        Route::get('/professorat', [ProfessoratController::class, 'index'])->name('professorat');
        Route::get('/p_create', [ProfessoratController::class, 'create'])->name('p_create');
        Route::get('/p_store', [ProfessoratController::class, 'store'])->name('p_store');
        Route::get('/p_show_by_id', [ProfessoratController::class, 'show'])->name('p_show_by_id');
        Route::get('/p_edit/{id}', [ProfessoratController::class, 'edit'])->name('p_edit');
        Route::post('/p_update', [ProfessoratController::class, 'update'])->name('p_update');
        Route::get('/p_destroy', [ProfessoratController::class, 'destroy'])->name('p_destroy');
    });

    