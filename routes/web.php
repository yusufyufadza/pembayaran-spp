<?php

use App\Http\Controllers\studentController;
use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('contents.dashboard.index');
});

Route::get('/login', function () {
    return view('contents.auth.login');
});

Route::post('/loginPost',[authController::class,'login']);

Route::get('/student',[studentController::class,'index']);
Route::get('/student/create',[studentController::class,'create']);
Route::post('/student/store',[studentController::class,'store']);
Route::get('/student/edit/{nisn}',[studentController::class,'edit']);
Route::put('/student/update/{nisn}',[studentController::class,'update']);
Route::delete('/student/delete/{nisn}',[studentController::class,'destroy']);
Route::get('/student/detail/{nisn}',[studentController::class,'detail']);




