<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedidos;
class pedidoController extends Controller{

    public function index(){

        return view('pedido');
    }

    public function create(){
        //
    }

    public function store(Request $request){
        $pedi= new Pedidos(); /* input tem que ser equivalente ao name do campo do form*/
        $$pedi->id=$request->input('id');
        $$pedi->valor=$request->input('value');
        $$pedi->save();
        return redirect('/pedido');
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

    public function destroy($id){
        //
    }
}
