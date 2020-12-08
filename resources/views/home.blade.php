
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
    <div class="aboutus-area">
    <div class="container">
        <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">    
                <div class="aboutus-image float-right hidden-sm"><img src="http://bestjquery.com/tutorial/hover-effect/demo206/images/img-2.jpg" alt=""></div>
                </div> 
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aboutus-content ">
                    <h2><p><span>WELCOME TO ABEDESIGNS</span></p>
                      I'M The Best <span>Web Developer</span></h2>
                    
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    
                    <div class="counter ">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
                        <div class="single-counter text-center">
                            <h2 class="counter"><span>15</span></h2>
                            <p>YEARS OF EXPERIENCED</p>
                        </div>
                        
                        <div class="single-counter text-center">
                            <h2 class="counter"><span>100</span></h2>
                            <p>WEBSITES COMPLETED</p>
                        </div>
                        
                        <div class="single-counter text-center">
                            <h2 class="counter"><span>5</span></h2>
                            <p>AWARDS WON</p>
                        </div>
                        
                        <div class="single-counter text-center">
                            <h2 class="counter"><span>10</span></h2>
                            <p>CLIENTS</p>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>   
            

        </div>
    </div>
</div>
@endsection
