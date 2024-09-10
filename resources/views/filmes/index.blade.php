{{-- resources/views/animais/index.blade.php --}}


@extends('base')


@section('titulo', 'Filmes')


@section('conteudo')
<p>
    <a href="{{ route('filmes.cadastrar') }}">Cadastrar filmes</a>
</p>
<p>Lista de Filmes</p>


<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sinopse</th>
        <th>Ano</th>
        <th>Categoria</th>
        <th>Link</th>
        <th>Apagar</th>
        <th>Editar</th>
    </tr>


    @foreach ($filmes as $filme)
    <tr>
        <td>{{ $filme->id }}</td>
        <td>{{ $filme->nome }}</td>
        <td>{{ $filme->sinopse }}</td>
        <td>{{ $filme->ano }}</td>
        <td>{{ $filme->categoria }}</td>
        <td>{{ $filme->link }}</td>
        <td><a href="{{ route('filmes.apagar', $filme->id) }}">Apagar</a></td>
        <td><a href="{{ route('filmes.editar', $filme->id) }}">Editar</a></td>
    </tr>
    @endforeach


</table>
@endsection
