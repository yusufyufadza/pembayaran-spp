<?php

use App\Models\student;
use App\Models\transaction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\classController;
use App\Http\Controllers\officerController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\transactionsController;

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

//class
Route::get('/class', [classController::class, 'show']);
Route::get('/class/detail/{id}', [classController::class, 'detail']);

//Students
Route::get('/student',[studentController::class,'index']);
Route::get('/student/create',[studentController::class,'create']);
Route::post('/student/store',[studentController::class,'store']);
Route::get('/student/edit/{nisn}',[studentController::class,'edit']);
Route::put('/student/update/{nisn}',[studentController::class,'update']);
Route::delete('/student/delete/{nisn}',[studentController::class,'destroy']);
Route::get('/student/detail/{nisn}',[studentController::class,'detail']);

//officer
Route::get('/officer', [officerController::class,'show']);
Route::get('/officer/create',[officerController::class,'create']);
Route::post('/officer/store',[officerController::class,'store']);
Route::get('/officer/edit/{id}',[officerController::class,'edit']);
Route::put('/officer/update/{id}',[officerController::class,'update']);
Route::delete('/officer/delete/{id}',[officerController::class,'destroy']);
Route::get('/officer/detail/{id}',[officerController::class,'detail']);

//transaction
Route::get('/transaction', [transactionsController::class, 'show']);
Route::get('/transaction/create', [transactionsController::class, 'create']);


