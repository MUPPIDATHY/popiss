@extends("list.inc.master") 
  @section("title")
  Home
  @endsection
  @section('content')
  @include('list.inc.nav')

  <!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" >
        
        <div class="container-fluid">

            <div class="row  align-items-center justify-content-center"style="background: white;">

                <!-- <div class="col-12 col-md-10"> -->
                    <div class="single-slide owl-carousel">
                    @foreach($slider as $slider)
                    <div class="item">

                        <div class="propertie-img" style="background-image: url(data:image/png;base64,{{$slider->slider}});">
                            <div>

</div>


                  </div>
                    </div>
                    @endforeach
                    </div>

</div></div>
      
     
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Catagory Area Start ***** -->
    <section class="dorne-catagory-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-catagories">
                        <div class="row">
                            <!-- Single Catagory Area -->

                           
                            <div class="col-12 col-sm-6 col-md">
<div class="search">
    <input type="text" name="q" class="searchbox" placeholder="Search">
    <button type="submit" class="searchbtn"><i class="fa
     fa-search"></i></button></div>
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.2s">
                                    <div class="catagory-content">
                                        <img src="{{asset('user')}}/img/core-img/icon-1.png" alt="">
                                        <a href='{{ url("properties") }}'>
                                            <h6>Properties</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.4s">
                                    <div class="catagory-content">
                                        <img src="{{asset('user')}}/img/core-img/icon-2.png" alt="">
                                        <a href="{{ url('listing') }}">
                                            <h6>Business</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                          
                            <!-- Single Catagory Area -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Catagory Area End ***** -->

    <!-- ***** About Area Start ***** -->
    <section class="dorne-about-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content text-center">
                        <h2>Discover your city with <br><span>Dorne</span></h2>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce quis tempus elit. Sed efficitur tortor neque, vitae aliquet urna varius sit amet. Ut rhoncus, nunc nec tincidunt volutpat, ex libero.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area End ***** -->

 <!-- ***** Editor Pick Area Start ***** -->
    <section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100" style="background-image: url(img/bg-img/hero-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Top Offers</h4>
                 </div>
                </div>
            </div>

            <div class="row">
            @foreach($offer as $offer)
                <div class=" col-lg-6">
                            <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.4s">
                        <img src="data:image/png;base64,{{$offer->image}}"  alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="#">{{$offer->buus->name}}</a>
                                <a href="#">{{$offer->buus->city}}</a>
                            </div>
                            
                        </div>
                    </div></div>
                    @endforeach
                     
                
            </div>
            <a id="see" href="{{url('offer')}}">Why wait? See more....</a>
        </div>
    </section>
    <!-- ***** Editor Pick Area End ***** -->
    <!-- ***** Features Destinations Area Start ***** -->
    <section class="dorne-features-destinations-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <h4>Featured Categories</h4>
                    </div>
                </div>
            </div>

            <div class="row">
            @foreach($buscat as $buscat)
  <div class="column">
     <div class="catagory-conten">
<img id="box"src="data:image/png;base64,{{$buscat->image}}" alt="popis" >  
<a href='/buscategory/{{$buscat->id}}'>
                                            <h6 id="h6">{{$buscat->name}}</h6>
                                        </a>
                                        </div></div>
  @endforeach
 
</div>
        </div>
    </section>
    <!-- ***** Features Destinations Area End ***** -->

    

    <!-- ***** Features Events Area Start ***** -->
    <section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50" style="background-image: url(img/bg-img/hero-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Featured events</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                        <div class="feature-events-thumb">
                            <img src="{{asset('user')}}/img/bg-img/event-1.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="{{asset('user')}}/img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>Jazz Concert</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                        <div class="feature-events-thumb">
                            <img src="{{asset('user')}}/img/bg-img/event-2.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="{{asset('user')}}/img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>DeeJay in the house</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">
                        <div class="feature-events-thumb">
                            <img src="{{asset('user')}}/img/bg-img/event-3.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="{{asset('user')}}/img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>Theatre Night outside</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s">
                        <div class="feature-events-thumb">
                            <img src="{{asset('user')}}/img/bg-img/event-4.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="{{asset('user')}}/img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>Wine tasting</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.6s">
                        <div class="feature-events-thumb">
                            <img src="{{asset('user')}}/img/bg-img/event-5.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="{{asset('user')}}/img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>New Moon Party</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.7s">
                        <div class="feature-events-thumb">
                            <img src="{{asset('user')}}/img/bg-img/event-6.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="{{asset('user')}}/img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>Happy hour at pub</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Events Area End ***** -->

    <!-- ***** Clients Area Start ***** -->
    <div class="dorne-clients-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="clients-logo d-md-flex align-items-center justify-content-around">
                        <img src="{{asset('user')}}/img/clients-img/1.png" alt="">
                        <img src="{{asset('user')}}/img/clients-img/2.png" alt="">
                        <img src="{{asset('user')}}/img/clients-img/3.png" alt="">
                        <img src="{{asset('user')}}/img/clients-img/4.png" alt="">
                        <img src="{{asset('user')}}/img/clients-img/5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Clients Area End ***** -->
@endsection