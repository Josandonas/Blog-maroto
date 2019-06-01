<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Postagens;
use App\Comentarios;
use App\Users;
use Auth;


class PosLogController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $post_comentario = array();

        $postagens=Postagens::all();
        foreach ($postagens as $key => $post) {
              $comentarios=DB::table('comentarios')
                ->join('postagens','comentarios.postagem','=','postagens.id')
                ->where('postagens.id','=',$post->id)
                ->get();
                array_push($post_comentario, array('post'=>$post,'comentarios'=>$comentarios));
        }
       // $comentarios=Comentarios::all();        ->where('comentarios.postagem','=','postagens.id')
// dd($post_comentario);
        return view('poslog', array("posts"=>$post_comentario));
    }
    public function inicio(){
       $post_comentario = array();

        $postagens=Postagens::all();
        foreach ($postagens as $key => $post) {
              $comentarios=DB::table('comentarios')
                ->join('postagens','comentarios.postagem','=','postagens.id')
                ->where('postagens.id','=',$post->id)
                ->get();
                array_push($post_comentario, array('post'=>$post,'comentarios'=>$comentarios));
        }
       // $comentarios=Comentarios::all();        ->where('comentarios.postagem','=','postagens.id')
// dd($post_comentario);
        return view('welcome', array("posts"=>$post_comentario));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

    }

    public function exibir($id){
    }

}
