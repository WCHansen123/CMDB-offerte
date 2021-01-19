<!-- Head -->
@extends('includes/layout')

<!-- @section('content')

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
@stop -->

@section('content')

<div class="container-fluid">
    <div class="content-wrapper">	
		<div class="item-container">	
			<div class="container">	
				<div class="col-md-12">
					<div class="product col-md-3 service-image-left">
                    
						<center>
							<img id="item-display" src="/img/product_frame.png" alt=""></img>
						</center>
					</div>
				</div>
					
				<div class="col-md-7">
					<div class="product-title">{{$product->name}}</div>
					<div class="product-desc">{{$product->description}}</div>
					<div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
					<hr>
					<div class="product-price">€ {{$product->price}}</div>
					<div class="product-stock">In Stock</div>
					<hr>
					<div class="btn-group cart">
						<button type="button" class="btn btn-success">
							Add to cart 
						</button>
					</div>
				</div>
			</div> 
		</div>
	</div>
</div>

@stop