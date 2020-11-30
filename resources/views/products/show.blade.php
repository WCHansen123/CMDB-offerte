<!-- Head -->
@extends('includes\layout')

@section('content')

    <div class="container ">
        {{-- product name --}}
        <h2>{{$product->name}}</h2>
        <div class="row">
            {{-- product responsive image --}}
            <div class="col-md-6 underline">
                <img style="max-height:600px; max-width:600px;" class="mx-auto d-block" src="/img/product_frame.png" alt="product">
            </div>
            {{-- product price --}}
            <div>
                <h4>€ {{$product->price}}</h4>
                <button type="button" class="btn btn-primary"><a class="navbar-login" href="{{route('addToCart', ['id' => $product->id])}}">+ In winkelwagen</a></button>
            </div>
        </div>
        <div class="row">
            {{-- product description --}}
            <div class="col-md-6">
                <h4>
                    Productbeschrijving
                </h4>
                <p>
                    {{$product->description}}
                </p>
            </div>
        </div>
    </div>
@stop
