<?php

namespace App\Http\Controllers;

use App\ingrediente;
use App\ingredienteReceita;
use App\receita;
use App\unidadeMedida;
use Illuminate\Http\Request;
use Session;

class ingredientes_receitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $IR = ingredienteReceita::all();

        return view('posts.ingredientes_receitas.index')->with(['IR' => $IR ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredientes = ingrediente::all();
        $receitas = receita::all();
        $medidas = unidadeMedida::all();

        //receber session das receitas
        $value = Session::get('receitaID');

        return view('posts.ingredientes_receitas.create')->with(['ingredientes' => $ingredientes,'receitas' => $receitas,'medidas' => $medidas,'value' => $value]);
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
            'quantidade' => 'required'
        ]);
        // Create Post
        $ingrediente_receitas = new ingredienteReceita;
        $ingrediente_receitas->idReceita = $request->input('receita');
        $ingrediente_receitas->idIngrediente = $request->input('ingrediente');
        $ingrediente_receitas->idUnidadeMedida = $request->input('medida');
        $ingrediente_receitas->quantidade = $request->input('quantidade');
        $ingrediente_receitas->save();




        return redirect('/receitas')->with('success', 'Ingrediente atualizado');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
