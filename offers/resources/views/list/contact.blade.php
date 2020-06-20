@extends("list.inc.master") 
  @section("title")
  Home
  @endsection
  @section('content')
  @include('list.inc.nav')

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg)">
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="dorne-contact-area d-md-flex" id="contact">
        <!-- Contact Form Area -->
        <div class="contact-form-area equal-height">
            <div class="contact-text">
                <h4>Hello, Get in touch with us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta lorem blandit aliquam eget quis ipsum. Vivamus accumsan consequat ligula non volutpat. Sed mollis orci non cursus vestibulum. Pellentesque vitae est a augue laoreet venenatis sed eu felis. Sed cursus magna nec turpis ullamcorper, eget rutrum felis egestas. Nunc odio ex, fermentum efficitur nunc vitae, efficitur hendrerit diam. Lorem ipsum dolor sit amet, consectetur.</p>
                <div class="contact-info d-lg-flex">
                    <div class="single-contact-info">
                        <h6><i class="fa fa-map-signs" aria-hidden="true"></i> Main Avenue Soho, NY</h6>
                        <h6><i class="fa fa-map-signs" aria-hidden="true"></i> No. 25-33</h6>
                    </div>
                    <div class="single-contact-info">
                        <h6><i class="fa fa-envelope-o" aria-hidden="true"></i> contact@yourbusiness.com</h6>
                        <h6><i class="fa fa-phone" aria-hidden="true"></i> +34 567 22478 49567</h6>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <div class="contact-form-title">
                    <h6>Contact Business</h6>
                </div>
                <form id="contact">
                   @csrf
                    <div id="test"class="row">
                        <div class="col-12 col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="col-12">
                            <input type="text" name="phoneno" class="form-control" placeholder="Pnone Number">
                        </div>
   
                        <div class="col-12">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control" id="Message" cols="30" rows="10" placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn dorne-btn">Send</button>
                        </div>
                    </div>
                </form>
               </div>
               <div id="get" class="text-success text-center"></div>
        </div>
        <!-- Map Area -->
        <div class="dorne-map-area equal-height">
            <div id="googleMap"></div>
        </div>
    </div>
    <!-- ***** Contact Area End ***** -->
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
    <script >
    $("#contact").submit(function(event){
    event.preventDefault();
        $.ajax({
        url: "/contacts",
        type:"POST",
        data:$("form").serializeArray(),
        success:function(){
            $("#test").find("input,textarea").val('').end();
                 $("#get").text('We will contact you Soon...!');
                 
        },
    });
    
});
</script>
@endsection