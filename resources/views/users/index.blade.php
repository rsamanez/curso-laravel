@extends('layout')

@section('content')
        <h1>{{$title}}</h1>
        <ul>
            @forelse ($users as $user)
                <li>{{ $user }}</li>
            @empty
                <li>NO hay usuarios registrados</li>
            @endforelse

        </ul>
@endsection

@section('sidebar')
    <h2>MI PROPIA BARRA</h2>
@endsection