@extends('layouts.layout')

@section('title', 'Pizzería')

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
@endsection

@section('web-title')
    <div class="container-fluid text-center">
        <div class="row py-5">
            <h3><span class="greenItaly">Menu </span><span class="whiteItaly">Pizza </span><span
                    class="redItaly">Restaurant</span></h3>
        </div>
    @endsection

    @section('list')
        <div class="row">
            <div class="offset-md-3 col-md-3 col-12 toppings">
                <h3>Toppings</h3>
                <div id="list">
                    <input class="form-check-input" type="checkbox" value="sausage" id="Sausage" name="Sausage">
                    <label class="form-check-label" for="Sausage">Sausage</label><br>
                    <input class="form-check-input" type="checkbox" value="pepperoni" id="Pepperoni" name="Pepperoni">
                    <label class="form-check-label" for="Pepperoni">Pepperoni</label><br>
                    <input class="form-check-input" type="checkbox" value="ham" id="Ham" name="Ham">
                    <label class="form-check-label" for="Ham">Ham</label><br>
                    <input class="form-check-input" type="checkbox" value="green peppers" id="greenP" name="greenP">
                    <label class="form-check-label" for="greenP">Green Peppers</label><br>
                    <input class="form-check-input" type="checkbox" value="mushrooms" id="Mushrooms" name="Mushrooms">
                    <label class="form-check-label" for="Mushrooms">Mushrooms</label><br>
                    <input class="form-check-input" type="checkbox" value="onions" id="Onions" name="Onions">
                    <label class="form-check-label" for="Onions">Onions</label><br>
                    <input class="form-check-input" type="checkbox" value="pineapple" id="Pineapple" name="Pineapple">
                    <label class="form-check-label" for="Pineapple">Pineapple</label><br>
                </div>
                <br>
                <button type="submit" class="btn btn-outline-dark" id="btNew">New Topping?</button>
            </div>
            <div class="col-md-3 col-12 toppings">
                <h3>Crust</h3>
                <div id="crusts">
                    <input class="form-check-input" type="radio" value="regular" id="Regular" name="Crust">
                    <label class="form-check-label" for="Regular">Regular</label><br>
                    <input class="form-check-input" type="radio" value="deep dish" id="Deep" name="Crust">
                    <label class="form-check-label" for="Deep">Deep Dish</label><br>
                    <input class="form-check-input" type="radio" value="thin" id="Thin" name="Crust">
                    <label class="form-check-label" for="Thin">Thin</label><br>
                </div>
            </div>
            <div class="offset-md-5 col-md-2 col-12">
                <button type="submit" class="btn btn-outline-dark" id="btSel">Select!</button>
                <button type="submit" class="btn btn-outline-dark" id=""><a href="./" >Next</a></button>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-4 col-md-4 col-12">
                <h3 id="result"></h3>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script src="js/script.js"></script>
@endsection
