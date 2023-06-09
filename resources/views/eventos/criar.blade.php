@extends('layouts.main')
@section('titulo', 'Criar Evento')
@section('conteudo')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Criar Evento</h1>
    <form method="POST" action="/eventos" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="imagem">Imagem do evento:</label>
            <input type="file" class="form-control" id="imagem" name="imagem" placeholder="Qual será o nome do evento?">
        </div>
        <div class="form-group">
            <label for="cidade">Nome do evento:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Qual será o nome do evento?">
        </div>
        <div class="form-group">
            <label for="data">Data:</label>
            <input type="date" class="form-control" id="data" name="data">
        </div>
        <div class="form-group">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Em qual cidade será realizado?">
        </div>
        <div class="form-group">
            <label for="privado">O evento é privado?</label>
            <select name="privado" id="privado" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" class="form-control" placeholder="O que vai rolar no evento?"></textarea>
        </div>
        <div class="form-group">
            <label for="itens[]">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Cadeiras">Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Open Food">Open Food
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Palco">Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Cerveja Grátis">Cerveja Grátis
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar evento">
    </form>
</div>

@endsection