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
}
