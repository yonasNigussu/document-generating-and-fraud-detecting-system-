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
    @include('user.sidebar')
    
        <!-- TopBar -->
        @include('user.navbar')
        <!-- Topbar -->

        <!-- Container Fluid-->
        @include('user.body')
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <div class="container-fluid" id="container-wrapper">
        <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
            {{session()->get('message')}}
            
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                    
                    
                  </div>
                 
            

            @endif
      <form  action="{{url('feedback')}}"   method="POST" enctype="multipart/form-data" >
           
           @csrf
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">feedback(any message)</h6>
                </div>
                <div class="card-body">
                  
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">@title</span>
                    </div>
                    <input type="text" class="form-control" name="title" placeholder="title" aria-label="Username"
                      aria-describedby="basic-addon1">
                  </div>
                 
                 
                  
                  <div class="input-group mb-3">

                    <div class="input-group-prepend">
                      <span class="input-group-text">Text</span>
                    </div>
                    <input type="hidden" name="user_id" value="{{ old('user_id', auth()->user()->id) }}" > 
                           
                    <textarea class="form-control" name="text" aria-label="With textarea"></textarea>
                  </div>
                  <div class="input-field1">
                  <button class="btn btn-sm btn-primary">
                         <span class="btnText">Submit</span>
                         <i class="uil uil-navigator"></i>
                     </button>
                    </div>
                </div>
              </div>
            </div>
          </div>
</div>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  @include('user.footer')
  <script src="{{asset('registrar/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('registrar/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('registrar/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('registrar/js/ruang-admin.min.js')}}"></script>
  <script src="{{asset('registrar/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('registrar/js/demo/chart-area-demo.js')}}"></script>  
</body>

</html>