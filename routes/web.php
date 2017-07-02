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

Route::get('/sobre',
'Site\PaginaController@sobre')->name('site.sobre');
Route::get('/contato',
'Site\PaginaController@contato')->name('site.contato');
Route::post('/contato/enviar',
'Site\PaginaController@enviarContato')->name('site.contato.enviar');

Route::get('/oficina/{id}/{titulo?}',
'Site\OficinaController@index')->name('site.oficina');
Route::get('/busca','Site\HomeController@busca')->name('site.busca');

//Login - admin system
Route::get('/admin/login', function(){
  return view('admin.login.index');
})->name('admin.login');

//Metodo post para logar usuario
Route::post('admin/login',
'Admin\UsuarioController@login')->name('admin.login');

Route::group(['middleware' => 'auth'], function(){

  Route::get('/admin/login/sair',
  'Admin\UsuarioController@sair')->name('admin.sair');

  Route::get('/admin', function(){
    return view('admin.principal.index');
  })->name('admin.principal');
  //Crud usuarios
  Route::get('/admin/usuarios',
  'Admin\UsuarioController@index')->name('admin.usuarios');
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

  //Papel de usuários
  Route::get('/admin/usuarios/papel/{id}',
  'Admin\UsuarioController@papel')->name('admin.usuarios.papel');
  Route::post('/admin/usuarios/papel/salvar/{id}',
  'Admin\UsuarioController@salvarPapel')->name('admin.usuarios.papel.salvar');
  Route::get('/admin/usuarios/papel/remover/{id}/{papel_id}',
  'Admin\UsuarioController@removerPapel')->name('admin.usuarios.papel.remover');

  //Crud paginas
  Route::get('/admin/paginas',
  'Admin\PaginaController@index')->name('admin.paginas');
  Route::get('/admin/paginas/editar/{id}',
  'Admin\PaginaController@editar')->name('admin.paginas.editar');
  Route::put('/admin/paginas/atualizar/{id}',
  'Admin\PaginaController@atualizar')->name('admin.paginas.atualizar');

  // Crud do tipo de empresa
  Route::get('/admin/tipo',
  'Admin\TipoController@index')->name('admin.tipos');
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
  Route::get('/admin/cidades',
  'Admin\CidadeController@index')->name('admin.cidades');
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

  // Crud dos oficinas
  Route::get('/admin/oficinas',
  'Admin\OficinaController@index')->name('admin.oficinas');
  Route::get('/admin/oficinas/adicionar',
  'Admin\OficinaController@adicionar')->name('admin.oficinas.adicionar');
  Route::post('/admin/oficinas/salvar',
  'Admin\OficinaController@salvar')->name('admin.oficinas.salvar');
  Route::get('/admin/oficinas/editar/{id}',
  'Admin\OficinaController@editar')->name('admin.oficinas.editar');
  Route::put('/admin/oficinas/atualizar/{id}',
  'Admin\OficinaController@atualizar')->name('admin.oficinas.atualizar');
  Route::get('/admin/oficinas/deletar/{id}',
  'Admin\OficinaController@deletar')->name('admin.oficinas.deletar');

  // Crud da galeria
  Route::get('/admin/galerias/{id}',
  'Admin\GaleriaController@index')->name('admin.galerias');
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

  // Crud dos serviços
  Route::get('/admin/servicos/{id}',
  'Admin\ServicoController@index')->name('admin.servicos');
  Route::get('/admin/servicos/adicionar/{id}',
  'Admin\ServicoController@adicionar')->name('admin.servicos.adicionar');
  Route::post('/admin/servicos/salvar/{id}',
  'Admin\ServicoController@salvar')->name('admin.servicos.salvar');
  Route::get('/admin/servicos/editar/{id}',
  'Admin\ServicoController@editar')->name('admin.servicos.editar');
  Route::put('/admin/servicos/atualizar/{id}',
  'Admin\ServicoController@atualizar')->name('admin.servicos.atualizar');
  Route::get('/admin/servicos/deletar/{id}',
  'Admin\ServicoController@deletar')->name('admin.servicos.deletar');

  // Crud do slide
  Route::get('/admin/slides',
  'Admin\SlideController@index')->name('admin.slides');
  Route::get('/admin/slides/adicionar',
  'Admin\SlideController@adicionar')->name('admin.slides.adicionar');
  Route::post('/admin/slides/salvar',
  'Admin\SlideController@salvar')->name('admin.slides.salvar');
  Route::get('/admin/slides/editar/{id}',
  'Admin\SlideController@editar')->name('admin.slides.editar');
  Route::put('/admin/slides/atualizar/{id}',
  'Admin\SlideController@atualizar')->name('admin.slides.atualizar');
  Route::get('/admin/slides/deletar/{id}',
  'Admin\SlideController@deletar')->name('admin.slides.deletar');

  // Crud dos papeis
  Route::get('/admin/papel',
  'Admin\PapelController@index')->name('admin.papel');
  Route::get('/admin/papel/adicionar',
  'Admin\PapelController@adicionar')->name('admin.papel.adicionar');
  Route::post('/admin/papel/salvar',
  'Admin\PapelController@salvar')->name('admin.papel.salvar');
  Route::get('/admin/papel/editar/{id}',
  'Admin\PapelController@editar')->name('admin.papel.editar');
  Route::put('/admin/papel/atualizar/{id}',
  'Admin\PapelController@atualizar')->name('admin.papel.atualizar');
  Route::get('/admin/papel/deletar/{id}',
  'Admin\PapelController@deletar')->name('admin.papel.deletar');

  //Permissao
  Route::get('/admin/papel/permissao/{id}',
  'Admin\PapelController@permissao')->name('admin.papel.permissao');
  Route::post('/admin/papel/permissao/{id}/salvar',
  'Admin\PapelController@salvarPermissao')->name('admin.papel.permissao.salvar');
  Route::get('/admin/papel/permissao/{id}/remover/{id_permissao}',
  'Admin\PapelController@removerPermissao')->name('admin.papel.permissao.remover');

  Route::get('/admin/papel/permissao/{id}',
  'Admin\PapelController@permissao')->name('admin.papel.permissao');
  Route::post('/admin/papel/permissao/salvar/{id}',
  'Admin\PapelController@salvarPermissao')->name('admin.papel.permissao.salvar');
  Route::get('/admin/papel/permissao/remover/{id}/{id_permissao}',
  'Admin\PapelController@removerPermissao')->name('admin.papel.permissao.remover');

});
