<!-- Head -->
@extends('..\includes\layout')
<!-- Page Content -->
@section('content')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center g-1">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="product text-center"> <img src="{{asset('img/product_frame.png')}}" width="250">
                    <div class="about text-left px-3">
                        <h4><a href="{{route('products.show', ['product' => $product])}}">{{$product->name}}</a></h4> <span class="text-muted">{{$product->description}}</span>
                        <h3>€{{$product->price}}</h3>
                    </div>
                        <a href="{{route('addToCart', ['id' => $product->id])}}"><span class="dot"><span class="inner-dot"><i class="fa fa-plus"></i></span></span></a>
                </div>

            </div>
            @endforeach
        </div>
    </div>
@endsection
