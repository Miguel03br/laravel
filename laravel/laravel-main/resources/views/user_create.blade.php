@extends('master')

@section('content')

<h2>Adicionar</h2>


@if (session()->has('message'))
    {{ session()->get('message') }}

@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input type="text" name = "firstName" placeholder="Seu primeiro nome">
    <input type="text" name = "lastName" placeholder="Seu sobrenome">
    <input type="email" name = "email" placeholder="Seu email">
    <input type="password" name = "password" placeholder="Sua senha">
    <button type="submit">Criar</button>
</form>

@endsection