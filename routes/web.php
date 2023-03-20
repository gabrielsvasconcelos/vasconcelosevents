<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    $nome = 'Gabriel';
    $array = [10,20,30,40,50];
    $nomes = ['Chico', 'Pedrita', 'Tiririca'];
    return view('welcome', ['nome' => $nome, 'arr' => $array, 'nomes' => $nomes]);
});
Route::get('/contato', function () {
    return view('contato');
});
Route::get('/produto/{id?}', function ($id = 1) {
    return view('produto',['id' => $id]);
});