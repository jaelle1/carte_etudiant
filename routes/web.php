<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\pdfController;

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

Route::get('/')->name('connect')->middleware('auth')->uses(HomeController::class . '@index');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::resource('Student', StudentController::class)->middleware('auth');


Route::resource('User', UserController::class)->middleware('auth');
Route::get('/pdf/{id}', [pdfController::class, 'pdfView'])->name('pdfView');
Route::get('/pdf/convert', [pdfController::class, 'pdfConvert'])->name('pdfConvert');

Auth::routes();
