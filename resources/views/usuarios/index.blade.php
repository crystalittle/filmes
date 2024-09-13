{{-- resources/views/animais/index.blade.php --}}


@extends('base')


@section('titulo', 'Usuários')


@section('conteudo')
<p>
    <a href="{{ route('usuarios.cadastrar') }}">Cadastrar usuário</a>
</p>
<p>Lista de usuários</p>


<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Apagar</th>
        <th>Editar</th>
    </tr>


    @foreach ($usuarios as $usuario)
    <tr>
        <td>{{ $usuario->id }}</td>
        <td>{{ $usuario->nome }}</td>
        <td>{{ $usuario->email }}</td>
        {{-- <td>{{ $usuario->admin ? 'Sim' : 'Não' }}</td> --}}
        <td><a href="{{ route('usuarios.apagar', $usuario->id) }}">Apagar</a></td>
        <td><a href="{{ route('usuarios.editar', $usuario->id) }}">Editar</a></td>
    </tr>
    @endforeach


</table>
@endsection
