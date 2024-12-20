    <!DOCTYPE html>
    <!--=== Coding by CodingLab | www.codinglabweb.com === -->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!----======== CSS ======== -->
        <link rel="stylesheet" href="{{ asset('form/style.css') }}">
        
        <!----===== Iconscout CSS ===== -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link href="{{ asset('registrar/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('registrar/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{asset('registrar/css/ruang-admin.min.css')}}" rel="stylesheet">
  <link href="{{asset('registrar/img/logo/logo.png')}}" rel="icon">
  <link href="{{asset('registrar/img/logo/logo.png')}}" rel="icon">
  
        <!--<title>Responsive Regisration Form </title>--> 
    </head>
    
    <body id="page-top">
  <body id="page-top">
  <div id="wrapper">
    @include('registrar.sidebar')
    
    <!-- TopBar -->
    @include('registrar.navbar')
    <div class="container-fluid" id="container-wrapper">
        <div class="container">
            <header>Detail Form</header>

            @if(session()->has('message'))
            <div class="alert alert-danger alert-dismissible" role="alert">
            {{session()->get('message')}}
            
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                    
                    
                  </div>
                  <a href="{{URL::to('/reject',['id' => $list->id])}}" class="btn btn-sm btn-danger">reject</a>
            

            @endif
    
            <form  method="POST" enctype="multipart/form-data" >
               
            @csrf
                    <div class="details personal">
                        <span class="title">Dire Dawa University Registrar office Detail for Acadamic Record</span>
    
                        <div class="fields">
                       

                          
                            <div class="input-field">
                                <label>First Name</label>
                                <input type="text" placeholder="Enter your name" name="fname" required disabled value="{{$list->first_name}} ">
                            </div>
                            <div class="input-field">
                              <label>Last Name</label>
                              <input type="text" placeholder="Enter your Middle name" name="lname" required disabled value="{{$list->last_name}} ">
                          </div>
                          <div class="input-field">
                            <label>Grand Father Name </label>
                            <input type="text" placeholder="Enter your name" name="gfname" required disabled value="{{$list->grand_father_name}} ">
                        </div>
                        <div class="input-field">
                          <label>ID Number</label>
                          <input type="text" placeholder="Enter ID number" name="id" required disabled value="{{$list->id_number}} ">
                      </div>
                      <div class="input-field">
                          <label>Gender</label>
                          <input type="text" placeholder="Enter ID number" name="id" required disabled value="{{$list->gender}} ">
                      </div>
    
                      <div class="input-field">
                          <label>Request type</label>
                          <input type="text" placeholder="Enter ID number" name="id" required disabled value="{{$list->request_type}} ">
                      </div>
    
                            <div class="input-field">
                                <label>Email</label>
                                <input type="email" placeholder="Enter your email" name="email" required disabled value="{{$list->email}} ">
                            </div>
    
                            <div class="input-field">
                                <label>Mobile Number</label>
                                <input type="text" placeholder="Enter mobile number" name="phone" required disabled value="{{$list->mobile_number}} ">
                            </div>

                            <div class="input-field">
                            <label>Year Of Graduation</label>
                            <input type="text" placeholder="Enter Graduation date" name="year" required disabled value="{{$list->year_of_graduation}} ">
                        </div>
    
                        
                       
                       <div class="input-field">
                          <label>Admission Type</label>
                          <input type="text" placeholder="Enter ID number" name="id" required disabled value="{{$list->admission_type}} ">
                      </div>

                      <div class="input-field">
                          <label>Degree type</label>
                          <input type="text" placeholder="Enter ID number" name="id" required disabled value="{{$list->degree_type}} ">
                      </div>

                      
                    
                        
    
                        
                        <div class="input-field">
                          <label>college</label>
                          <input type="text" placeholder="Enter ID number" name="id" required disabled value="{{$list->college}} ">
                      </div>
                      <div class="input-field">
                          <label>Department</label>
                          <input type="text" placeholder="Enter ID number" name="id" required disabled value="{{$list->department}} ">
                      </div>
                           
    
                         
    
                            
                         
                      
                          
                      
                          <div class="input-field">
                            <label for="exampleFormControlTextarea1">Address of Instituition</label>
                            <input type="text" placeholder="Address" name="insAddress" required disabled value="{{$list->address_of_institution}} ">
                          </div>

                        
                          <div class="input-field">
                            <label for="exampleInputEmail1">Name of Institution to be sent</label>
                            <input type="text" placeholder="Institution" name="insName" required disabled value="{{$list->name_of_institution}} ">
                              
                            
                          </div>
                       
                          
                       
                          
                        
                       
                          
                          
                       <!-- <button class="sumbit">
                          <span class="btnText">Submit</span>
                          <i class="uil uil-navigator"></i>
                      </button>
                      <button class="sumbit">
                          <span class="btnText">Submit</span>
                          <i class="uil uil-navigator"></i>
                      </button>-->
                      <a href="{{URL::to('/generate',['id' => $list->id])}}" class="btn btn-sm btn-primary">check and generate</a>
                      
                    
                    </div> 
                </div>
    
                
            </form>
        </div>
</div>
        <!--<script src="script.js"></script>-->
    
    </html>
    
    <script src="{{ asset('registrar/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('registrar/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('registrar/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('registrar/js/ruang-admin.min.js')}}"></script>
  <script src="{{ asset('registrar/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('registrar/js/demo/chart-area-demo.js')}}"></script>  
    <script src="{{ asset('form/script.js')}}"></script>
  </body>
</html>
