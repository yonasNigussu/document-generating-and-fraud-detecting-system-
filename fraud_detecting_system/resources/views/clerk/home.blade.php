<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{asset('registrar/img/logo/logo.png')}}" rel="icon">
  <title>DDU ALUMNI</title>
  <link href="{{asset('registrar/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('registrar/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('registrar/css/ruang-admin.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include('clerk.sidebar')
    
        <!-- TopBar -->
        @include('clerk.navbar')
        <!-- Topbar -->

        <!-- Container Fluid-->
        @include('clerk.body')
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
     @include('clerk.footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{asset('registrar/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('registrar/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('registrar/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('registrar/js/ruang-admin.min.js')}}"></script>
  <script src="{{asset('registrar/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('registrar/js/demo/chart-area-demo.js')}}"></script>  
</body>

</html>