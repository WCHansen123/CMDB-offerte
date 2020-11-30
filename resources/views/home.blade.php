
@extends('includes/layout')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm header-color">
                <p class="h1 mt-4 pt-2 pl-2 header-textcolor">Neem een kijkje in ons nieuwe assortiment</p>
                <button type="button" class="btn btn-primary btn-sm ml-3"><a class="navbar-login" href="{{route('products.index')}}">Bekijk ons assortiment</a></button>
            </div>
            <div class="col-sm header-color header pr-0">
                <img src="{{asset('img/bg1.jpg')}}" class="img-fluid header-filter img-filter" alt="Responsive image">
            </div>
        </div>
    </div>
@endsection
