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
        $ingredientes = new Ingrediente;
        $ingredientes->nome = $request->input('nome');
        $ingredientes->descricao = $request->input('descricao');
        $ingredientes->idUnidadeMedida = $request->input('idUnidadeMedida');
        $ingredientes->idOrigem = $request->input('idOrigem');
        $ingredientes->idUtilizador = $request->input('idUtilizador');
        $ingredientes->save();

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
        $ingredientes = Ingrediente::find($id);
        $ingredientes->nome = $request->input('nome');
        $ingredientes->descricao = $request->input('descricao');
        $ingredientes->idUnidadeMedida = $request->input('idUnidadeMedida');
        $ingredientes->idOrigem = $request->input('idOrigem');
        $ingredientes->save();

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
        return redirect('/contactos')->with('sucess', 'Ingrediente Eliminado');
    }
}
