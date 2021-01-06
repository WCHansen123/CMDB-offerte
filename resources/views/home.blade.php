
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

    <!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

<!-- Project Section -->
<div class="w3-container w3-padding-32" id="projects">
<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Products</h3>
</div>

<div class="w3-row-padding">
<div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
    <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
    <img src="{{asset('img/product_frame.png')}}" alt="House" style="width:100%">
    </div>
</div>
<div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
    <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
    <img src="{{asset('img/product_frame.png')}}" alt="House" style="width:100%">
    </div>
</div>
<div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
    <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
    <img src="{{asset('img/product_frame.png')}}" alt="House" style="width:100%">
    </div>
</div>
<div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
    <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
    <img src="{{asset('img/product_frame.png')}}" alt="House" style="width:100%">
    </div>
</div>
</div>



<!-- About Section -->
<div class="w3-container w3-padding-32" id="about">
@foreach($pages as $page)
<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">{{$page->name}}</h3>
<p>{{$page->description}}</p>
@endforeach
</div>

<div class="w3-row-padding w3-grayscale">
<div class="w3-col l3 m6 w3-margin-bottom">
    <img src="{{asset('img/pp1.jpg')}}" alt="John" style="width:100%">
    <h3>John Doe</h3>
    <p class="w3-opacity">CEO & Founder</p>
    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
</div>
<div class="w3-col l3 m6 w3-margin-bottom">
    <img src="{{asset('img/pp2.jpg')}}" alt="Jane" style="width:100%">
    <h3>Jane Doe</h3>
    <p class="w3-opacity">Architect</p>
    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
</div>
<div class="w3-col l3 m6 w3-margin-bottom">
    <img src="{{asset('img/pp3.jpg')}}" alt="Mike" style="width:100%">
    <h3>Mike Ross</h3>
    <p class="w3-opacity">Architect</p>
    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
</div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-padding-32" id="contact">
<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
<p>Lets get in touch and talk about your next project.</p>
<form action="/action_page.php" target="_blank">
    <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
    <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
    <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
    <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
    <button class="w3-button w3-black w3-section" type="submit">
    <i class="fa fa-paper-plane"></i> SEND MESSAGE
    </button>
</form>
</div>
<!-- Image of location/map -->
<div class="w3-container">
<img src="{{asset('img/map.jpg')}}" class="w3-image" style="width:100%">
</div>

<!-- End page content -->
</div>
@endsection
