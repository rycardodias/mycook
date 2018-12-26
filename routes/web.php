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
    return view('index');
});

Route::get('/sobre', function () {
    return view('sobre');
});
Route::get('/contactos', function () {
    return view('contactos');
});

Route::get('/createAccount', function () {
    return view('createAccount');
});

Route::get('/receitas', function () {
    return view('receitas');
});

Route::get('/receitaDetalhada', function () {
    return view('receitaDetalhada');
});

Route::get('/editarReceita', function () {
    return view('editarReceita');
});

Route::get('/myaccount', function () {
    return view('myaccount');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
