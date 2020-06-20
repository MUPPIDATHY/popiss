<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>POPIS ADMIN</title>
  
  <!-- Font Awesome -->
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  
  
  
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('admin/css/adminlte.css')}}">

  
  
  
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="{{asset('admin/plugins/ekko-lightbox/ekko-lightbox.css')}}">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 
      @yield('content')


  <!-- /.control-sidebar -->
</div>
<footer class="main-footer">
    <strong>Copyright &copy; 2020 </strong>
    All rights reserved by<a href="http://popis.in"> POPIS</a>
 
    </div>
  </footer>
<!-- ./wrapper -->

<!-- jQuery -->
  <!-- jQuery UI -->
<!-- Ekko Lightbox -->
<script src="{{asset('admin/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
<script src="{{asset('admin/plugins/ekko-lightbox/ekko-lightbox.js')}}"></script>

<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('admin/js/adminlte.js')}}"></script>
<script >
  // Add active class to the current button (highlight it)
var header = document.getElementById("aside");
var btns = header.getElementsByClassName("nav-link");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  $(this).addClass('active');  });
}


</script>
</body>
</html>
