

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
<div class="container">

<div class="row">
  @foreach($products as $product)
  <div class="card float-left" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$product->name}}</h5><p class="card-title">€{{$product->price}}</p>
      <p class="card-text">{{$product->description}}</p>
      <a href="/product/{{ $product->id }}" class="btn btn-primary">product bekijken</a>
    </div>
  </div>
  @endforeach
</div>

    
        <!-- <div class="col-3">
            <div class="card float-left" style="width: 18rem;">
                <div style="max-width: 150px; max-height: 150px;">
                    <img src="{{$product->img_url}}" class="card-img-top img-responsive  " style="margin-left: 50%; margin-right: 50%; max-width: 150px; max-height: 150px;"  alt="productfoto">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5><p class="card-title">€{{$product->price}}</p>
                    <p class="card-text">{{$product->description}}</p>
                    <a href="/product/{{ $product->id }}" class="btn btn-primary">product bekijken</a>
                </div>
            </div>
        </div>

    </div>
</div> -->
<script src="{{ URL::asset('js/nav.js')}}"></script>
</body>

</html>