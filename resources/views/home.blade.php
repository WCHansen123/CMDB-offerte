
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

    <!-- Contact -->
    <section class="contact pt-100 pb-100" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-title mb-100">
                     <p>get in touch</p>
                     <h4>contact me</h4>
                  </div>
               </div>
            </div>
            <div class="row text-center">
                  <div class="col-md-8">
                     <form action="#" class="contact-form">
                        <div class="row">
                           <div class="col-xl-6">
                              <input type="text" placeholder="name">
                           </div>
                           <div class="col-xl-6">
                              <input type="text" placeholder="email">
                           </div>
                           <div class="col-xl-6">
                              <input type="text" placeholder="subject">
                           </div>
                           <div class="col-xl-6">
                              <input type="text" placeholder="telephone">
                           </div>
                           <div class="col-xl-12">
                              <textarea placeholder="message" cols="30" rows="10"></textarea>
                              <input type="submit" value="send message">
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-4">
                     <div class="single-contact">
                        <i class="fa fa-map-marker"></i>
                        <h5>Address</h5>
                        <p>661 Lefferts, NY 11203, USA</p>
                     </div>
                     <div class="single-contact">
                        <i class="fa fa-phone"></i>
                        <h5>Phone</h5>
                        <p>(+1) 517 397 7100</p>
                     </div>
                     <div class="single-contact">
                        <i class="fa fa-envelope"></i>
                        <h5>Email</h5>
                        <p>infor@personal.com</p>
                     </div>
                  </div>
            </div>
         </div>
      </section>
@endsection
