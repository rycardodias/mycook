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
})->middleware('auth');

Route::get('/receitaDetalhada', function () {
    return view('receitaDetalhada');
});

Route::get('/editarReceita', function () {
    return view('editarReceita');
});

Route::get('/myaccount', function () {
    return view('myaccount');
});

Route::get('/editarIngredientes', function () {
    return view('editarIngredientes');
});

Route::get('/ingredientes', function () {
    return view('ingredientes');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('mensagens', 'MensagensController');