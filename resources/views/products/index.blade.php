

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/nav.css') }}"/>
    <!-- products cards styling-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/productscards.css') }}"/>
    
    <title>products</title>
</head>
<body>
<!-- Header -->
<div class="overlay-navigation">
  <nav role="navigation">
    <ul>
      <li><a href="/" data-content="The beginning">Home</a></li>
      <li><a href="{{ URL::to('products') }}" data-content="take a look!">Products</a></li>
      <li><a href="#" data-content="I got game">Skills</a></li>
      <li><a href="#" data-content="Only the finest">Works</a></li>
      <li><a href="/dashboard" data-content="please login">login</a></li>
    </ul>
  </nav>
</div>

<section class="home">
  
  <div class="open-overlay">
    <span class="bar-top"></span>
    <span class="bar-middle"></span>
    <span class="bar-bottom"></span>
  </div>
  <header class="w3-display-container w3-margin-top w3-content w3-wide" style="max-width:1500px;" id="home">

  <img class="w3-image" src="/img/bg1.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Dev</b></span> <span class="w3-hide-small w3-text-light-grey">EpicIT</span></h1>
  </div>
</header>
</section>
<div class="container mt-5">

<div class="row d-flex justify-content-center g-1">
@foreach($products as $product)
        <div class="col-md-4">
            <div class="product text-center mt-3 "> <img src="/img/product_frame.png" width="250">
                <div class="about text-left px-3">
                    <h4>{{$product->name}}</h4> <span class="text-muted">{{$product->description}}</span>
                    <h3>€{{$product->price}}</h3>
                </div> <span class="dot"><span class="inner-dot"><i class="fa fa-plus"></i></span></span>
            </div>
        </div>
        @endforeach
    </div>
    
</div>
<!-- <a href="/product/{{ $product->id }}" class="btn btn-primary">product bekijken</a> -->
<script src="{{ URL::asset('js/nav.js')}}"></script>
</body>

</html>