
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="registrar/img/logo/logo.png" rel="icon">
  <title>DDU ALUMNI</title>
  <link href="registrar/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="registrar/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="registrar/css/ruang-admin.min.css" rel="stylesheet">
  <link href="registrar/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    
  @include('registrar.sidebar')
    
    <!-- TopBar -->
    @include('registrar.navba1')
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Upload Student Photo</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Upload Photo</h6>
                </div>
                
                <div class="table-responsive p-3">

@if(session()->has('message'))
  <div class="alert alert-success alert-dismissible" role="alert">
  {{session()->get('message')}}
  
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

          
          
        </div>
        
  

  @endif
  @if(session()->has('message1'))
  <div class="alert alert-danger alert-dismissible" role="alert">
  {{session()->get('message1')}}
  
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

          
          
        </div>
        
  

  @endif

           <form action="{{ url('photo') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file[]" class="form-control" required multiple>

           
            
            <button class="btn btn-primary">Upload Photo</button>
            
           </form>
           <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                         
                      <tr>
                      <th>Number</th>
                        <th>Image name  </th>
                        <th>Date</th>
                        
                        
                        
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      <th>Number</th>
                        <th>Image name  </th>
                        <th>Date</th>
                       
                        
                        
                      </tr>
                    </tfoot>
                    <tbody>

                    @foreach($student as $user)

                      <tr>
                        <td>{{ $user->id }}</td>
                    <td>{{$user->image}} </td>
                    <td>{{ $user->created_at }}</td>
                   
                         
                      </tr>
                      
                      @endforeach
                      
                    </tbody>
                  </table>


          <!-- Documentation Link -->
          <div class="row">
            <div class="col-lg-12">
              <!--<p>DataTables is a third party plugin that is used to generate the demo table below. For more information
                about DataTables, please visit the official <a href="https://datatables.net/" target="_blank">DataTables
                  documentation.</a></p> -->
            </div>
          </div>

         
        <!---Container Fluid-->
      </div>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b>CS</b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="registrar/vendor/jquery/jquery.min.js"></script>
  <script src="registrar/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="registrar/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="registrar/js/ruang-admin.min.js"></script>
  <!-- Page level plugins -->
  <script src="registrar/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="registrar/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>