<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;


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


Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);


Route::get('/', [HomeController::class, 'home']);
Route::get('portfoliodetails', [HomeController::class, 'portfoliodetails']);
Route::get('innerpage', [HomeController::class, 'innerpage']);

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('post-login', [AuthController::class, 'post_login'])->name('post.login');

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('post-register', [AuthController::class, 'post_register'])->name('post.register');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('forgot', [AuthController::class, 'forgot']);