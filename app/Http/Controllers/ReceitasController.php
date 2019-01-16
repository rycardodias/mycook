<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\receita;
use App\user;
use App\tipoConsumidor;
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
        $listatipos = tipoConsumidor::all();

        $tipo=

            DB::table('receitas')
                ->join('ingrediente_receitas', 'receitas.id', '=', 'ingrediente_receitas.idReceita')
                ->join('ingredientes', 'ingrediente_receitas.idIngrediente', '=', 'ingredientes.id')
                ->join('origem_alimentos', 'ingredientes.idOrigem', '=', 'origem_alimentos.id')
                ->join('origem_tipos', 'origem_alimentos.id', '=', 'origem_tipos.idOrigemAlimento')
                ->join('tipo_consumidors', "origem_tipos.idTipoConsumidor", '=', 'tipo_consumidors.id')
                ->select('receitas.id','receitas.nome', 'receitas.created_at', 'tipo_consumidors.tipoConsumidor')
                ->where('origem_tipos.idTipoConsumidor', '=', $tipoID)
                ->distinct()
                ->get();



        return view("posts.receitas.showfilters",compact('tipo','listatipos'));
    }

    public function index()
    {
        $receita = receita::all();
        $tipos = tipoConsumidor::all();

        return view('posts.receitas.index')->with(['receita' => $receita,'tipos' => $tipos ]);
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
            'detalhes' => 'required',
            'nPassos' => 'required',
            'nPessoas' => 'required',
            'idUtilizador' => 'required'
        ]);
        
        // Create Post
        $receita = new receita;
        $receita->nome = $request->input('nome');
        $receita->resumo = $request->input('resumo');
        $receita->detalhes = $request->input('detalhes');
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
//
        $listausers = user::all();

        $receitas=
            DB::table('receitas')
                ->join('users', 'receitas.idUtilizador', '=', 'users.id')
                ->select('receitas.id', 'receitas.nome','receitas.resumo','receitas.detalhes','receitas.nPassos','receitas.nPessoas','users.name','receitas.created_at','receitas.updated_at')
                ->where('receitas.id', '=', $id)
                ->get();

        return view('posts.receitas.edit')->with(['receitas' => $receitas,'listausers' => $listausers]);
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
        $receita->idUtilizador = $request->input('utilizadores');
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
