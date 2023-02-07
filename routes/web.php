<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KoordinatorController;
use App\Http\Controllers\ProjectController;

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

Route::get('/about', function () {
    return view('welcome');
});

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');
Route::get('/listkoordinator',[KoordinatorController::class, 'index']);
Route::get('/listpimpinan',[KoordinatorController::class, 'index2']);
Route::get('/listprogrammer',[KoordinatorController::class, 'index3']);
Route::get('/listbpa',[KoordinatorController::class, 'index4']);
Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);


// Route CRUD USER
Route::post('/register',[RegisterController::class, 'store']);
Route::get('/edit/{id}',[RegisterController::class, 'edit']);
Route::post('/update/{id}',[RegisterController::class, 'update']);
Route::get('/delete/{id}',[RegisterController::class, 'destroy']);


// Route CRUD PROJECT
Route::post('/create',[ProjectController::class, 'store']);

// Route CRUD PROGRAMMER
Route::post('/detailverifikasi/programmer/{id}',[ProjectController::class, 'addprog']);
Route::get('/detailverifikasi/programmer/$id/{id}',[ProjectController::class, 'destroy']);

// Route CRUD FITUR
Route::post('/detailverifikasi/fitur/{id}',[ProjectController::class, 'addfit']);
Route::get('/detailverifikasi/fitur/$id/{id}',[ProjectController::class, 'destroyfit']);
Route::get('/projectpage',[KoordinatorController::class, 'viewproject']);
Route::get('/detailverifikasi/{id}',[KoordinatorController::class, 'show']);
