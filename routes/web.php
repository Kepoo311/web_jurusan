<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\managePost;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/post/{post:judul}', [DetailController::class, 'show']);


Route::controller(dashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->middleware('auth');
    Route::get('/dashboard/post/artikel', 'artikel')->middleware('auth');
    Route::get('/dashboard/post/banner', 'banner')->middleware('auth');
    Route::get('/dashboard/post/prestasi', 'prestasi')->middleware('auth');
});

Route::controller(managePost::class)->group(function () {
    Route::get('/dashboard/manage/artikel', 'manageArtikel')->middleware('auth');
    Route::get('/dashboard/manage/banner', 'manageBanner')->middleware('auth');
    Route::get('/dashboard/manage/prestasi', 'managePrestasi')->middleware('auth');

    Route::delete('/dashboard/delete/artikel/{id}','deleteArtikel')->middleware('auth');
    Route::delete('/dashboard/delete/banner/{name}/{id}','deleteBanner')->middleware('auth');
    Route::delete('/dashboard/delete/prestasi/{id}','deletePrestasi')->middleware('auth');
});


Route::controller(PostController::class)->group(function () {
    Route::post('/dashboard/post/prestasi','storePrestasi')->middleware('auth');
    Route::post('/dashboard/posting','storedata')->middleware('auth');
    Route::post('/dashboard/post/banner','Storebanner')->middleware('auth');
});

Route::controller(loginController::class)->group(function (){
    Route::get('/login','index')->middleware('guest')->name('login');
    Route::get('/logout','logout');
    Route::post('/login','login');
    
    Route::get('/register','regist');
    Route::post('/register','register');
});

