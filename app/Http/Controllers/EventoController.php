<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index(){
        $nome = 'Gabriel';
        $array = [10,20,30,40,50];
        $nomes = ['Chico', 'Pedrita', 'Tiririca'];
        return view('welcome', ['nome' => $nome, 'arr' => $array, 'nomes' => $nomes]);
    }
    public function criar(){
        return view('eventos/criar');

    }
    public function contato(){
        return view('contato');
    }
}
