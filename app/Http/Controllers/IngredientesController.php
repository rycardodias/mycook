<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ingrediente;
use DB;

class IngredientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.criarIngredientes');
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
            'nome' => 'required',
            'descricao' => 'required',
            'idUnidadeMedida' => 'required',
            'idOrigem' => 'required'
        ]);
        
        // Create Post
        $ingrediente = new Ingrediente;
        $ingrediente->nome = $request->input('nome');
        $ingrediente->descricao = $request->input('descricao');
        $ingrediente->idUnidadeMedida = $request->input('idUnidadeMedida');
        $ingrediente->idOrigem = $request->input('idOrigem');
        $ingrediente->idUtilizador = $request->input('idUtilizador');
        $ingrediente->save();

        return redirect('editarIngredientes')->with('success', 'Ingrediente atualizado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            'nome' => 'required',
            'descricao' => 'required',
            'idUnidadeMedida' => 'required',
            'idOrigem' => 'required'
        ]);
        
        // Create Post
        $ingrediente = Ingrediente::find($id);
        $ingrediente->nome = $request->input('nome');
        $ingrediente->descricao = $request->input('descricao');
        $ingrediente->idUnidadeMedida = $request->input('idUnidadeMedida');
        $ingrediente->idOrigem = $request->input('idOrigem');
        $ingrediente->save();

        return redirect('editarIngredientes')->with('success', 'Ingrediente atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingrediente = Ingrediente::find($id);
        $ingrediente->delete();
        return redirect('/contactos')->with('sucess', 'Ingrediente atualizado');
    }
}
