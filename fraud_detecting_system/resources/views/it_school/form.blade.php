  <!DOCTYPE html>
    <!--=== Coding by CodingLab | www.codinglabweb.com === -->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!----======== CSS ======== -->
        <link rel="stylesheet" href="form/style.css">
         
        <!----===== Iconscout CSS ===== -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link href="registrar/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="registrar/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="registrar/css/ruang-admin.min.css" rel="stylesheet">
  <link href="registrar/img/logo/logo.png" rel="icon">
        <!--<title>Responsive Regisration Form </title>--> 
    </head>
    
    <body id="page-top">
  <body id="page-top">
  <div id="wrapper">
    @include('user.sidebar')
    
    <!-- TopBar -->
    @include('user.navbar')
    <div class="container-fluid" id="container-wrapper">
        <div class="container">
            <header>Request Form</header>

            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
            {{session()->get('message')}}
            
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    
                  </div>
            

            @endif
    
            <form action="{{url('apply_request')}}" method="POST" enctype="multipart/form-data" >
               
            @csrf
                    <div class="details personal">
                        <span class="title">Dire Dawa University Registrar office Request for Acadamic Record</span>
    
                        <div class="fields">

                            <div class="input-field">
                                <label>First Name</label>
                                <input type="text" placeholder="Enter your name" name="fname" required>
                            </div>
                            <div class="input-field">
                              <label>Last Name</label>
                              <input type="text" placeholder="Enter your Middle name" name="lname" required>
                          </div>
                          <div class="input-field">
                            <label>Grand Father Name </label>
                            <input type="text" placeholder="Enter your name" name="gfname" required>
                        </div>
                        <div class="input-field">
                          <label>ID Number</label>
                          <input type="text" placeholder="Enter ID number" name="id" required>
                      </div>
                      <div class="input-field">
                        <label>Gender</label>
                        <select name="gender" required>
                            <option disabled selected value="" >Select gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
    
                            <div class="input-field">
                                <label>Request Type</label>
                                <select name="request_type" required>
                                   <option disabled selected value="" >Select Request Type</option>
                                  
                                   <option value="To Whom It May Concern">To Whom It May Concern</option>
                                   <option value="Official Transcript">Official Transcript</option>
                                   <option value="Student Copy">Student Copy</option>
                                   <option value="Temporary Certificate">Temporary Certificate</option>
                                   <option value="Orginal Degree">Orginal Degree</option>
                               </select>
                            </div>
    
                            <div class="input-field">
                                <label>Email</label>
                                <input type="email" placeholder="Enter your email" name="email" required>
                            </div>
    
                            <div class="input-field">
                                <label>Mobile Number</label>
                                <input type="number" placeholder="Enter mobile number" name="phone" required>
                            </div>

                            <div class="input-field">
                            <label>Year Of Graduation</label>
                            <input type="date" placeholder="Enter Graduation date" name="year" required>
                        </div>
    
                          <!-- 
                            <div class="row">
                              <legend class="col-form-label col-sm-3 pt-0">
                                Admmision Type
                              </legend>
                              <div class="col-sm-9">
                                <div class="custom-control custom-radio">
                                  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadio1">Regular</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadio2">Extension</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadio3">Weekend</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadio4">Distance</label>
                                </div>
                              </div>
                            </div>
                
                            <div class="row">
                              <legend class="col-form-label col-sm-3 pt-0">
                                Degree  Type
                              </legend>
                              <div class="col-sm-9">
                                <div class="custom-control custom-radio">
                                  <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadio5">Diploma</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadio6">Degree</label>
                                </div>
                                <legend class="col-form-label col-sm-3 pt-0">
                                 
                                </legend>
                                <div class="col-sm-9">
                                  <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio7" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio7">Master's</label>
                                  </div>
                                <div class="custom-control custom-radio">
                                  <input
                                    type="radio"
                                    id="customRadio8"
                                    name="customRadio"
                                    class="col-form-label col-sm-3 pt-0"
                                  />
                                  <label class="custom-control-label" for="customRadio8"
                                    >PHD</label
                                  >
                                </div>
                              </div>
                            </div> -->
                            
                        </div>
                        <div class="col-sm-9">
                        <fieldset class="form-group" name="admission_type" required>
                      <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0">Admission Type</legend>
                        <div class="col-sm-9">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="admission_type" class="custom-control-input" value="Regular" required>
                            <label class="custom-control-label" for="customRadio1" >Regular </label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="admission_type" class="custom-control-input" value="evening" required>
                            <label class="custom-control-label" for="customRadio2" >Evening </label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="admission_type" class="custom-control-input" value="summer" required>
                            <label class="custom-control-label" for="customRadio3" >Summer </label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio4" name="admission_type" class="custom-control-input"value="Distance" required>
                            <label class="custom-control-label" for="customRadio4" >Distance</label>
                          </div>
                        </div>
                      </div>
                    </fieldset>

                    <fieldset class="form-group" name="degree_type" required>
                      <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0">Degree Type</legend>
                        <div class="col-sm-9">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio21" name="degree_type" class="custom-control-input" value="diploma" required>
                            <label class="custom-control-label" for="customRadio21" >Diploma </label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio22" name="degree_type" class="custom-control-input" value="degree" required>
                            <label class="custom-control-label" for="customRadio22" >Degree </label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio23" name="degree_type" class="custom-control-input" value="masters" required>
                            <label class="custom-control-label" for="customRadio23" >Master's </label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio24" name="degree_type" class="custom-control-input" value="PHD" required>
                            <label class="custom-control-label" for="customRadio24" > PHD </label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    </div>
    
                    <div class="details ID">
                        
    
                        <div class="fields">
                          <p>Faculty/School</p>
                          <select class="form-control mb-2" name="school" required>
                            <option disabled selected value="">select faculty</option>
                            <option value="School of Computing">School of Computing</option>
                            <option value="bussiness and economics">bussiness and economics</option>
                          </select>
                          <p>Department</p>
                          <select class="form-control mb-2" name="department" required>
                            <option disabled selected value="">Select Department</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Accounting and Finnace">Accounting and Finnace</option>
                            <option value="Economics">Economics</option>
                          </select>
    
                           
    
                         
    
                            
                         
                      
                          <div  class="input-field">
                            <label for="exampleInputEmail1">Bank Deposit Tr. Ref.</label>
                            <input type="text" placeholder="Bank Deposit Tr. Ref. " name="bankNumber" required>
                           
                           
                          </div>
                      
                          <div class="input-field">
                            <label for="exampleFormControlTextarea1">Address of Instituition</label>
                            <input type="text" placeholder="Address" name="insAddress" required>
                          </div>

                        
                          <div class="input-field">
                            <label for="exampleInputEmail1">Name of Institution to be sent</label>
                            <input type="text" placeholder="Institution" name="insName" required>
                            <input type="hidden" name="user_id" value="{{ old('user_id', auth()->user()->id) }}"> 
                            
                          </div>
                       
                          
                          <div class="input-field1">
                          <label for="text">Attach Receipt of Bank Deposit  </label>
                          
                            <input type="file" class="form-control-file" id="customFile" name="receipt" required>
                            
                          
                          </div>
                          
                        
                       
                          
                          <div class="input-field1">
                          <label for="text">Attach Cost Sharing Letter  </label>
                            <input type="file" class="form-control-file" id="customFile" name="cost" required>
                            
                          
                          
                        </div>
                        <button class="sumbit">
                          <span class="btnText">Submit</span>
                          <i class="uil uil-navigator"></i>
                      </button>
                      
                    </div>
                    </div> 
                </div>
    
               
            </form>
        </div>
</div>
        <!--<script src="script.js"></script>-->
    
    </html>
    
    <script src="registrar/vendor/jquery/jquery.min.js"></script>
  <script src="registrar/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="registrar/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="registrar/js/ruang-admin.min.js"></script>
  <script src="registrar/vendor/chart.js/Chart.min.js"></script>
  <script src="registrar/js/demo/chart-area-demo.js"></script>  
    <script src="form/script.js"></script>
  </body>
</html>
