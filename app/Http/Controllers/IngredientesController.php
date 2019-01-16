<?php

namespace App\Http\Controllers;

use App\origemAlimento;
use App\origemTipo;
use App\user;
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
    public function filter($tipoID)
    {
        $listaorigem = origemAlimento::all();

        $origem=
            DB::table('ingredientes')
                ->join('origem_alimentos', 'ingredientes.idOrigem', '=', 'origem_alimentos.id')
                ->join('origem_tipos', 'origem_alimentos.id', '=', 'origem_tipos.idOrigemAlimento')
                ->select('ingredientes.id','ingredientes.nome','ingredientes.descricao', 'ingredientes.created_at','origem_alimentos.origemAlimento')
                ->distinct()
                ->where('origem_tipos.idOrigemAlimento', '=', $tipoID)
                ->get();



        return view("posts.ingredientes.showfilters",compact('origem','listaorigem'));
    }

    public function index()
    {

        $lista = origemAlimento::all();



        $ingredientes=DB::table('ingredientes')
        ->join('origem_alimentos', 'ingredientes.idOrigem', '=', 'origem_alimentos.id')
        ->select('ingredientes.id','ingredientes.nome', 'ingredientes.descricao','ingredientes.idUtilizador','origem_alimentos.origemAlimento','ingredientes.created_at','ingredientes.updated_at')
            ->orderBy('ingredientes.id')
            ->get();

        return view('posts.ingredientes.index',compact('ingredientes' ,'lista' ));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listatipos = origemAlimento::all();
//
        return view('posts.ingredientes.create')->with(['listatipos' => $listatipos]);
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
            'descricao' => 'required'

        ]);
        
        // Create Post
        $ingrediente = new Ingrediente;
        $ingrediente->nome = $request->input('nome');
        $ingrediente->descricao = $request->input('descricao');
        $ingrediente->idUtilizador = $request->input('idUtilizador');
        $ingrediente ->idOrigem = $request->input('alimento');
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

        $ingrediente=
            DB::table('ingredientes')
                ->join('origem_alimentos', 'ingredientes.idOrigem', '=', 'origem_alimentos.id')
                ->join('users', 'users.id', '=', 'ingredientes.idUtilizador')
                ->select('ingredientes.id', 'ingredientes.nome','ingredientes.descricao','users.name','origem_alimentos.origemAlimento','ingredientes.created_at','ingredientes.updated_at')
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
        $listatipos = origemAlimento::all();
        $listausers = user::all();


        $ingrediente=
            DB::table('ingredientes')
                ->join('origem_alimentos', 'ingredientes.id', '=', 'origem_alimentos.id')
                ->join('users', 'users.id', '=', 'ingredientes.idUtilizador')
                ->select('ingredientes.id', 'ingredientes.nome','ingredientes.descricao','users.name','origem_alimentos.origemAlimento','ingredientes.created_at','ingredientes.updated_at')
                ->where('ingredientes.id', '=', $id)
                ->get();

        return view('posts.ingredientes.edit')->with(['ingrediente' => $ingrediente,'listatipos' => $listatipos,'listausers' => $listausers]);



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
            'descricao' => 'required'

        ]);
        
        // Create Post
        $ingrediente = Ingrediente::find($id);
        $ingrediente->nome = $request->input('nome');
        $ingrediente->descricao = $request->input('descricao');
        $ingrediente->idUtilizador = $request->input('utilizador');
        $ingrediente ->idOrigem = $request->input('alimento');
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
