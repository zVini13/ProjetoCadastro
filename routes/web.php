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