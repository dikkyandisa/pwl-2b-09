<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\kelompok5Controller;
use Illuminate\Http\Request;
Route::resource('kelompok5', kelompok5Controller::class);

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

Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/about', function () {
    return view('layouts.about');
});
Route::get('/index', function () {
    return view('layouts.index');
});
Route::get('/contact', function () {
    return view('layouts.contact');
});
Route::get('/portfolio', function () {
    return view('layouts.portfolio');
});
Route::get('/product', function () {
    return view('layouts.product');
});
Route::get('/program', function () {
    return view('layouts.program');
});
//home
Route::get('/isihome', [HomeController::class, 'home']);
//product
Route::get('/isiproduk1', [ProductController::class, 'laptop']);
Route::get('/isiproduk2', [ProductController::class, 'phone']);
Route::get('/isiproduk3', [ProductController::class, 'aksesoris']);
//News
Route::get('/isinews1', [NewsController::class, 'politik']);
Route::get('/isinews2', [NewsController::class, 'bencana']);
Route::get('/isinews3', [NewsController::class, 'kriminal']);
//Program
Route::get('/isiprogram1', [ProgramController::class, 'kreatif']);
Route::get('/isiprogram2', [ProgramController::class, 'pendidikan']);
Route::get('/isiprogram3', [ProgramController::class, 'hiburan']);
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
