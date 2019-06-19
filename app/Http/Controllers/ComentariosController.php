<?php

namespace App\Http\Controllers;

use App\Comentarios;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComentariosController extends Controller{
    public function index(){
        //
    }

    public function create(){
        //
    }

    public function store(Request $request){
        if($request->file('arquivo')==null){
            $path = "";
        }else{
            $path=$request->file('arquivo')->store('imagens','public');
        }
        
        $comentario= new Comentarios(); /* input tem que ser equivalente ao name do campo do form*/
        $comentario->texto_comentario=$request->input('texto');
        $comentario->autor=$request->input('nome');
        $comentario->arqui=$path;
        $comentario->postagem=$request->input('idpost');
        $comentario->save();
        return redirect('/poslog');
    }
    public function destroy($id){
        $comentario=Comentarios::find($id);
        if (isset($comentario)) {
            $arqui= $comentario->arqui;
            Storage::disk('public')->delete($arqui);
            $comentario->delete();
        }
        return redirect('/poslog');
    }
    public function show($id){
        //
    }
    public function edit($id){
        //
    }
    public function update(Request $request, $id){
        //
    }

}
