<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<!-- CSS -->
    <!-- Favicon -->
    

    <link rel="icon" href="{{asset('user/img/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link href="{{asset('user/style.css')}}" rel="stylesheet">

    <!-- Responsive CSS -->
        <link href="{{asset('user/css/others/animate.css')}}" rel="stylesheet">
        <link href="{{asset('user/css/others/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('user/css/others/pe-icon-7-stroke.css')}}" rel="stylesheet">

    <link href="{{asset('user/css/responsive/responsive.css')}}" rel="stylesheet">
        <link href="{{asset('user/css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('user/js/owl/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" integrity="sha256-RdH19s+RN0bEXdaXsajztxnALYs/Z43H/Cdm1U4ar24=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha256-PZLhE6wwMbg4AB3d35ZdBF9HD/dI/y4RazA3iRDurss=" crossorigin="anonymous" />

        
    <!-- Title -->
    <title>POPIS - @yield('title')</title>

    <!-- Favicon -->
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

   
				@yield('content')
    
    <!-- ****** Footer Area Start ****** -->
    <footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website was designed and developed with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://wicmad.com" target="_blank">wicmad</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="footer-social-btns">
                        <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->
    <!-- JS -->
<!-- jQuery-2.2.4 js -->
<script src="{{asset('user/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('user/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap-4 js -->
    <script src="{{asset('user/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('user/js/others/plugins.js')}}"></script>
    <!-- Active JS -->
    <script src="{{asset('user/js/active.js')}}"></script>
        <script src="{{asset('user/js/owl/owl.carousel.min.js')}}"></script>
                <script src="{{asset('user/js/owl/owl.theme.default.min.js')}}"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha256-P93G0oq6PBPWTP1IR8Mz/0jHHUpaWL0aBJTKauisG7Q=" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha256-P93G0oq6PBPWTP1IR8Mz/0jHHUpaWL0aBJTKauisG7Q=" crossorigin="anonymous"></script>
</body>
</html>