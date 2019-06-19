<?php

namespace App\Http\Controllers;

use App\Postagens;
use Auth;
use App\Comentarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PostagensController extends Controller{
    public function index(){
        //
    }
    public function create(){
    }
    public function store(Request $request){
        if($request->file('arquivo')==null){
            $path = "";
        }else{
            $path=$request->file('arquivo')->store('imagens','public');
        }
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
    public function edit(Postagens $postagens){
        //
    }

    public function update(Request $request, Postagens $postagens){
   
    }


}
