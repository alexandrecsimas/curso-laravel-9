@extends('layouts.app')

@section('title', "Editar o usuário {$user->name}")

@section('content')

<h1>Editar o usuário {{ $user->name }}</h1>

@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>

@endif

<form action="{{ route('users.update', $user->id) }}" method="post">
    {{-- {{ csrf_token() }} --}}
    @csrf
    {{-- <input type="hidden" name="_method" value="put"> --}}
    @method('put')
    <input type="text" name="name" placeholder="Nome:" value="{{ $user->name }}">
    <input type="email" name="email" placeholder="E-mail:" value="{{ $user->email }}">
    <input type="password" name="password" placeholder="Senha:">
    <button type="submit">Enviar</button>
</form>
<br>
<a href="{{ route('users.index') }}">Home</a>
@endsection
