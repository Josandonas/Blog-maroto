<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postagens;
use Auth;
use App\Comentarios;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class PostaAquiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('postaaqui');
    }
    public function show($id){
        $postagem=Postagens::find($id);

        $comentarios=DB::table('comentarios')
            ->join('postagens','comentarios.postagem','=','postagens.id')
            ->where('postagens.id','=',$id)
            ->get();

        return view('postaaqui', compact('comentarios','postagem'));
    }
    public function store(Request $request){
        //
    }
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

     
}
