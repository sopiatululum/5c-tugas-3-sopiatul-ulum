<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DashboardController;

//buat data masing2 10

Route::get('/', function(){
    return view('welcome',);
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dosen/create', [DosenController::class, 'create']);


Route::get('/dosen', [DosenController::class, 'index']);
Route::post('/dosenInsert', [DosenController::class, 'insert']);
Route::get('dosendelete/{id}', [DosenController::class, 'delete']);
Route::post('/dosenUpdate/{id}', [DosenController::class, 'update']);
Route::get('/dosenEdit/{id}', [DosenController::class, 'edit']);
Route::get('/create', [DosenController::class,'create']);


Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswaInsert', [MahasiswaController::class, 'insert']);
Route::get('/mahasiswadelete/{id}', [MahasiswaController::class, 'delete']);
Route::post('/mahasiswaUpdate/{id}', [MahasiswaController::class, 'update']);
Route::get('/mahasiswaEdit/{id}', [MahasiswaController::class, 'edit']);
Route::get('/mahasiswaCreate', [MahasiswaController::class,'create']);



Route::get('/matkul', [MatkulController::class, 'index']);
Route::post('/matkulInsert', [MatkulController::class, 'insert']);
Route::get('/matkuldelete/{id}', [MatkulController::class, 'delete']);
Route::post('/matkulUpdate/{id}', [MatkulController::class, 'update']);
Route::get('/matkulEdit/{id}', [MatkulController::class, 'edit']);
Route::get('/matkulCreate', [MatkulController::class, 'create']);
