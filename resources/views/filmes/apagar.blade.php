@extends('base')

@section('titulo', 'Apagar | Filmes')

@section('conteudo')
<p>Tem certeza que quer apagar?</p>
<p><em>{{ $filme['nome'] }}</em></p>
<form action="{{ route('filmes.apagar',
$filme['id']) }}" method="post">
@method('delete')
@csrf
<input type="submit" value="Pode apagar sem medo">
</form>
<a href="{{ route('filmes') }}">Cancelar</a>
@endsection