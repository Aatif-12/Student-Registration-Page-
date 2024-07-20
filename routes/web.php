<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('Students', 'students');
Route::post('addStudent', [StudentController::class, 'addStudent']);
