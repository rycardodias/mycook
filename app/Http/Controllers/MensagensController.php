<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mensagens;
use DB;

class MensagensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mensagens = mensagens::all();
        // return view('posts.index')->with('mensagens', $mensagens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.criarMensagens');
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
            'email' => 'required',
            'assunto' => 'required',
            'mensagem' => 'required'
        ]);
        
        // Create Post
        $mensagem = new Mensagens;
        $mensagem->nome = $request->input('nome');
        $mensagem->email = $request->input('email');
        $mensagem->assunto = $request->input('assunto');
        $mensagem->mensagem = $request->input('mensagem');
        $mensagem->save();

        return redirect('contactos')->with('success', 'Mensagem enviada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $mensagem = Mensagens::find($id);
        // return view('posts.show')->with('mensagem', $mensagem);
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
