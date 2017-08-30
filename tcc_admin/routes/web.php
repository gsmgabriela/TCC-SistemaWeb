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

//Rota chamando View

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('home.index');
});

Route::get('/home','homeController@index')->name('home');

Route::get('/cadastros','cadastrosController@index')->name('cadastros');


//Rota Locais
Route:: resource('/locais', 'locaisController');

//Rota Correios
Route:: resource('/correios', 'correiosController');

//Rota Tipo de Usuários
Route:: resource('/tipo', 'tipoUsuarioController');

//Rota Usuários
Route:: resource('/usuario', 'usuarioController');

//Rota Entregadores
Route:: resource('/entregador', 'entregadorController');

//Rota Entregas
Route:: resource('/entregas', 'entregaController');

//Rota Imprevistos
Route:: resource('/imprevisto', 'imprevistoController');