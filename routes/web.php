<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index']);

Route::get('/post/{post:judul}',[DetailController::class,'show']);

Route::get('/dashboard',[dashboardController::class,'index']);
Route::get('/dashboard/post/artikel',[dashboardController::class,'artikel']);
Route::get('/dashboard/post/banner',[DashboardController::class,'banner']);
Route::get('/dashboard/post/prestasi',[DashboardController::class,'prestasi']);

Route::post('/dashboard/posting',[PostController::class,'storedata']);

Route::get('/login',[loginController::class,'index']);
Route::get('/logout',[loginController::class,'logout']);
Route::post('/login',[loginController::class,'login']);

Route::get('/register',[loginController::class,'regist']);
Route::post('/register',[loginController::class,'register']);