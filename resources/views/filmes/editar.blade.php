@extends('base')
@section('titulo', 'Editar Filmes')
@section('conteudo')
 <h1>Filmes - Editar</h1>
 @if ($errors->any())
 <p>Preencha os campos corretamente.</p>
 <ul>
 @foreach($errors->all() as $erro)
 <li>{{ $erro }}</li>
 @endforeach
 </ul>
 @endif
 <form action="{{ route('filmes.editar', $filme->id) }}" method="post">
 @csrf
 @method('put')

 <p><input value="{{ old('nome', $filme->nome ?? '') }}" type="text" name="nome"
placeholder="Nome"></p>
 <p><input value="{{ old('sinopse', $filme->sinopse ?? '') }}" type="text" name="sinopse"
placeholder="Sinopse"></p>
 <p><input value="{{ old('ano', $filmes->ano ?? '') }}" type="date" name="ano"
placeholder="Ano"></p>
 <p><input value="{{ old('categoria', $filme->categoria ?? '') }}" type="text" name="categoria"
placeholder="Categoria"></p>
<p><input value="{{ old('link', $filme->link ?? '') }}" type="text" name="link"
placeholder="Link"></p>
 <p><input type="submit" value="Editar"></p>
</form>
@endsection