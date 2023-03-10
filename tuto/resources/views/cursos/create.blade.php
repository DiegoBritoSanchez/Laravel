@extends('layouts.plantilla')
@section('title', 'Crear cursos')
@section('content')
    <h1>
        AQUÍ PODRÁS CREAR UN CURSO.</h1>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label for="name">Nombre: <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror <br>
        <label for="description">Descripcion: <br>
            <textarea name="description" id="" rows="5">{{old('description')}}</textarea>
        </label>
        @error('description')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror <br>
        <label for="category">
            Categoria <br>
            <input type="text" name="category" value="{{old('category')}}">
        </label>
        @error('category')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection
