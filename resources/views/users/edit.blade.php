@extends('layouts.app')

@section('title', "Editar o usuário {$user->name}")

@section('content')

<h1>Editar o usuário {{ $user->name }}</h1>

@include('includes.validations-form')


<form action="{{ route('users.update', $user->id) }}" method="post">
    {{-- <input type="hidden" name="_method" value="put"> --}}
    @method('put')
    @include('users._partials.form')
</form>
<br>
<a href="{{ route('users.index') }}">Home</a>
@endsection
