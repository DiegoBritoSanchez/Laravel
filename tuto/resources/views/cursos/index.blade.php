@extends('layouts.plantilla')
@section('title', 'Cursos')
@section('content')
    <h1>BIENVENIDO A LA PÁGINA PRINCIPAL DE CURSOS.</h1>
    <ul>
        @foreach ($cursos as $curso)
            <li>{{$curso->name}}</li>
        @endforeach
    </ul>
@endsection 
