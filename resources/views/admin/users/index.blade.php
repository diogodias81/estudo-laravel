@extends('admin.users.layouts.app')
@section('title','Usuarios')
@section('content')
    <h1>Usuarios</h1>

    @if(session()->has('sucess'))
        {{session('sucess')}}

    @endif
    <br>
    <a href="{{route('users.create')}}">Novo</a>
    <table>
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Acões</th>
        </tr>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><a href="{{ route('users.edit',$user)}}">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
        </thead>
    </table>
    {{$users->Links()}}

@endsection
