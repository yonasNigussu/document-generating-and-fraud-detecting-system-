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
</head>

<body id="page-top">
  <div id="wrapper">
  @include('user.sidebar')
  
  @include('user.navbar')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Services</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./home">Home</a></li>
             </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <div class="col-lg-6">
              <!-- Modal basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h4 class="m-0 font-weight-bold text-primary">Orginal Degree</h4>
                </div>
                <div class="card-body">
                  <p>Applicants who want to send their Orginal Degree to higher learning institution can submit their request.</p>
                  <a type="button" class="btn btn-light" 
                     href="{{url('apply_form/5')}}" >
                    Apply
                  </a>
                </div>
              </div>
              <!-- modal vertically centered -->
               
            </div>
            <div class="col-lg-6">
              <!-- Modal with scrolling long content -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h4 class="m-0 font-weight-bold text-primary">Temporary Certificate</h4>
                </div>
                <div class="card-body">
                  <p>Applicants who want to send their Temporary Certificate to higher learning institution can submit their request.</p>
                  <a type="button" class="btn btn-light" 
                     href="{{url('apply_form/4')}}">Apply</a>

                 </div>
              </div>
            </div>
            
            <div class="col-lg-6">
              <!-- Modal with scrolling long content -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h4 class="m-0 font-weight-bold text-primary">Student Copy</h4>
                </div>
                <div class="card-body">
                  <p>Applicants who want to send their Student Copy to higher learning institution can submit their request..</p>
                  <a type="button" class="btn btn-light" 
                     href="{{url('apply_form/3')}}">Apply</a>

                 </div>
              </div>
            </div>

            

            <div class="col-lg-6">
              <!-- Modal with scrolling long content -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h4 class="m-0 font-weight-bold text-primary">Official Transcript</h4>
                </div>
                <div class="card-body">
                  <p>Applicants who want to send their official transcript to higher learning institution can submit their request..</p>
                  <a type="button" class="btn btn-light" 
                     href="{{url('apply_form/2')}}">Apply</a>

                 </div>
              </div>
            </div>

            <div class="col-lg-6">
              <!-- Modal with scrolling long content -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h4 class="m-0 font-weight-bold text-primary">To Whom It May Concern</h4>
                </div>
                <div class="card-body">
                  <p>Submit To Whom It May Concern,Medium of Instruction,Spelling/Attachement Requests</p>
                  <a type="button" class="btn btn-light" 
                     href="{{url('apply_for_letter')}}">Apply</a>

                 </div>
              </div>
            </div>

            

            

          </div>
          <!-- Row -->

          <!-- Documentation Link -->
          <div class="row">
            <div class="col-lg-12 text-center">
              <p>For any other documentations you can ask 
                   physicaly.</p>
            </div>
          </div>



        </div>
        <!---Container Fluid-->
      </div>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by <b><a href="https://indrijunanda.gitlab.io/"
                  target="_blank">DDU CS</a></b> </span>
          </div>
        </div>
      </footer>

    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <script src="registrar/vendor/jquery/jquery.min.js"></script>
  <script src="registrar/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="registrar/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="registrar/js/ruang-admin.min.js"></script>
</body>

</html>