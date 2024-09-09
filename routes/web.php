<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\MenuController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ReservationController;
use App\Http\Controllers\Frontend\BlogController;
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


Route::get('/',[HomeController::class, 'index'])->name('/');
Route::get('/about',[AboutController::class, 'index'])->name('about');
Route::get('/blog',[BlogController::class, 'index'])->name('blog');
Route::get('/menu',[MenuController::class, 'index'])->name('menu');
Route::get('/contact',[ContactController::class, 'index'])->name('contact');
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::get('/reservation',[ReservationController::class, 'index'])->name('reservation');