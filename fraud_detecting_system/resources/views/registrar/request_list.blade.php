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
            <h1 class="h3 mb-0 text-gray-800">Request List</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">DataTable</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Request Type</th>
                        <th>Request date</th>
                        <th>payment</th>
                        <th>Status</th>
                        <th>Action</th>
                        
                        
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Request Type</th>
                        <th>Request date</th>
                        <th>payment</th>
                        <th>status</th>
                        <th>Action</th>
                        
                        
                      </tr>
                    </tfoot>
                    <tbody>

                    @foreach($list as $lists)
<?php $a='To Whom It May Concern';?>
<?php $b='approved';?>
                        @if($lists->request_type!=$a)
                        @if($lists->payment==$b)
                      <tr>
                      <td>{{$lists->id}}</td>
                        <td>{{$lists->first_name}} {{$lists->last_name}}</td>
                        
                        <td>{{$lists->request_type}}</td>
                        <td>{{$lists->created_at}}</td>
                        <th><span class="badge badge-success">{{$lists->payment}}</span></th>
                                            <td>
                            @if ($lists->status == 'Rejected')
                                <span class="badge badge-danger">{{$lists->status}}</span>
                            @elseif ($lists->status == 'Accepted')
                                <span class="badge badge-success">{{$lists->status}}</span>
                            @else
                                <span class="badge badge-warning">{{$lists->status}}</span>
                            @endif
                        </td>
                        <td><a href="{{URL::to('/detail',['id' => $lists->id])}}" class="btn btn-sm btn-primary">Detail</a></td>
                        
                         
                      </tr>
                      @endif
                      @endif
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            

          <!-- Documentation Link -->
          <div class="row">
            <div class="col-lg-12">
              <!--<p>DataTables is a third party plugin that is used to generate the demo table below. For more information
                about DataTables, please visit the official <a href="https://datatables.net/" target="_blank">DataTables
                  documentation.</a></p> -->
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