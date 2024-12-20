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

  <style>
    

    

    

    

    input[type="password"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .feedback {
      font-size: 14px;
      color: green;
      margin-top: 5px;
    }

    .feedback.weak {
      color: red;
    }

    .feedback::before {
      content: '\2714'; /* Unicode for checkmark symbol */
      margin-right: 5px;
      visibility: hidden;
    }

    .feedback.show::before {
      visibility: visible;
    }

    .error-message {
      color: red;
      margin-top: 10px;
      display: none;
    }

    .form-actions {
      text-align: center;
      margin-top: 20px;
    }

    .form-actions button {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #2196f3;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .form-actions button:hover {
      background-color: #1976d2;
    }
  </style>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include('admin.sidebar')
    
        <!-- TopBar -->
        @include('registrar.navbar')
        <!-- Topbar -->

        <!-- Container Fluid-->


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">User Profile</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-0">
            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
            {{session()->get('message')}}
            
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    
                  </div>
            

            @endif
</div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                  <!--<li class="nav-item"><a class="nav-link " href="#change_password" data-toggle="tab">Change Password</a></li>-->
                    <li class="nav-item"><a class="nav-link active" href="#personal_info" data-toggle="tab">Personal Information</a></li>
                    
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="personal_info">
                      <form class="form-horizontal" method="POST" action="/update{{ $list[0]->id }} " >
                        @csrf
                        <div class="form-group row">
                          <label for="name" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Name"  name="name" value="{{$list[0]->name}}">

                            <span class="text-danger error-text name_error"></span>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="email" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" placeholder="Email"  name="email" value="{{$list[0]->email}}">
                            <span class="text-danger error-text email_error"></span>
                          </div>
                        </div>
                       
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-sm btn-danger active">Save Changes</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="change_password">
                    
                           @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
            {{session()->get('success')}}
            
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    
                  </div>
            

            @endif   
            @if(session()->has('fail'))
            <div class="alert alert-success alert-dismissible" role="alert">
            {{session()->get('fail')}}
            
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    
                  </div>
            

            @endif 
                    <!--<form class="form-horizontal" action="{{ route('admin.updatePassword', $list[0]->id) }}" method="POST" id="passwordForm" >
                    @csrf
           
                          <div class="form-group row">
                            <label for="new_password" class="col-sm-2 col-form-label">New Password</label>
                            <div class="col-sm-10">
                            
                                     <span class="text-danger error-text newpassword_error ">
                                     <strong ></strong>
                                     </span>
                                  
                              <input type="password" class="form-control " id="newPassword" placeholder="Enter new password" name="new_password">
                              
                              
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="new_password_confirmation" class="col-sm-2 col-form-label">Confirm New Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="confirmPassword" placeholder="ReEnter new password" name="new_password_confirmation">
                              <span class="text-danger error-text cnewpassword_error"></span>
                            </div>
                          </div>
                          <div class="error-message" id="mismatchError"> Passwords do not match.</div>
      <div class="error-message" id="weakError"> Password has to be strong </div>
      <div class="error-message" id="lengthError">Password length should be between greater than 8</div>
   
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-sm btn-danger active" >Update Password</button>
                            </div>
                          </div>
                        </form>-->
                      </div>
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    
 <!---Container Fluid-->
 </div>
      <!-- Footer -->
     @include('registrar.footer')
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
  <script src="registrar/vendor/chart.js/Chart.min.js"></script>
  <script src="registrar/js/demo/chart-area-demo.js"></script> 
  
  
</body>

</html>

