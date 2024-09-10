@extends('base')

@section('titulo', 'Inserir dados | Filmes')

@section('conteudo')
<p>Preencha o formulário</p>

@if($errors->any())
<div>
    <h2>Deu ruim</h2>
    @foreach($errors->all() as $erro)
        <p>{{ $erro }}</p>
        @endforeach
</div>
@endif

<form method="post" action="{{ route('filmes.gravar') }}">
    @csrf
    <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}">
    <br>
    <input type="text" name="sinopse" placeholder="Sinopse" value="{{ old('sinopse') }}">
    <br>
    <input type="date" name="ano" placeholder="Ano" value="{{ old('ano') }}">
    <br>
    <input type="file" name="imagem" value="{{ old('imagem') }}">
    <br>
     <input type="text" name="link" value="{{ old('link') }}">
    <br>
    <input type="submit" value="Enviar">
</form>
@endsection