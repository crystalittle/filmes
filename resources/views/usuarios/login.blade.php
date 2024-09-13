@extends('base')

@section('titulo', 'Login Usuários')

@section('conteudo')

@if($errors->any())
<div>
    <h2>Deu ruim</h2>
    @foreach($errors->all() as $erro)
        <p>{{ $erro }}</p>
        @endforeach
</div>
@endif

<form action="{{ route('login') }}" method="post" class="p-10 bg-white rounded shadow-xl">
    @csrf
    <label>Usuário</label>

    <label>Senha</label>
    
    <button type="submit">Entrar</button>
</form>
@endsection