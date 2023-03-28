@extends('layouts.main')
@section('titulo', $evento->titulo)
@section('conteudo')
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/imagens/eventos/{{$evento->imagem}}" alt="" class="img-fluid">
            </div>
        
            <div id="info-container" class="col-md-6">
                <h1>{{$evento->titulo}}</h1>
                <p class="events-city">Local: {{$evento->cidade}}</p>
                <p class="events-participants">Participantes: X participantes</p>
                <p class="event-owner">Dono do evento: {{$donoevento['name']}}</p>
                <a href="" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
                <ul id="items-list">
                    <h3>Evento conta com:</h3>
                    @foreach($evento->itens as $item)
                        <li>{{$item}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre o evento</h3>
                <p class="event-description">{{$evento->descricao}}</p>
            </div>
        </div>
    </div>
@endsection