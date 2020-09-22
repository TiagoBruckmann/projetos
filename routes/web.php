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

//rota para a home do site
Route::get('/', ['as' => 'site.home', 'uses'=> 'Site\HomeController@index']
    );

//rota para o caminho do projeto incluindo inserção/atualização e delete dos dados
Route::get('/admin/projetos',['as'=>'admin.projetos','uses'=>'Admin\ProjetosController@index']);
Route::get('/admin/projetos/adicionar',['as'=>'admin.projetos.adicionar','uses'=>'Admin\ProjetosController@adicionar']);
Route::get('/admin/projetos/salvar',['as'=>'admin.projetos.salvar','uses'=>'Admin\ProjetosController@salvar']);
Route::get('/admin/projetos/editar\{id}',['as'=>'admin.projetos.editar','uses'=>'Admin\ProjetosController@editar']);
Route::get('/admin/projetos/atualizar\{id}',['as'=>'admin.projetos.atualizar','uses'=>'Admin\ProjetosController@atualizar']);
Route::get('/admin/projetos/deletar/{id}',['as'=>'admin.projetos.deletar','uses'=>'Admin\ProjetosController@deletar']);

//rota para o caminho do cliente incluindo inserção/atualização e delete dos dados
Route::get('/admin/clientes',['as'=>'admin.clientes','uses'=>'Admin\ClientesController@index']);
Route::get('/admin/clientes/adicionar',['as'=>'admin.clientes.adicionar','uses'=>'Admin\ClientesController@adicionar']);
Route::get('/admin/clientes/salvar',['as'=>'admin.clientes.salvar','uses'=>'Admin\ClientesController@salvar']);
Route::get('/admin/clientes/editar\{id}',['as'=>'admin.clientes.editar','uses'=>'Admin\ClientesController@editar']);
Route::get('/admin/clientes/atualizar\{id}',['as'=>'admin.clientes.atualizar','uses'=>'Admin\ClientesController@atualizar']);
Route::get('/admin/clientes/deletar/{id}',['as'=>'admin.clientes.deletar','uses'=>'Admin\ClientesController@deletar']);

