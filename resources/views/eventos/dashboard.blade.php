@extends('layouts.main')
@section('titulo', 'Dashboard')
@section('conteudo')
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-container-events">
    @if(count($eventos)>0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Ações</th>

            </tr>
        </thead>

        <tbody>
            @foreach($eventos as $evento)
                <tr>
                    <td scropt="row">{{$loop->index+1}}</td>
                    <td><a href="/evento/{{$evento->id}}">{{$evento->titulo}}</a></td>
                    <td>0</a></td>
                    <td><a href="#">Editar</a><a href="#">Deleter</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>Você ainda não tem eventos. <a href="eventos/criar">Criar evento</a></p>
    @endif
</div>
@endsection