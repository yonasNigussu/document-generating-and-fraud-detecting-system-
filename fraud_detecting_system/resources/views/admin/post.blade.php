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
    
  @include('admin.sidebar')
    
    <!-- TopBar -->
    @include('registrar.navbar')
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Posts</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
            @if(session()->has('status'))
            <div class="alert alert-succsse alert-dismissible" role="alert">
            {{session()->get('status')}}
            
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                    
                    
                  </div>
                 
            

            @endif
                  
            <div class="card mb-4">
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                      <th>No.</th>
                        <th>Title</th>
                        <th>Text</th>
                        <th>Image</th>
                        
                        <th>Action</th>
                        
                        
                      </tr>
                    </thead>
                    
                    <tbody>

                    

                      <tr>
                      <td>1</td>
                      <form  action="{{url('update_post')}}"  onsubmit="validateForm(event)" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <td><input type="text" name="title" placeholder="{{$list->title}}"></td>
                        <td><textarea name="text" id="" cols="12" rows="1" placeholder="{{$list->text}}"></textarea></td>
                        <td><input type="file" name="file" placeholder="{{$list->image}}"></td>
                        
                         
                           
                       <td><button type="submite" class="btn btn-primary">post</button>  </td>
                                            
                       </form>
                      </tr>
                      
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            

         
          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>

      <!-- Footer -->
     
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

  
</body>

</html>