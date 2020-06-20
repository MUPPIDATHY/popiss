@extends("list.inc.master") 
  @section("title")
  Home
  @endsection
  @section('content')
  @include('list.inc.nav')
  <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('user/img/bg_4.jpg')}});" data-stellar-background-ratio="0.5">

      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Business listing</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="properties.html"> <i class="ion-ios-arrow-forward"></i></a></span> <span> listings <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
          
        </div>
      </div>
    </section>

    
  
    <!-- explorer_europe start  -->
    <div class="explorer_europe list_wrap">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="filter_wrap">
                       
                               <!-- <div class="search">
    <input type="text" name="q" class="searchbox" placeholder="Search">
    <button type="submit" class="searchbtn"><i class="fa
     fa-search"></i></button></div>
 -->
                        
                                <div class="hero__categories">
                        <div class="hero__categories__all">
                             <i id="bar"class="fa fa-bars"></i>

                            <span>All Categories</span>
                            <i id="drop"class="fa fa-caret-down"></i>
                        </div>
                        <ul>
                        @foreach($buscat as $buscat)
                           <li><a href="/buscategory/{{$buscat->id}}">{{$buscat->name}}</a></li>
                        @endforeach
                           <!-- <li id="zebra"><a href="#">Fresh Meat</a></li>
                            <li ><a href="#">Vegetables</a></li>
                            <li id="zebra"><a href="#">Fruit & Nut Gifts</a></li>
                            <li ><a href="#">Fresh Berries</a></li>
                            <li id="zebra"><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li id="zebra"><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li id="zebra"><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li id="zebra"><a href="#">Fresh Bananas</a></li> -->
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                        <h3 class="exp_title">{{count($bus)}} Listings are available</h3>
                        <div class="row">
                            @foreach($buss as $bus)
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="data:image/png;base64,{{$bus->image}}" alt="">
                                        </div>
                                        <div class="explorer_bottom d-flex">
                                            
                                            <div class="explorer_info">
                                                <h3><a href="/listing/{{$bus->id}}">{{$bus->name}}</a></h3>
                                                <p>{{$bus->address}},{{$bus->city}},{{$bus->state}},{{$bus->country}}</p>
                                                <ul>
                                                    <li> <i class="fa fa-phone"></i>
                                                        +91{{$bus->phone}}</li>
                                                    <li><i class="fa fa-envelope"></i>{{$bus->email}}</li>
                                                </ul>
                                            </div>
                                            <div class="icon">
                                                <i class="flaticon-beach"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        </div>
                   <div class="row no-gutters my-5">
                   <div class="col text-center">
                   <div class="block-27">
                        <ul>
                        <li>{{$buss->render()}}</li>
                        </ul>
                        <!-- <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href='{{ url("index") }}'>2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                      </ul> -->
                    </div>
                  </div>
                </div>
                </div>
            </div>


        </div>
    </div>
    <!--/ explorer_europe start  -->
    <!--/ explorer_europe start  -->
    
@endsection