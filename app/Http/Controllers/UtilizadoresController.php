<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use DB;

class UtilizadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utilizador = user::all();
        return view('myaccount')->withUtilizador($utilizador);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'tipoUtilizador' => 'required',
            'estadoConta' => 'required'
        ]);
        
        // Create Post
        $utilizador = new user;
        $utilizador->name = $request->input('name');
        $utilizador->email = $request->input('email');
        $utilizador->tipoUtilizador = $request->input('tipoUtilizador');
        $utilizador->estadoConta = $request->input('estadoConta');
        $utilizador->sexo = $request->input('sexo');
        $utilizador->faixaEtaria = $request->input('faixaEtaria');
        $utilizador->atividadeFisica = $request->input('atividadeFisica');
        $utilizador->save();

        return redirect('myaccount')->with('success', 'receita atualizado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $utilizador = user::find($id);
        return view('posts.utilizadores.show')->withUtilizador($utilizador);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $utilizador = user::find($id);
        return view('posts.utilizadores.edit')->withUtilizador($utilizador);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'tipoUtilizador' => 'required',
            'estadoConta' => 'required'
        ]);
        
        // Create Post
        $utilizador = user::find($id);
        $utilizador->name = $request->input('name');
        $utilizador->email = $request->input('email');
        $utilizador->tipoUtilizador = $request->input('tipoUtilizador');
        $utilizador->estadoConta = $request->input('estadoConta');
        $utilizador->sexo = $request->input('sexo');
        $utilizador->faixaEtaria = $request->input('faixaEtaria');
        $utilizador->atividadeFisica = $request->input('atividadeFisica');
        $utilizador->save();

        return redirect('myaccount')->with('success', 'receita atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $utilizador = user::find($id);
        $utilizador->delete();
        return redirect('/')->with('sucess', 'Utilizador Eliminado!');
    }
}
