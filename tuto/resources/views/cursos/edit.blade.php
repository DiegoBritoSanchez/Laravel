@extends('layouts.plantilla')
@section('title', 'Editar cursos')
@section('content')
    <h1>
        AQUÍ PODRÁS EDITAR UN CURSO.</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('put')
        <label for="name">Nombre: <br>
            <input type="text" name="name" value="{{ old('name', $curso->name) }}">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror <br>
        <label for="description">Descripcion: <br>
            <textarea name="description" id="" rows="5">{{ old('description', $curso->description) }}</textarea>
        </label>
        @error('description')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror <br>
        <label for="category">
            Categoria <br>
            <input type="text" name="category" value="{{ old('category', $curso->category) }}">
        </label>
        @error('category')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection
