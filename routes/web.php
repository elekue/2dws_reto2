<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfesorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', [AlumnoController::class, 'index'] )->name('alumnos.index');
// Route::get('alumnos', [AlumnoController::class, 'index'] )->name('alumnos.index');
// Route::get('alumnos/create', [AlumnoController::class, 'create'] )->name('alumnos.create');
// Route::post('alumnos/store', [AlumnoController::class, 'store'] )->name('alumnos.store');
// Route::get('alumnos/edit/{alumno}', [AlumnoController::class, 'edit'] )->name('alumnos.edit');
// Route::put('alumnos/update/{alumno}', [AlumnoController::class, 'update'] )->name('alumnos.update');
// Route::get('alumnos/{alumno}', [AlumnoController::class, 'show'] )->name('alumnos.show');
// Route::get('alumnos/confirm/{alumno}', [AlumnoController::class, 'confirm'] )->name('alumnos.confirm');
// Route::delete('alumnos/{alumno}', [AlumnoController::class, 'destroy'] )->name('alumnos.destroy');

// Route::controller(AlumnoController::class)->group(function () {
//     Route::get('alumnos', 'index')->name('alumnos.index');
//     Route::get('alumnos/create', 'create')->name('alumnos.create');
//     Route::post('alumnos/store', 'store')->name('alumnos.store');
//     Route::get('alumnos/edit/{alumno}', 'edit')->name('alumnos.edit');
//     Route::put('alumnos/update/{alumno}', 'update')->name('alumnos.update');
//     Route::get('alumnos/{alumno}', 'show')->name('alumnos.show');
//     Route::get('alumnos/confirm/{alumno}', 'confirm')->name('alumnos.confirm');
//     Route::delete('alumnos/{alumno}', 'destroy')->name('alumnos.destroy');

// });

// ALUMNOS ***************************
Route::get('alumnos/confirm/{alumno}', [AlumnoController::class, 'confirm'] )->name('alumnos.confirm');
Route::resource('alumnos', AlumnoController::class);

// CURSOS ******************************
Route::get('cursos', [CursoController::class, 'index'] )->name('cursos.index');

// PROFESORES
Route::get('profesores', [ProfesorController::class, 'index'] )->name('profesores.index');
