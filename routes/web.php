<?php

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

Route::get('/', function(){
  return view('site.home');
})->name('site.home');

Route::get('/sobre', function(){
  return view('site.sobre');
})->name('site.sobre');

Route::get('/contato', function(){
  return view('site.contato');
})->name('site.contato');

Route::get('/imovel/{id}/{titulo?}', function(){
  return view('site.imovel');
})->name('site.imovel');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
