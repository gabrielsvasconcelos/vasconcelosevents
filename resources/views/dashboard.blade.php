@extends('layouts.main')
@section('titulo', 'Dashboard')
@section('conteudo')
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-container-events">
    @if(count(eventos)>0)
    @else
        <p>Você ainda não tem eventos. <a href="eventos/criar">Criar evento</a></p>
    @endif
</div>
@endsection