<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('student', 'students');
Route::post('addStudent', [StudentController::class, 'addStudent']);

Route::get('list-student', [StudentController::class, 'listStudent']);

Route::get('delete/{id}', [StudentController::class, 'deleteStudent']);


Route::get('edit/{id}', [StudentController::class, 'edit']);

Route::put('edit-student/{id}', [StudentController::class, 'editStudent']);
