<!-- Head -->
@extends('includes\layout')
<title>CMDB-Offerte | Products</title>
<!-- Navbar -->
@extends('includes\navigation')

<!-- Page Content -->
@section('content')

    <div class="container">
        <!-- Portfolio Item Heading -->
{{--            <h1 class="my-4">{{$product->name}}</h1>--}}

            <!-- Portfolio Item Row -->
            <div class="row">

                <div class="col-md-8" style=";">
                    <img style="max-height:500px; max-width:500px;" class="img-fluid" src="/img/product_frame.png" alt="">
                </div>
                <div class="col-md-4" >
                    <h3 class="my-3">{{$product->name}}</h3>
                    <p>{{$product->description}}</p>
                    <p>€{{$product->price}}</p>
{{--                    <a href="{{route('product.addToCart', ['id' => $product->id])}}" class="btn btn-success w-25"><i class="fas fa-cart-plus"></i></a>--}}
                </div>
            </div>

@stop
