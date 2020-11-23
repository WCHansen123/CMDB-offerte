

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/nav.css') }}"/>
    <title>Document</title>
    

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
      <img src="/img/product_frame.png" alt="House" style="width:100%">
    </div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
      <img src="/img/product_frame.png" alt="House" style="width:100%">
    </div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
      <img src="/img/product_frame.png" alt="House" style="width:100%">
    </div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
      <img src="/img/product_frame.png" alt="House" style="width:100%">
    </div>
  </div>
</div>

<div class="w3-row-padding">
  <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
      <img src="/img/product_frame.png" alt="House" style="width:99%">
    </div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
      <img src="/img/product_frame.png" alt="House" style="width:99%">
    </div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
      <img src="/img/product_frame.png" alt="House" style="width:99%">
    </div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
      <img src="/img/product_frame.png" alt="House" style="width:99%">
    </div>
  </div>
</div>

<!-- About Section -->
<div class="w3-container w3-padding-32" id="about">
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
    laboris nisi ut aliquip ex ea commodo consequat.
  </p>
</div>

<div class="w3-row-padding w3-grayscale">
  <div class="w3-col l3 m6 w3-margin-bottom">
    <img src="/img/pp1.jpg" alt="Wilco" style="width:100%">
    <h3>Wilco hansen</h3>
    <p class="w3-opacity">Developer</p>
    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
    <img src="/img/pp2.jpg" alt="Theus" style="width:100%">
    <h3>Theus de zeuw</h3>
    <p class="w3-opacity">Developer</p>
    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
    <img src="/img/pp3.jpg" alt="Tony" style="width:100%">
    <h3>Tony Elia Mokhtar</h3>
    <p class="w3-opacity">Developer</p>
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
    <button class="w3-button w3-blue w3-section" type="submit">
      <i class="fa fa-paper-plane"></i> SEND MESSAGE
    </button>
  </form>
</div>

<!-- Image of location/map -->
<div class="w3-container">
<img src="/img/map.jpg" class="w3-image" style="width:100%">
</div>

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
<p>Made by Tony </p>
</footer>
<script src="{{ URL::asset('js/nav.js')}}"></script>
</body>

</html>