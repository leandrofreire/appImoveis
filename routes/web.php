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

Route::get('/','Site\HomeController@index')->name('site.home');

Route::get('/sobre', 'Site\PaginaController@sobre')->name('site.sobre');
Route::get('/contato', 'Site\PaginaController@contato')->name('site.contato');
Route::post('/contato/enviar', 'Site\PaginaController@enviarContato')->name('site.contato.enviar');

Route::get('/imovel/{id}/{titulo?}','Site\ImovelController@index')->name('site.imovel');

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

  // Crud do tipo de empresa
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

  // Crud das cidades
  Route::get('/admin/cidades', 'Admin\CidadeController@index')->name('admin.cidades');
  Route::get('/admin/cidades/adicionar',
  'Admin\CidadeController@adicionar')->name('admin.cidades.adicionar');
  Route::post('/admin/cidades/salvar',
  'Admin\CidadeController@salvar')->name('admin.cidades.salvar');
  Route::get('/admin/cidades/editar/{id}',
  'Admin\CidadeController@editar')->name('admin.cidades.editar');
  Route::put('/admin/cidades/atualizar/{id}',
  'Admin\CidadeController@atualizar')->name('admin.cidades.atualizar');
  Route::get('/admin/cidades/deletar/{id}',
  'Admin\CidadeController@deletar')->name('admin.cidades.deletar');

  // Crud dos imoveis
  Route::get('/admin/imoveis', 'Admin\ImovelController@index')->name('admin.imoveis');
  Route::get('/admin/imoveis/adicionar',
  'Admin\ImovelController@adicionar')->name('admin.imoveis.adicionar');
  Route::post('/admin/imoveis/salvar',
  'Admin\ImovelController@salvar')->name('admin.imoveis.salvar');
  Route::get('/admin/imoveis/editar/{id}',
  'Admin\ImovelController@editar')->name('admin.imoveis.editar');
  Route::put('/admin/imoveis/atualizar/{id}',
  'Admin\ImovelController@atualizar')->name('admin.imoveis.atualizar');
  Route::get('/admin/imoveis/deletar/{id}',
  'Admin\ImovelController@deletar')->name('admin.imoveis.deletar');

  // Crud da galeria
  Route::get('/admin/galerias/{id}', 'Admin\GaleriaController@index')->name('admin.galerias');
  Route::get('/admin/galerias/adicionar/{id}',
  'Admin\GaleriaController@adicionar')->name('admin.galerias.adicionar');
  Route::post('/admin/galerias/salvar/{id}',
  'Admin\GaleriaController@salvar')->name('admin.galerias.salvar');
  Route::get('/admin/galerias/editar/{id}',
  'Admin\GaleriaController@editar')->name('admin.galerias.editar');
  Route::put('/admin/galerias/atualizar/{id}',
  'Admin\GaleriaController@atualizar')->name('admin.galerias.atualizar');
  Route::get('/admin/galerias/deletar/{id}',
  'Admin\GaleriaController@deletar')->name('admin.galerias.deletar');

});
