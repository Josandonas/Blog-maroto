<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NovoAcesso;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use App\Postagens;
class ChatsController extends Controller{

    public function enviarEmail(Request $request){
        $destinatario = $request->input('destinatario');
        $assunto = $request->input('assunto');
        $mensagem = $request->input('mensagem');
        $remetente = Auth::user()->email;
        $nome = Auth::user()->name;

        //Mail::to($destinatario)->send(new TestEmail($remetente, $nome, $assunto, $destinatario, $mensagem));
        //return back()->with('sucesso', 'Mensagem enviada com sucesso!');       

        if(User::where('users.name', '=', $destinatario)->exists()){
            $destino = DB::table('users')
            ->select('users.email')
            ->where('users.name', $destinatario)
            ->get();
            Mail::to($destino)->send(new NovoAcesso($remetente, $nome, $assunto, $destino, $mensagem));
            return back()->with('sucesso', 'Mensagem enviada com sucesso!');
        }else{
            return back()->with('erro', 'Usuário não existe!');
        }
    }

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
        return view('chat', array("posts"=>$post_comentario));
    }
    public function mensagem(){
        return view('chat');
    }
    // public function create(){
    //     //
    // }
    // public function store(Request $request){
    //     //
    // }
    // public function show($id){
    //     //
    // }
    // public function edit($id){
    //     //
    // }
    // public function update(Request $request, $id){
    //     //
    // }
    // public function destroy($id){
    //     //
    // }
}
