<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Llistar
Route::get('/', [StudentController::class, 'index'])->name('students.index');
// Crear
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
// Mostrar
Route::get('/students/show/{id}', [StudentController::class, 'show'])->name('students.show');
// Editar
Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
// Actualitzar
Route::put('/students/update/{id}', [StudentController::class, 'update'])->name('students.update');
// Guardar
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
// Eliminar
Route::delete('students/destroy/{id}', [StudentController::class, 'destroy'])->name('students.destroy');