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
            <h1 class="mb-2 bread">Properties Single</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="properties.html">Properties <i class="ion-ios-arrow-forward"></i></a></span> <span>Properties Single <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
 @include("list.inc.advance")	
 				<div class="col-md-9 properties-single">
					<div class="single-slider owl-carousel">
				  @foreach($prop->propmul as $pro)
				  <div class="item">
      					<div class="properties-img" style="background-image: url('data:image/png;base64,{{$pro->mulimage}}');"></div>
      				</div>
					  @endforeach
      				
					
      				<!-- <div class="item">
      					<div class="properties-img" style="background-image: url({{asset('user/img/work-2.jpg')}});"></div>
      				</div>
      				<div class="item">
      					<div class="properties-img" style="background-image: url(img/work-3.jpg);"></div>
      				</div>  -->
					
      			</div>
        		<div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
        			<h2>{{$prop->name}}</h2>
        			<p class="rate mb-4">
        				<span class="loc"><a href="#"><i class="icon-map"></i>{{$prop->address}},{{$prop->city}}</a></span>
  						</p>
  						
  						<div class="d-md-flex mt-5 mb-5">
  							<ul>
							    @if($prop->lotarea==null)
								@else
    							<li><span>Lot Area: </span>{{$prop->lotarea}}</li>
								@endif
								@if($prop->bedroom==null)
								@else
    							<li><span>Bed Rooms: </span> {{$prop->bedroom}}</li>
								@endif
								@if($prop->bathroom==null)
								@else
    							<li><span>Bath Rooms: </span>{{$prop->bathroom}}</li>
								@endif
								@if($prop->garage==null)
								@else
    							<li><span>Garage: </span>{{$prop->garage}}</li>
								@endif
    						</ul>
    						<ul class="ml-md-5">
								@if($prop->floorarea==null)
								@else
    							<li><span>Floor Area: </span>{{$prop->floorarea}}</li>
								@endif
								@if($prop->buildyear==null)
								@else
    							<li><span>Year Build:: </span>{{$prop->buildyear}}</li>
								@endif
								@if($prop->stories==null)
								@else
    							<li><span>Stories: </span>{{$prop->stories}}</li>
								@endif
								@if($prop->roofing==null)
								@else
    							<li><span>Roofing: </span>{{$prop->roofing}}</li>
								@endif 
    						</ul>
  						</div>
  						<p>{{$prop->description}}</p>
        		</div>
        		<div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
        			<h3 class="mb-4">Take A Tour</h3>
        			<div class="block-16">
	              <figure>
	                <img src="data:image/png;base64,{{$prop->image}}" alt="Image placeholder" class="img-fluid">
	                <a href="{{$prop->video}}" class="play-button popup-vimeo"><span class="fa fa-play fa-4" aria-hidden="true"></span></a>
	              </figure>
	            </div>
				
        		</div>

        		<div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
        			<h4 class="mb-4">Review &amp; Ratings</h4>
        			<div class="row">
        				<div class="col-md-6">
        					<form method="post" class="star-rating">
									  <div class="form-check">
											<input type="checkbox" class="form-check-input" id="exampleCheck1">
											<label class="form-check-label" for="exampleCheck1">
												<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
											</label>
									  </div>
									  <div class="form-check">
								      <input type="checkbox" class="form-check-input" id="exampleCheck1">
								      <label class="form-check-label" for="exampleCheck1">
								    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 Ratings</span></p>
								      </label>
									  </div>
									  <div class="form-check">
								      <input type="checkbox" class="form-check-input" id="exampleCheck1">
								      <label class="form-check-label" for="exampleCheck1">
								      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5 Ratings</span></p>
								     </label>
									  </div>
									  <div class="form-check">
									    <input type="checkbox" class="form-check-input" id="exampleCheck1">
								      <label class="form-check-label" for="exampleCheck1">
								      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
								      </label>
									  </div>
									  <div class="form-check">
								      <input type="checkbox" class="form-check-input" id="exampleCheck1">
								      <label class="form-check-label" for="exampleCheck1">
								      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
									    </label>
									  </div>
									</form>
        				</div>
        			</div>
        		</div>
		    	</div>
	    	</div>
			</div>
		</section>
		@endsection