@extends('layouts.main')
@section('titulo', 'Página Principal')
    
@section('conteudo')
{{--
        @if(10<20)
            <p>True</p>
        @endif
        <p>{{ $nome }}</p>
        @if($nome == 'Gabriel')
            <p>Nome é Gabriel</p>
        @else
            <p>Nome não é Gabriel</p>
        @endif
        @for($i=0;$i<count($arr);$i++)
            <p>{{$arr[$i]}}</p>
        @endfor
        @foreach ($nomes as $item)
            <p>{{$item}}</p>
            
        @endforeach

    <h1>Página Inicial</h1>
    <h2>Lista de eventos</h2>
    @foreach($eventos as $evento)
        <p>Nome: {{$evento->titulo}} - Descrição: {{$evento->descricao}}</p>

    @endforeach
--}}

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar eventos">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if($search)
        <h2>Buscando por: {{$search}}</h2>
        @else
        <h2>Próximos Eventos</h2>
        @endif
        <p class="subtitle">Veja os eventos nos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach($eventos as $evento)
            <div class="card col-md-3">
                <img src="imagens/eventos/{{$evento->imagem}}" alt="{{$evento->titulo}}">
                <div class="card-body">
                    <p class="card-body">{{date('d/m/Y', strtotime($evento->data))}}</p>
                    <h5 class="card-title">{{$evento->titulo}}</h5>
                    <p class="card-participants">X participantes</p>
                    <a href="/evento/{{$evento->id}}" class="btn btn-primary">Saiba Mais</a>
                </div>
            </div>
            @endforeach
            @if(count($eventos) ==0)
                <p>Não existem eventos cadastrados.</p>
            @endif
        </div>
    </div>
@endsection
