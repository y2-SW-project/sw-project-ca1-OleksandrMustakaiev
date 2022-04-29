@extends('layouts.app')

@section ('content')

    <!-- Container 01 - Image -->
    <div class="col-12 position-relative">
            <img src="{{ URL::to('/storage//main.jpg') }}" class="img-fluid">
            <a href="/user/products" class="btn btn-danger button_class">VIEW ALL PRODUCTS</a>
    </div>

    @endsection

