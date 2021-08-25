<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/product', App\Http\Controllers\ProductController::class);//->middleware('auth');
Route::get('/index', 'App\Http\Controllers\ProductController@index');
Route::get('/create', 'App\Http\Controllers\ProductController@create'); 
Route::post('','App\Http\Controllers\ProductController@store')->name('product.store');  

//Route::get('/gaga','App\Http\Controllers\ProductController@index');