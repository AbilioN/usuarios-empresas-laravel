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
    return view('home');
});

// Rotas para ususários:
Route::get('/usuarios' , 'UsuarioControlador@getUsuarios');
Route::get('/cadastro-usuario' , 'UsuarioControlador@cadastroUsuario')->name('cadastro-ususario');
Route::post('/cadastrar-usuario' , 'UsuarioControlador@novoUsuario')->name('cadastrar-usuario');


// rotas para empresa
Route::get('/empresas' , 'EmpresaControlador@empresas')->name('empresas');
Route::get('/cadastro-empresa' , 'EmpresaControlador@cadastroEmpresa')->name('cadastro-empresa');
Route::post('/cadastrar-empresa', 'EmpresaControlador@novaEmpresa')->name('cadastrar-empresa');
