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

Route::get('/', function () {
  $arr = [13, 22, 35, 46, 52, 61];
  return view('welcome', ['arr' => $arr]);
});

Route::get('/contact', function () {
  return view('contact');
});

Route::get('/products', function () {

  $search = request('search');
  return view('products', ['search' => $search]);
});

Route::get('/products_teste/{id?}', function ($id = null) {
  return view('product', ['id' => $id]);
});
