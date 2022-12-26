@extends('layouts.app')

@section('title', 'Novo Usuário')

@section('content')

<h1>Novo usuário</h1>

@include('includes.validations-form')

<form action="{{ route('users.store') }}" method="post">
    {{-- {{ csrf_token() }} --}}
    @csrf
    @include('users._partials.form')
</form>
<br>
<a href="{{ route('users.index') }}">Home</a>
@endsection
