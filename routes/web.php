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
Route::get('/contato', 'Site\PaginaController@contato')->name('site.contato');
Route::post('/contato/enviar', 'Site\PaginaController@enviarContato')->name('site.contato.enviar');

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

  //Crud paginas
  Route::get('/admin/paginas',
  'Admin\PaginaController@index')->name('admin.paginas');
  Route::get('/admin/paginas/editar/{id}',
  'Admin\PaginaController@editar')->name('admin.paginas.editar');
  Route::put('/admin/paginas/atualizar/{id}',
  'Admin\PaginaController@atualizar')->name('admin.paginas.atualizar');

  // Crud do tipo de empesa
  Route::get('/admin/tipo', 'Admin\TipoController@index')->name('admin.tipos');
  Route::get('/admin/tipos/adicionar',
  'Admin\TipoController@adicionar')->name('admin.tipos.adicionar');
  Route::post('/admin/tipos/salvar',
  'Admin\TipoController@salvar')->name('admin.tipos.salvar');
  Route::get('/admin/tipos/editar/{id}',
  'Admin\TipoController@editar')->name('admin.tipos.editar');
  Route::put('/admin/tipos/atualizar/{id}',
  'Admin\TipoController@atualizar')->name('admin.tipos.atualizar');
  Route::get('/admin/tipos/deletar/{id}',
  'Admin\TipoController@deletar')->name('admin.tipos.deletar');

});
