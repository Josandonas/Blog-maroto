<?php

namespace App\Http\Controllers;

use App\Postagens;
use Auth;
use Illuminate\Http\Request;
class PostagensController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $postagem= new Postagens();
        $postagem->nomePost=$request->input('titulo'); /* input tem que ser equivalente ao name do campo do form*/
        $postagem->texto=$request->input('texto');
        $postagem->nusuario=$request->input('nusuario');
        $postagem->usuario=Auth::id();
        $postagem->save();
        return redirect('/poslog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Postagens  $postagens
     * @return \Illuminate\Http\Response
     */
    public function show(Postagens $postagens){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Postagens  $postagens
     * @return \Illuminate\Http\Response
     */
    public function edit(Postagens $postagens){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Postagens  $postagens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postagens $postagens){
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Postagens  $postagens
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postagens $postagens){
        //
    }

    public function inicio(){
        $postagens=Postagens::all();
        return view('welcome', compact('postagens'));

    }
}
