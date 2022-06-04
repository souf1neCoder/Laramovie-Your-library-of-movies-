<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
// /////////////////////////////////////////////////////////////////////////
// /////////////////////////////////////////////////////////////////////////
Route::get('/register',[UserController::class,'create'])->middleware('guest')->name('register');
Route::post('/users',[UserController::class,'store'])->name('post_user');
Route::get('/login',[UserController::class,'logged'])->middleware('guest')->name('login');
Route::post('/users/login',[UserController::class,'logMe'])->name('logMe');
Route::view('/about','about')->name('about');


// MIDDLEWARE AUTH
Route::group(['middleware'=>['auth']],function(){
    Route::controller(MovieController::class)->group(function () {
        Route::get('/', [MovieController::class,'index'])->name('home');
        // 
        Route::get('/movies/{movie}/edit','edit')->where('movie', '[0-9]+')->name('edit');
        // 
        Route::get('/movies/add','create')->name('add');
        // 
        Route::put('/movies/{movie}','update')->where('movie', '[0-9]+')->name('update');
        // 
        Route::post('/movies','store')->name('store');
        // 
        Route::delete('/movies/{movie}','destroy')->where('movie', '[0-9]+')->name('delete');
        Route::get('/movies/search/','search')->name('search');
    });
    // 
    Route::controller(UserController::class)->group(function(){
        Route::get('/logout','logout')->name('logout');
    });
});