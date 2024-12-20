<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <link href="registrar/img/logo/logo.png')}}" rel="icon">
  <title>RuangAdmin - Dashboard</title>
  <link href="{{ asset('registrar/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('registrar/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('registrar/css/ruang-admin.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    
    
        <!-- TopBar -->
        <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          
          <ul class="navbar-nav ml-auto">
           
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
            <x-app-layout>

</x-app-layout>
              
            </li>
          </ul>
        </nav>
        <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../home">Home</a></li>
             
            </ol>
        <!-- Topbar -->

        <!-- Container Fluid-->
      

   <x-slot name="title">
        {{ __('Profile') }}
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            

            
        </div>
    </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
     @include('user.footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{ asset('registrar/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('registrar/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('registrar/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('registrar/js/ruang-admin.min.js')}}"></script>
  <script src="{{ asset('registrar/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('registrar/js/demo/chart-area-demo.js')}}"></script>  
</body>

</html>