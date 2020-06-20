@extends("list.inc.master") 
  @section("title")
  Home
  @endsection
  @section('content')
  @include('list.inc.nav')
    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area height-700 bg-img bg-overlay" style="background-image: url('data:image/png;base64,{{$bus->image}}');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <div class="map-ratings-review-area d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><img src="img/core-img/map.png" alt=""></a>
                            <a href="#">8.7</a>
                            <a href="#">Write a review</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Single Listing Area Start ***** -->
    <section class="dorne-single-listing-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Listing Content -->
                <div class="col-12 col-lg-8">
                    <div class="single-listing-content">

                        <div class="listing-title">
                            <h4>{{$bus->name}}</h4>
                            <h6>{{$bus->address}},{{$bus->city}},{{$bus->state}},{{$bus->country}}</h6>
                        </div>
                        <div class="single-listing-nav">
                            <nav>
                                <ul id="listingNav">
                                    <li class="active"><a href="#overview">Overview</a></li>
                                    <li><a href="#picks">Popis Picks</a></li>
                                    <li><a href="#review">Reviews</a></li>
                                    <li><a href="#Services">Services</a></li>

                                </ul>
                            </nav>
                        </div>
                        <div class="overview-content mt-50" id="overview">
                            <p>{{$bus->desription}}</p></div>
                            <h2>Services</h2>
                            <div id="Services"class="row mt-5">
                            @foreach($bus->service as $service)
                                <div class="col-6">
                                    <label class="custom-control  mb-3">
                                        <span class="custom-control-description">{{$service->service}}</span>
                                    </label>
                                </div>
                            @endforeach   
                        </div>                   
                 <div class="container">
  
                              <h2 style="padding-bottom:  20px;margin-left: -10px">POPIS PICKS</h2>

        <p><section class="img-gallery-magnific">
        @foreach($bus->mulimage as $mul)
            <div class="magnific-img">
                <a class="image-popup-vertical-fit" href="data:image/png;base64,{{$mul->mulimage}}" title="">
                    <img src="data:image/png;base64,{{$mul->mulimage}}" alt="9.jpg" />
                </a>
            </div>
        @endforeach
            
        </section>
        <div class="clear"></div>
    </p>

</div>
                                                    <!--End image popup-->
                                                <!--     end insta -->            
                         <div class="listing-reviews-area mt-100" id="review"style="overflow: scroll;height: 300px;">
                            <h4>reviews</h4>
                            @foreach($bus->review as $rev)
                            <div class="single-review-area">
                                <div class="reviewer-meta d-flex align-items-center">
                                    <img src="{{asset('user/img/clients-img/1.jpg')}}" alt="">
                                    <div class="reviewer-content">
                                        <div class="review-title-ratings d-flex justify-content-between">
                                            <h5>“{{$rev->heading}}”</h5>
                                            <div class="ratings">
                                               @for($i=0;$i<$rev->rating;$i++)
                                                <img src="{{asset('user/img/clients-img/star-fill.png')}}" alt="">
                                                @endfor
                                                @for($i=$rev->rating;$i<5;$i++)
                                                <img src="{{asset('user/img/clients-img/star-unfill.png')}}" alt="">
                                                @endfor
                                            </div>
                                        </div>
                                        <p>{{$rev->message}}</p>
                                    </div>
                                </div>
                                <div class="reviewer-name">
                                    <h6>{{$rev->name}}</h6>
                                    <p>{{$rev->created_at->format('d F Y')}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>           
                    </div>
                </div>

                <!-- Listing Sidebar -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="listing-sidebar">
                        <!-- Listing Verify -->
                        <div class="listing-verify">
                            <a href="#"><button style="background: green" type="button" class="btn dorne-btn">Verified List
<i class="fa fa-check pr-3"></i></button></a>
                        </div>

                        <!-- Book A Table Widget -->
                        <!-- <div class="book-a-table-widget mt-50">
                            <h6>Book A Table</h6>
                            <form action="#" method="get">
                                <div class="input_field">
                                                    <input type="text" placeholder="What are you finding?" >
                                                    <button class="submit_btn" type="submit"> <i class="fa fa-search"></i> </button>
                                            </div>
                                <select class="custom-select" id="catagories">
                                <option selected>Guest 1</option>
                                <option value="1">Guest 2</option>
                                <option value="3">Guest 3</option>
                                <option value="3">Guest 4</option>
                            </select>
                                <button type="submit" class="btn dorne-btn bg-white text-dark"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                            </form>
                        </div>
 -->
                        <!-- Opening Hours Widget -->
                        @if($offer==null)
                            @else
                        <div class="opening-hours-widget mt-50">
                            <h6>Offer</h6>
                            <ul class="opening-hours">
                            
                            <img src="data:image/png;base64,{{$offer->image}}"/>
                            
                            </ul>
                        </div>
                        @endif  
                         <!-- Opening Hours Widget -->
                        <div class="opening-hours-widget mt-50">
                            <h6>Contact us</h6>
                            <ul class="opening-hours">
                                <li>
                                    <p>{{$bus->name}}</p>
                                    <i class="fa fa-user"></i>
                                </li>
                                <li>
                                    <p>{{$bus->address}},{{$bus->city}},{{$bus->state}},{{$bus->country}}</p>
<i class="fa fa-map-marker" aria-hidden="true"></i>
         <li>(+91){{$bus->phone}}</p>
<i class="fa fa-phone fa-1x" aria-hidden="true"></i>
                                </li>
                                <li>
                                    <p>Whatsapp</p>
<i class="fa fa-phone fa-1x" aria-hidden="true"></i>
                                </li>
                                <li>
                                    <a href="www.google.com">{{$bus->email}}</a>
<i class="fa fa-envelope fa-1x" aria-hidden="true"></i>
                                </li>
                                
                                
                            </ul>
                        </div>

                        <!-- Author Widget -->
                        <div class="author-widget mt-50 d-flex align-items-center">
                            <img src="data:image/png;base64,{{$bus->ownimg}}" alt="">
                            <div class="authors-name">
                                <a href="#">{{$bus->owner}}</a>
                                <p>The Author</p>
                            </div>
                        </div>
                        <!-- Contact Form -->
                        <div class="contact-form contact-form-widget mt-50">
                            <h6>Reviews</h6>
                            <form action="/review" method="post">
                             @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <input type="hidden" value="{{$bus->id}}" name="ident"/>
                                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" name="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" name="heading" class="form-control" placeholder="Your Heading">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="Message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                    </div>
                                                                       
                                    <div class="col-12">
                                        <select name="rating" class="form-control">
                                                <option>Your Rating</option>
                                                <option value="1">1</option>
                                                <option value="2">2 </option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn dorne-btn">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Restaurant Area Start ***** -->
    <section class="dorne-features-restaurant-area bg-default">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4 id="hf">People Also Views</h4>
                      
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                        <!-- Single Features Area -->
                        @foreach($business as $busi)
                        <div class="single-features-area">
                            <img src="data:image/png;base64,{{$busi->image}}" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">8.5</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>{{$busi->name}}</h5>
                                    <p>{{$busi->city}}</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Restaurant Area End ***** -->
    <!-- ***** Single Listing Area End ***** -->

    <!-- ****** Footer Area Start ****** -->
    
@endsection