<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
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


Route::get('/', [EventoController::class, 'index']);
Route::get('/contato', function () {
    return view('contato');
});
Route::get('/produto/{id?}', function ($id = 1) {
    return view('produto',['id' => $id]);
});
Route::post('/eventos', [EventoController::class, 'store']);
Route::get('/eventos/criar', [EventoController::class, 'criar']);
Route::get('/evento/{id}', [EventoController::class, 'show']);
Route::get('/contato', [EventoController::class, 'contato']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
