@extends('base')

@section('titulo', 'Inserir dados | usuarios')

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

<form method="post" action="{{ route('usuarios.gravar') }}">
    @csrf
    <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}">
    <br>
    <input type="text" name="username" placeholder="Username" value="{{ old('username') }}">
    <br>
    <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
    <br>
    <input type="password" name="password" placeholder="Password" value="{{ old('password') }}">
    <br>
    <input type="submit" value="Enviar">
</form>
@endsection