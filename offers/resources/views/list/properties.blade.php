@extends("list.inc.master") 
  @section("title")
  Home
  @endsection
  @section('content')
  @include('list.inc.nav')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('img/bg_4.jpg');background-position: 50% -25px;" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Properties </h1> 
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home ><i class="ion-ios-arrow-forward"></i></a></span> <span>Properties > <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    @include("list.inc.advance")
					<div class="col-lg-9">
		        <div class="row">
				@foreach($pro as $prop)
		    			<div class="col-md-6 col-lg-4 ftco-animate">
		    				<div class="project">
		    					<div class="img">
				    				<img src="data:image/png;base64,{{$prop->image}}" class="img-fluid" alt="Colorlib Template">
				    				<div class="text">
				    					<span>{{$prop->propcat->category}}</span>
				    					<h3><a href="/properties/{{$prop->id}}">{{$prop->name}} <br> Subdivision</a></h3>
				    				</div>
			    				</div>
			    				<div class="desc pt-3">
			    					<h4 class="price">₹ {{$prop->price}}</h4>
										@if($prop->bedroom==null&&$prop->bothroom==null)
										<p class="h-info"><span class="location">{{$prop->city}}</span></p>
										@else
										<p class="h-info"><span class="location">{{$prop->city}}</span> <span class="details">&mdash; {{$prop->bedroom}}bds, {{$prop->bathroom}}bath</span></p>
			    						@endif
								</div>
		    				</div>
		    			</div>
						@endforeach
		    			
					</div>
					
		    		<div class="row no-gutters my-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
						<li>{!!$pro->links()!!}</li>
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
		</section>
	@endsection