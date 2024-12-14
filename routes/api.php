<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AgamaController;
use app\Http\Controllers\KesatuanController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\TugasController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/animals', [AnimalController::class, 'index']);

Route::get('/staff',[StaffController::class, 'apiStaff']);
Route::get('/staff/{id}',[StaffController::class, 'apiStaffDetail']);   

Route::get('/agama', [AgamaController::class, 'index']);
Route::get('/kesatuan', [KesatuanController::class, 'index']);

// personal
Route::get('/personal', [PersonalController::class, 'index']);
Route::get('/personal/{id}', [PersonalController::class, 'show']);
// Tugas
Route::get('/tugas', [TugasController::class, 'index']);

