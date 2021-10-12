<?php
use Illuminate\Support\Facades\Route;

Route::get('/apartment/index',[\App\Http\Controllers\Apartment\ApartmentController::class,"index"]) -> name('apartment.index');

Route::get('/student/index',[\App\Http\Controllers\Controller\StudentController::class,"index"]) -> name('student.index');
Route::get('/student/add',[\App\Http\Controllers\Controller\StudentController::class,"save"]) -> name('student.save');
