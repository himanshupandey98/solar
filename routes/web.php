<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\membercontroller;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\profilecontroller;
use App\Http\Controllers\RegisterController;


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

Route::get('/', [postcontroller::class,'index']);
Route::get('/member', [membercontroller::class,'index']);
Route::get('/member/{id}', [profilecontroller::class,'show']);

Route::post('/comment/{id}', [CommentController::class,'store']);

Route::resource('/login', LoginController::class);
Route::resource('/regis', RegisterController::class);






