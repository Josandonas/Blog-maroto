<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Sacolas;
use App\Produtos;

class sacolaController extends Controller{

    public function index(){
        $prod=Sacolas::all();

        $produtos = DB::table('sacolas')->select('valor')->get();
        $total = $produtos->sum('valor');
        $goll=$produtos->sum('id');
                        
        return view('sacola',compact('prod','total'));
    }
    public function destroy($id){
        $prod=Sacolas::find($id);
        $prod->delete();
        return redirect('/sacola');
    }
    public function show($id){

    }
    public function create(){
        
    }

    public function store(Request $request){
        $sac= new Sacolas();
        $sac->nome=$request->input('name'); /* input tem que ser equivalente ao name do campo do form*/
        $sac->valor=$request->input('value');
        $sac->categoria=$request->input('cate');
        $sac->produto=$request->input('cod');
        $sac->save();
        return redirect('/sacola');
    }



    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }
}
