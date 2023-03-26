<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    public function index(){
        $eventos = Evento::all();
        #$nome = 'Gabriel';
        #$array = [10,20,30,40,50];
        #$nomes = ['Chico', 'Pedrita', 'Tiririca'];
        #return view('welcome', ['nome' => $nome, 'arr' => $array, 'nomes' => $nomes]);
        return view('welcome', ['eventos' => $eventos]);
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
        
        //Upload da imagem
        if($dados_evento->hasFile('imagem') && $dados_evento->file('imagem')->isValid()){
            $imagem_dado = $dados_evento->imagem;
            $extensao = $imagem_dado->extension();
            $nomeimagem = md5($imagem_dado->getClientOriginalName() . strtotime("now")) . "." . $extensao;
            $imagem_dado->move(public_path('imagens/eventos'), $nomeimagem);
            $evento->imagem = $nomeimagem;
        }   
        
        $evento->save();

        return redirect('/')->with('msg_criado', 'Evento criado com sucesso!');
        
    }
    public function show($id){
        $evento = Evento::findOrFail($id);
        return view ('eventos/mostrar', ['evento' => $evento]);
    }
}
