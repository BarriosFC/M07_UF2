<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CentresController;
use App\Http\Controllers\Admin\AlumnatController;//ruta de acceso al controlado de los alumnos 
use App\Http\Controllers\Admin\ProfessoratController;


    Route::middleware(['admin_db'])->group(function(){
        Route::get('/admin', [AdminController::class, 'adminView'])->name('admin');
        Route::post('/login', [AdminController::class, 'login'])->name('login');
        Route::get('/centres', [CentresController::class, 'index'])->name('centres');
        Route::get('/alumnat', [AlumnatController::class, 'index'])->name('indexAlumnat');//Listar todos los alumnos
        Route::get('/a_create', [AlumnatController::class, 'create'])->name('createAlumnat');//Formulario para crear un nuevo alumno
        Route::post('/a_store', [AlumnatController::class, 'store'])->name('storeAlumnat');//Almacenar un nuevo alumno en la base de datos
        Route::get('/a_show', [AlumnatController::class, 'show'])->name('showAlumnat');//Mostrar detalles de un alumno específico
        Route::get('/a_edit/{id}', [AlumnatController::class, 'edit'])->name('editAlumnat');//Formulario para editar un alumno específico
        Route::get('/a_update/{id}', [AlumnatController::class, 'update'])->name('updateAlumnat');//Actualizar un alumno en la base de datos
        Route::delete('/a_destroy/{alumnat}', [AlumnatController::class, 'destroy'])->name('deleteAlumnat');//Eliminar un alumno de BBDD
        Route::get('/professorat', [ProfessoratController::class, 'index'])->name('professorat');
        Route::get('/p_create', [ProfessoratController::class, 'create'])->name('p_create');
        Route::get('/p_store', [ProfessoratController::class, 'store'])->name('p_store');
        Route::get('/p_show_by_id', [ProfessoratController::class, 'show'])->name('p_show_by_id');
        Route::get('/p_edit/{id}', [ProfessoratController::class, 'edit'])->name('p_edit');
        Route::get('/p_update/{id}', [ProfessoratController::class, 'update'])->name('p_update');
        Route::get('/p_destroy/{id}', [ProfessoratController::class, 'destroy'])->name('p_destroy');
    });

    