<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\receita;
use DB;

class ReceitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function filter($tipoID)
    {

        $tipos = tipoConsumidor::all();

        $query=
            DB::table('receitas')
                ->join('ingrediente_receitas', 'receitas.id', '=', 'ingrediente_receitas.idReceita')
                ->join('origem_alimentos', 'ingrediente_receitas.idIngrediente', '=', 'origem_alimentos.id')
                ->join('origem_tipos', 'origem_alimentos.id', '=', 'origem_tipos.idOrigemAlimento')
                ->join('tipo_consumidors', "origem_tipos.idTipoConsumidor", '=', 'tipo_consumidors.id')
                ->select('receitas.nome', 'receitas.created.at')
                ->where('origem_tipos.idTipoConsumidor', '=', $tipoID)
                ->get();


        return view("tiposconsumidor",compact('tipos'));

    }

    public function index()
    {
        $receita = receita::all();
        return view('posts.receitas.index')->withReceitas( $receita);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.receitas.create');
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
            'resumo' => 'required',
            'nPassos' => 'required',
            'nPessoas' => 'required',
            'idUtilizador' => 'required'
        ]);
        
        // Create Post
        $receita = new receita;
        $receita->nome = $request->input('nome');
        $receita->resumo = $request->input('resumo');
        $receita->nPassos = $request->input('nPassos');
        $receita->nPessoas = $request->input('nPessoas');
        $receita->idUtilizador = $request->input('idUtilizador');

        $receita->save();

        return redirect('/receitas')->with('success', 'receita atualizado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $receita = receita::find($id);
        return view('posts.receitas.show')->withReceita($receita);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receita = receita::find($id);
        return view('posts.receitas.edit')->with('receita', $receita);
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
            'resumo' => 'required',
            'nPassos' => 'required',
            'nPessoas' => 'required'
        ]);
        
        // Create Post
        $receita = receita::find($id);
        $receita->nome = $request->input('nome');
        $receita->resumo = $request->input('resumo');
        $receita->nPassos = $request->input('nPassos');
        $receita->nPessoas = $request->input('nPessoas');
        $receita->idUtilizador = $request->input('idUtilizador');
        $receita->save();

        return redirect('receitas')->with('success', 'receita atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $receita = receita::find($id);
        $receita->delete();
        return redirect('receitas')->with('sucess', 'receita Eliminado');
    }
}
