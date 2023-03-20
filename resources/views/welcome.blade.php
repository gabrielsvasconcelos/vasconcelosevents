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
--}}
    <h1>Página Inicial</h1>
@endsection
