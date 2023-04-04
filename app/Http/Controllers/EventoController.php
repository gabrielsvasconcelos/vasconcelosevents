<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    public function index(){
        $busca = request('search');

        if($busca){
            $eventos = Evento::where([['titulo', 'like','%'.$busca.'%']])->get();
        }else{
            $eventos = Evento::all();
        }
        #$nome = 'Gabriel';
        #$array = [10,20,30,40,50];
        #$nomes = ['Chico', 'Pedrita', 'Tiririca'];
        #return view('welcome', ['nome' => $nome, 'arr' => $array, 'nomes' => $nomes]);
        return view('welcome', ['eventos' => $eventos, 'search' => $busca]);
    }
    public function criar(){
        return view('eventos/criar');

    }
    public function contato(){
        return view('contato');
    }
    public function store(Request $dados_evento){
        $evento = New Evento;
        $evento->titulo = $dados_evento->nome;
        $evento->descricao = $dados_evento->descricao;
        $evento->cidade = $dados_evento->cidade;
        $evento->privado = $dados_evento->privado;
        $evento->itens = $dados_evento->itens;
        $evento->data = $dados_evento->data;
        
        //Upload da imagem
        if($dados_evento->hasFile('imagem') && $dados_evento->file('imagem')->isValid()){
            $imagem_dado = $dados_evento->imagem;
            $extensao = $imagem_dado->extension();
            $nomeimagem = md5($imagem_dado->getClientOriginalName() . strtotime("now")) . "." . $extensao;
            $imagem_dado->move(public_path('imagens/eventos'), $nomeimagem);
            $evento->imagem = $nomeimagem;
        }   
        
        $user = auth()->user();
        $evento->user_id = $user->id;
        $evento->save();

        return redirect('/dashboard')->with('msg_criado', 'Evento criado com sucesso!');
        
    }
    public function show($id){
        $evento = Evento::findOrFail($id);
        return view ('eventos/mostrar', ['evento' => $evento]);
    }
    public function dashboard(){
        $usuario = auth()->user();
        $eventos = $usuario->eventos;
        return view('eventos/dashboard', ['eventos' => $eventos]);
    }
    public function deletar($id){
        Evento::findOrFail($id)->delete();
        return redirect('/dashboard')->with('msg', 'Evento excluído com sucesso!');
    }
    public function editar($id){
        $evento = Evento::findOrFail($id);
        return view('eventos.editar', ['evento' =>$evento]);
    }
    public function update(Request $request){
        $data = $request->all();

        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $requestimagem = $request->imagem;
            $extensao = $requestimagem->extension();
            $nomeimagem = md5($requestimagem->getClientOriginalName() . strtotime("now")) . "." . $extensao;
            $imagem_dado->move(public_path('imagens/eventos'), $nomeimagem);
            $data['imagem'] = $nomeimagem;
        } 

        Evento::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg_criado', 'Evento editado com sucesso!');
    }
}
