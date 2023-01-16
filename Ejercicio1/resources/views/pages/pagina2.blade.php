@extends('layouts.layout')

@section('title', 'Prueba')

@section('svg-bg')
    <div class="container">
        <svg viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet" style="z-index: -2;">

            <path d="M0, 100 C150, 200 350,
            0 500, 100 L500, 00 L0, 0 Z"
                style="stroke: none; 
            fill:rgba(30, 144, 225, 0.5);">
            </path>
        </svg>
    </div>
    <div class="container">
        <svg viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet" style="z-index:-1;">

            <path d="M0, 80 C300, 0 400, 
            300 500, 50 L500, 00 L0, 0 Z"
                style="stroke: none; 
            fill:rgba(153, 50, 204, 0.5);">
            </path>
        </svg>
    </div>
    <div class="container">
        <svg viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet" style="z-index:-3;">

            <path d="M0, 100 C150, 300 350,
            0 500, 100 L500, 00 L0, 0 Z"
                style="stroke: none; 
            fill:rgba(220, 20, 60, 0.5);">
            </path>
        </svg>
    </div>
    <div class="offset-md-5 col-md-2 col-12">
        <button type="submit" class="btn btn-outline-dark" id=""><a href="../public" >Prev</a></button>
    </div>
@endsection