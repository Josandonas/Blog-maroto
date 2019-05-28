<?php

namespace App\Http\Controllers;

use App\Postagens;
use Auth;
use App\Comentarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostagensController extends Controller{
    public function index(){
        //
    }
    public function create(){
    }
    public function store(Request $request){

        $path=$request->file('arquivo')->store('imagens','public');
        $postagem= new Postagens();
        $postagem->nomePost=$request->input('titulo'); /* input tem que ser equivalente ao name do campo do form*/
        $postagem->texto=$request->input('texto');
        $postagem->nusuario=$request->input('nusuario');
        $postagem->arquivo=$path;
        $postagem->usuario=Auth::id();
        $postagem->save();
        return redirect('/poslog');

    }

    public function destroy($id){

        $postagem=Postagens::find($id);
        if (isset($postagem)) {
            $arqui= $postagem->arquivo;
            Storage::disk('public')->delete($arqui);
            $postagem->delete();
        }
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

}
