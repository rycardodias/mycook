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
        $ingrediente=DB::table('ingredientes')
        ->join('origem_alimentos', 'ingredientes.idOrigem', '=', 'origem_alimentos.id')
        ->select('ingredientes.id','ingredientes.nome', 'ingredientes.descricao','ingredientes.idUtilizador','origem_alimentos.origemAlimento','ingredientes.created_at','ingredientes.updated_at')
        ->get();
        return view('posts.ingredientes.index')->with('ingredientes', $ingrediente);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.ingredientes.create');
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
            'idUtilizador' => 'required',
            'idOrigem' => 'required'
        ]);
        
        // Create Post
        $ingrediente = new Ingrediente;
        $ingrediente->nome = $request->input('nome');
        $ingrediente->descricao = $request->input('descricao');
        $ingrediente->idUtilizador = $request->input('idUtilizador');
        $ingrediente->idOrigem = $request->input('idOrigem');
        $ingrediente->save();

        return redirect('/ingredientes')->with('success', 'Ingrediente atualizado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $ingrediente = Ingrediente::find($id);
        $ingrediente=
            DB::table('ingredientes')
                ->join('origem_alimentos', 'ingredientes.id', '=', 'origem_alimentos.id')
                ->select('ingredientes.id', 'ingredientes.nome','ingredientes.descricao','ingredientes.idUtilizador','origem_alimentos.origemAlimento','ingredientes.created_at','ingredientes.updated_at')
                ->where('ingredientes.id', '=', $id)
                ->get();
        return view('posts.ingredientes.show')->with('ingrediente', $ingrediente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$ingrediente = Ingrediente::find($id);
        $ingrediente=
            DB::table('ingredientes')
                ->join('origem_alimentos', 'ingredientes.id', '=', 'origem_alimentos.id')
                ->select('ingredientes.id', 'ingredientes.nome','ingredientes.descricao','ingredientes.idUtilizador','origem_alimentos.origemAlimento','ingredientes.created_at','ingredientes.updated_at')
                ->where('ingredientes.id', '=', $id)
                ->get();
        return view('posts.ingredientes.edit')->with('ingrediente', $ingrediente);
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
            'idUtilizador' => 'required',
            'idOrigem' => 'required'
        ]);
        
        // Create Post
        $ingrediente = Ingrediente::find($id);
        $ingrediente->nome = $request->input('nome');
        $ingrediente->descricao = $request->input('descricao');
        $ingrediente->idUtilizador = $request->input('idUtilizador');
        $ingrediente->idOrigem = $request->input('idOrigem');
        $ingrediente->save();

        return redirect('ingredientes')->with('success', 'Ingrediente atualizado');
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
        return redirect('ingredientes')->with('sucess', 'Ingrediente Eliminado');
    }
}
