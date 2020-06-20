@extends("list.inc.master") 
  @section("title")
  Home
  @endsection
  @section('content')
  @include('list.inc.nav')
    <!-- ***** Breadcumb Area Start ***** -->

  <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('user/img/bg_4.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Business offers</h1>
            <p class="breadcrumbs"><span class="mr-2"><i class="fa fa-arrow-right" aria-hidden="true"></i>  <a href="{{ url('/') }}">Home 
</a></span> <span class="mr-2"><a href="properties.html"> <i class="fa fa-arrow-right" aria-hidden="true"></i>
</a></span> <span> offers <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
        <!-- ***** Breadcumb Area end ***** -->

  <section class="offer">
<div class="container-fluid">

          <div class="d-flex flex-row flex-wrap justify-content-center">
            
              <!-- <div class="d-flex flex-column">
                 <a class="image-popup-vertical-fit" href="https://images.unsplash.com/photo-1485963631004-f2f00b1d6606?auto=format&fit=crop&w=668&q=80" title="">
                  <img id="grid" src="https://images.unsplash.com/photo-1485963631004-f2f00b1d6606?auto=format&fit=crop&w=668&q=80" class="img-fluid"></a>
                  <a class="image-popup-vertical-fit" href="https://images.unsplash.com/photo-1485963631004-f2f00b1d6606?auto=format&fit=crop&w=668&q=80" title="">
                  <img id="grid" src="https://images.unsplash.com/photo-1502865787650-3f8318917153?auto=format&fit=crop&w=334&q=80" class="img-fluid"></a>
              </div> -->
              @foreach($offer as $offer)
              <div class="d-flex flex-column">
                <!-- <a class="image-popup-vertical-fit" href="https://images.unsplash.com/photo-1485963631004-f2f00b1d6606?auto=format&fit=crop&w=668&q=80" title="">
                  <img id="grid" src="https://images.unsplash.com/photo-1500816558239-6b91f4256ead?auto=format&fit=crop&w=331&q=80" class="img-fluid"style="padding:  2px;"></a> -->
                  <a class="image-popup-vertical-fit" href="data:image/png;base64,{{$offer->image}}" title="">
                  <img id="grid" src="data:image/png;base64,{{$offer->image}}" class="img-fluid scale"></a>
              </div>
              @endforeach
              <!-- <div class="d-flex flex-column">
                <a class="image-popup-vertical-fit" href="https://images.unsplash.com/photo-1497888329096-51c27beff665?auto=format&fit=crop&w=751&q=80" class="img-fluid scale mb-2" title="">
                  <img id="grid" src="https://images.unsplash.com/photo-1497888329096-51c27beff665?auto=format&fit=crop&w=751&q=80" class="img-fluid scale mb-2"></a>
                  <a class="image-popup-vertical-fit" href="https://images.unsplash.com/photo-1485963631004-f2f00b1d6606?auto=format&fit=crop&w=668&q=80" title="">
                  <img id="grid" src="https://images.unsplash.com/photo-1505253468034-514d2507d914?auto=format&fit=crop&w=334&q=80"  class="img-fluid"></a>
              </div>
              
              <div class="d-flex flex-column">
                  <img id="grid" src="https://images.unsplash.com/photo-1502550900787-e956c314a221?auto=format&fit=crop&w=334&q=80" class="img-fluid m-1 p-1">
                    <img id="grid" src="https://images.unsplash.com/photo-1455853659719-4b521eebc76d?auto=format&fit=crop&w=750&q=80" class="img-fluid image m-1 p-1">
              </div> -->
          </div>
      </div></section>
@stop