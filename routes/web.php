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

Route::get('/sexos', function() {
    $sexo = DB::table('sexos')->get();
    foreach($sexo as $s) {
        echo "id: " . $s->id . " ";
        echo "sexo: " . $s->sexo . "<br> ";
    }
});

Route::get('/', function () {
    return view('index');
});

Route::get('/Sobre', function () {
    return view('sobre');
});

Route::get('/Contactos', function () {
    return view('contactos');
});

Route::get('/CreateAccount', function () {
    return view('createAccount');
});

Route::get('/Receitas', function () {
    return view('receitas');
})->middleware('auth');

Route::get('/ReceitaDetalhada', function () {
    return view('receitaDetalhada');
})->middleware('auth');

Route::get('/EditarReceita', function () {
    return view('editarReceita');
})->middleware('auth');

Route::get('/myaccount', function () {
    return view('myaccount');
})->middleware('auth');

Route::get('/editarIngredientes', function () {
    return view('editarIngredientes');
})->middleware('auth');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('mensagens', 'MensagensController')->middleware('auth');


Route::resource('receitas', 'ReceitasController')->middleware('auth');

Route::resource('ingredientes', 'IngredientesController')->middleware('auth');




