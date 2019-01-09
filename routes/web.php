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
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('index');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/contactos', function () {
    return view('contactos');
});

Route::get('/CreateAccount', function () {
    return view('createAccount');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('mensagens', 'MensagensController')->middleware('auth');

Route::resource('receitas', 'ReceitasController')->middleware('auth');

Route::resource('ingredientes', 'IngredientesController')->middleware('auth');

Route::resource('myaccount', 'UtilizadoresController')->middleware('auth');





