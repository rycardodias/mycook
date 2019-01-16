<?php

namespace App\Http\Controllers;

use App\atividadeFisica;
use App\faixaEtaria;
use App\sexo;
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

        $utilizador=DB::table('users')
            ->join('faixa_etarias', 'faixa_etarias.id', '=', 'users.faixaEtaria')
            ->join('tipo_utilizadors', 'tipo_utilizadors.id', '=', 'users.tipoUtilizador')
             ->join('atividade_fisicas', 'atividade_fisicas.id', '=', 'users.atividadeFisica')
            ->join('estado_contas', 'estado_contas.id', '=', 'users.estadoConta')
            ->join('sexos', 'sexos.id', '=', 'users.sexo')
            ->select('users.id','users.name', 'users.email','users.email','tipo_utilizadors.tipoUtilizador','estado_contas.estadoConta','sexos.sexo','faixa_etarias.faixaEtaria','atividade_fisicas.nivelAtividade')
            ->orderBy('users.id')
            ->get();


        return view('posts.utilizadores.index',compact('utilizador'));

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


        $utilizador=DB::table('users')
            ->join('faixa_etarias', 'faixa_etarias.id', '=', 'users.faixaEtaria')
            ->join('tipo_utilizadors', 'tipo_utilizadors.id', '=', 'users.tipoUtilizador')
             ->join('atividade_fisicas', 'atividade_fisicas.id', '=', 'users.atividadeFisica')
            ->join('estado_contas', 'estado_contas.id', '=', 'users.estadoConta')
            ->join('sexos', 'sexos.id', '=', 'users.sexo')
            ->select('users.id','users.name', 'users.email','users.email','tipo_utilizadors.tipoUtilizador','estado_contas.estadoConta','sexos.sexo','faixa_etarias.faixaEtaria','atividade_fisicas.nivelAtividade')
            ->where('users.id', '=', $id)
            ->get();

        return view('posts.utilizadores.show')->with('utilizador', $utilizador);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listafaixas = faixaEtaria::all();
        $listaatividade = atividadeFisica::all();
        $listasexo = sexo::all();

        $utilizador=DB::table('users')
            ->join('faixa_etarias', 'faixa_etarias.id', '=', 'users.faixaEtaria')
            ->join('tipo_utilizadors', 'tipo_utilizadors.id', '=', 'users.tipoUtilizador')
            ->join('atividade_fisicas', 'atividade_fisicas.id', '=', 'users.atividadeFisica')
            ->join('estado_contas', 'estado_contas.id', '=', 'users.estadoConta')
            ->join('sexos', 'sexos.id', '=', 'users.sexo')
            ->select('users.id','users.name', 'users.email','users.email','tipo_utilizadors.tipoUtilizador','estado_contas.estadoConta','sexos.sexo','faixa_etarias.faixaEtaria','atividade_fisicas.nivelAtividade')
            ->where('users.id', '=', $id)
            ->get();


        return view('posts.utilizadores.edit')->with(['utilizador' => $utilizador,'listafaixas' => $listafaixas,'listaatividade' => $listaatividade,'listasexo' => $listasexo]);
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
        return redirect('/gerirusers')->with('sucess', 'Utilizador Eliminado!');
    }
}
