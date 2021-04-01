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
    return view('welcome');
})->name('menu');

Route::get('/cadastro', 'App\Http\Controllers\CadastroController@cadastro')->name('formCadastro');
Route::post('/cadastroCompleto', 'App\Http\Controllers\CadastroController@completo')->name('cadastropronto');
Route::get('/listarUsuarios', 'App\Http\Controllers\CadastroController@listusuarios')->name('list');
Route::post('/salvar', 'App\Http\Controllers\CadastroController@salva')->name('salvarUsuario');
Route::get('/usuario/editar/{id}', 'App\Http\Controllers\CadastroController@editarUsuario')->name('editusuario');
Route::post('/salvar_edicao', 'App\Http\Controllers\CadastroController@salvaedicao')->name('salvaredit');
Route::get('/usuario/excluir/{id}', 'App\Http\Controllers\CadastroController@excluirUsuario')->name('excluirusuario');

//endereço

Route::get('/cadastro-endereco', 'App\Http\Controllers\CadastroController@cadastroendereco')->name('cadastroendereco');
Route::post('/cadastro-completo', 'App\Http\Controllers\CadastroController@cadastrocompleto')->name('cadastrocompletoend');
Route::get('/listar-enderecos', 'App\Http\Controllers\CadastroController@listarenderecos')->name('listarenderecos');
Route::post('/salvar-endereco', 'App\Http\Controllers\CadastroController@salvarendereco')->name('salvarendereco');
Route::get('/endereco/editar/{id}', 'App\Http\Controllers\CadastroController@editarendereco')->name('editendereco');
Route::post('/salvar_edicao_endereco', 'App\Http\Controllers\CadastroController@salvaedicaoend')->name('salvareditend');
Route::get('/endereco/excluir/{id}', 'App\Http\Controllers\CadastroController@excluirendereco')->name('excluirendereco');
