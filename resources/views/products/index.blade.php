<!-- Head -->
@extends('includes\layout')
<title>CMDB-Offerte | Products</title>
<!-- Navbar -->
@extends('includes\navigation')
<!-- Page Content -->
@section('content')

<div class="container mt-5">

    <div class="row d-flex justify-content-center g-1">
    @foreach($products as $product)
        <div class="col-md-4">
            <div class="product text-center"> <img src="/img/product_frame.png" width="250">

                <div class="about text-left px-3">
                    <h4>{{$product->name}}</h4> <span class="text-muted">{{$product->description}}</span>
                    <h3>€{{$product->price}}</h3>
                </div> <span class="dot"><span class="inner-dot"><i class="fa fa-plus"></i></span></span>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop
<!-- Footer -->
@extends('includes\footer')