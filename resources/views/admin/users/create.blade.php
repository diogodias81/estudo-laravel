@extends('admin.users.layouts.app')
@section('title','Criar usuario')
@section('content')
<h1> Novo Usuario</h1>
@if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif


<form action="{{route('users.store')}}" method="POST">
    @csrf

    {{-- <input type="text" name="_token" value="{{ csrf_token()}}"> --}}
    <input type="text" name="name" placeholder="Nome" value="{{ old('name')}}">
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
    <input type="password" name="password" placeholder="senha">
    <button type="submit">Enviar </button>
</form>
@endsection
