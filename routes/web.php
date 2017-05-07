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

Route::get('/sobre', 'Site\PaginaController@sobre')->name('site.sobre');

Route::get('/contato', function(){
  return view('site.contato');
})->name('site.contato');

Route::get('/imovel/{id}/{titulo?}', function(){
  return view('site.imovel');
})->name('site.imovel');

//Login - admin system
Route::get('/admin/login', function(){
  return view('admin.login.index');
})->name('admin.login');

//Metodo post para logar usuario
Route::post('admin/login', 'Admin\UsuarioController@login')->name('admin.login');

Route::group(['middleware' => 'auth'], function(){

  Route::get('/admin/login/sair', 'Admin\UsuarioController@sair')->name('admin.sair');

  Route::get('/admin', function(){
    return view('admin.principal.index');
  })->name('admin.principal');
  //Crud usuarios
  Route::get('/admin/usuarios', 'Admin\UsuarioController@index')->name('admin.usuarios');
  Route::get('/admin/usuarios/adicionar',
  'Admin\UsuarioController@adicionar')->name('admin.usuarios.adicionar');
  Route::post('/admin/usuarios/salvar',
  'Admin\UsuarioController@salvar')->name('admin.usuarios.salvar');
  Route::get('/admin/usuarios/editar/{id}',
  'Admin\UsuarioController@editar')->name('admin.usuarios.editar');
  Route::put('/admin/usuarios/atualizar/{id}',
  'Admin\UsuarioController@atualizar')->name('admin.usuarios.atualizar');
  Route::get('/admin/usuarios/deletar/{id}',
  'Admin\UsuarioController@deletar')->name('admin.usuarios.deletar');

});
