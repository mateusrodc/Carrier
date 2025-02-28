@extends('layouts.app')
@section('content')

<h1>Novo Usuario</h1>

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <label>Nome: </label>
    <input type="text" name="nome" placeholder="Nome">
    <label>E-mail: </label>
    <input type="email" name="email" placeholder="E-mail">
    <label>Senha: </label>
    <input type="password" name="senha" placeholder="Senha">
    <label>Confirme a senha: </label>
    <input type="password" name="senha2" placeholder="Confirme a senha">

    <button type="submit">Salvar</button>
</form>
@endsection
