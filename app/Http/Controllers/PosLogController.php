<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postagens;
class PosLogController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $postagens=Postagens::all();
        return view('poslog', compact('postagens'));
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
        $postagem=Postagem::find($id);
        return view('alterarpost',compact('postagem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $postagem = Postagem::find($id);
        $postagem->id=$request->input('id');
        $postagem->titulo=$request->input('titulo');
        $postagem->descricao=$request->input('descricao');
        $postagem->data=$request->input('data');
        $postagem->hora=$request->input('hora');
        $postagem->autor=$request->input('autor');
        $postagem->save();
        return redirect('poslog');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $postagem = Postagem::find($id);
        $postagem->delete();
        return redirect('poslog');

    }

    public function exibir($id){
    }

}
