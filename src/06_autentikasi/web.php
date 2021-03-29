<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\PageController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ArticleController;
//use App\Http\Controllers\ProductController;
//use App\Http\Controllers\ContactController;
//use App\Http\Controllers\NewsController;
//use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProgramController;
Use Illuminate\Support\Facades\View;



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


 //Route::prefix('/category') -> group(function(){
   //  Route::get('/marbel-edu-games', [ProductController::class, 'MarbelGame']);
     //Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'KidsGame']);
     //Route::get('/riri-story-books', [ProductController::class, 'StoryBooks']);
     //Route::get('/kolak-kids-songs', [ProductController::class, 'KidSong']);
 //});
//Route::get('/news', [NewsController::class, 'News']);
     //Route::get('/News/{parameter}', function ($parameter) {
       //  return redirect('https://www.educastudio.com/news'.$parameter);
     //});
 Route::prefix('/program') -> group(function(){
    Route::get('/karir', [ProgramController::class, 'karir']);
   Route::get('/magang', [ProgramController::class, 'magang']);
   Route::get('/kunjungan', [ProgramController::class, 'kunjungan']);
});
 //Route::get('contact', function () {
   // return redirect('https://www.educastudio.com/contact-us');
//});
 //Route::get('/hello', function () {
   //  return view('coba.hello', ['name' => 'Dikky']); 
 //});


Route::get('/hello', function () {
  return view('coba.hello', ['name' => 'Dikky']);
  });
  
Route::get('/home', function () {
  return view('home');
  });
Route::prefix('/product') -> group(function(){
  Route::get('/product1', [ProductController::class, 'product1']);
  Route::get('/hello1', [ProductController::class, 'hello1']);
});
Route::get('/news/{id}', function ($id) {
  return view('news').$id;
});
Route::prefix('/program') -> group(function(){
  Route::get('/program1', [ProgramController::class, 'program1']);
});
Route::get('/about', function () {
  return view('about-us');
});
Route::resource('contact', ContactController::class)->only([
'index'
]);

    

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
