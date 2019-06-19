<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Produtos;

class lojaController extends Controller{
    public function index(){
        $prod=Produtos::all();
        return view('loja',compact('prod'));
    }
    public function inicio(){
       $prod=Produtos::all();
        return view('loja2',compact('prod'));
    }

    public function create(){
        //
    }
    public function store(Request $request){
        //
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
