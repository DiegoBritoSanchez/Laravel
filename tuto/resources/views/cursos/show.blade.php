@extends('layouts.plantilla')
@section('title', 'Curso ' . $curso->name)
@section('content')
    <h1>BIENVENIDO AL CURSO: {{ $curso->name }}</h1>
    <a href="{{route('cursos.index')}}}}">Volver</a>
    <p><strong>{{ $curso->category }}</strong></p>
    <p>{{ $curso->description }}</p>
@endsection
