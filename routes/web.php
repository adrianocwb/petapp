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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', 'PaginaController@contato');
Route::get('/admin', 'PaginaController@admin');

Route::get('/admin/funcionarios', 'FuncionarioController@listar');
Route::get('/admin/funcionarios/novo', 'FuncionarioController@novo');
Route::get('/admin/funcionarios/editar/{id}', 'FuncionarioController@editar');
Route::get('/admin/funcionarios/deletar/{id}', 'FuncionarioController@deletar');

Route::post('/admin/funcionarios/cadastro', 'FuncionarioController@cadastrar');
Route::post('/admin/funcionarios/salvar', 'FuncionarioController@salvar');

Route::get('/admin/servicos', 'ServicosController@listar');
Route::get('/admin/servicos/novo', 'ServicosController@novo');
Route::get('/admin/servicos/editar/{id}', 'ServicosController@editar');
Route::get('/admin/servicos/deletar/{id}', 'ServicosController@deletar');

Route::post('/admin/servicos/cadastro', 'ServicosController@cadastrar');
Route::post('/admin/servicos/salvar', 'ServicosController@salvar');