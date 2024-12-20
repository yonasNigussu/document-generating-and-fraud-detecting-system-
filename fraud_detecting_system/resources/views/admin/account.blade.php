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
            <h1 class="h3 mb-0 text-gray-800">Request List</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">

            @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
            @if(session()->has('status'))
            <div class="alert alert-succsse alert-dismissible" role="alert">
            {{session()->get('status')}}
            
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                    
                    
                  </div>
                 
            

            @endif
                  
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h4>
                        
                        <button type="button" class="btn btn-primary active " data-bs-toggle="modal" data-bs-target="#exampleModal" id="btn"> Add User</button>
                    </h4>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                      <th>No.</th>
                        <th>Name</th>
                        <th>ID Number</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                        
                        
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      <th>N0.</th>
                        <th>Name</th>
                        <th>ID Number</th>
                        <th>Email</th>
                        <th>Action</th>
                        <th>Action</th>
                        
                        
                      </tr>
                    </tfoot>
                    <tbody>

                    @foreach($list as $lists)

                      <tr>
                      <td>{{$lists->id}}</td>
                        <td>{{$lists->name}}</td>
                        <td>{{$lists->id_number}}</td>
                        <td>{{$lists->email}}</td>
                        <td>@if($lists->acc_status=='1')
                          <a href="{{url('/delete-user'.$lists->id)}}"  class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to block this user?')">Deactive </a>
                          @elseif ($lists->acc_status == '2')
                          <a href="{{url('/un_block'.$lists->id)}}" class="btn btn-sm btn-success" onclick="return confirm('Are you sure you want to unblock this user?')">Active</a>

                          @endif
                        </td>
                                            
                        <td>
                            <!--<button href="{{url('/profile')}}" type="button" value="{{$lists->id}}" class="btn btn-sm editbtn btn-primary">UPDATE</button></td>-->
                            <a href="{{url('/profile'.$lists->id)}}"  class="btn btn-sm btn-success">
                                Edit </a>
                                <a href="{{url('/reset'.$lists->id)}}"  class="btn btn-sm btn-primary" onclick="return confirm('Are you sure you want to reset this user password?')">
                                Reset </a> 
                                
                           
                        </td>
                      </tr>
                      
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add user data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('add-user') }}" method="POST">
       @csrf
       
      
      
       <div class="modal-body">

       <div class="form-group row">
              <label class="col-sm-3 col-form-label">ID number</label>
              <div class="col-sm-9">
                <input type="text" class="form-control @error ('id_number') is-invalid @enderror"  name="id_number" required placeholder="Enter id number">
              </div>
              @error('id_number')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
         </div>

       <div class="form-group row">
              <label class="col-sm-3 col-form-label">Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control"  name="name" required placeholder="Enter name">
              </div>
            
     </div>

     <div class="form-group row">
              <label class="col-sm-3 col-form-label">Middle Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control"  name="last_name" required placeholder="Enter father name">
              </div>
             
     </div>

     <div class="form-group row">
              <label class="col-sm-3 col-form-label">Last Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control "  name="grand_father_name" required placeholder="Enter grand-father name">
              </div>
              
     </div>
     <div class="form-group row">
              <label class="col-sm-3 col-form-label">User type</label>
              <div class="col-sm-9">
              <select name="usertype" class="form-control" required>
   <option disabled selected >Select User Type</option>
   
   <option value="0">Student</option>
   <option value="2">Schoolhead</option>
   <option value="6">Other</option>
   </select>
              </div>
              
     </div>
     
     <div class="form-group row">
              <label class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                <input type="email" class="form-control @error ('email') is-invalid @enderror"  name="email" required placeholder="Enter email">
              </div>
              @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
     </div>
     
     <!--<div class="form-group row">
              <label class="col-sm-3 col-form-label">Phone</label>
              <div class="col-sm-9">
                <input type="tel" class="form-control"  name="phone" required placeholder="Enter phone number">
              </div>
            @ @error('current_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
     </div>-->
     
     <div class="form-group row">
              <label class="col-sm-3 col-form-label">Password</label>
              <div class="col-sm-9">
                <input type="password" class="form-control @error ('password') is-invalid @enderror"  name="password" required placeholder="Enter password">
              </div>
              @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
     </div>
     <div class="form-group row">
              <label class="col-sm-3 col-form-label">Conform Password</label>
              <div class="col-sm-9">
                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation"   required placeholder="Enter password">
              </div>
     </div>
     <div class="modal-footer">
       <div class="modal-footer">
          <button type="button" class="btn btn-danger active" data-dismiss="modal"> 
            <i class="iconfont iconfont-eye-alt"></i>
            Close
          </button>
          <button type="submit" class="btn btn-success waves-light active" > 
            <i class="iconfont iconfont-check-circled"></i>
            Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('delete-user') }}" method="POST">
         @csrf 
         @method('Delete')

         <h4>Are you sure you want to delete the user?</h4>
         <input type="hidden" id="deleting_id" name="delete_user_id">

      
       
         <div class="modal-footer">
       <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"> 
            <i class="iconfont iconfont-eye-alt"></i>
            Cancel
          </button>
          <button type="submit" class="btn btn-danger waves-light" > 
            <i class="iconfont iconfont-check-circled"></i>
            Yes</button>
        </div>
      </div>
      </form>
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

  <Script>
    document.addEventListener('DOMContentLoaded', function() {
var nameInput = document.querySelector('input[name="name"]');
nameInput.addEventListener('input', function(e) {
  var inputValue = e.target.value;
  var sanitizedValue = inputValue.replace(/[^a-zA-Z\s]/g, '');
  e.target.value = sanitizedValue;
});
});
document.addEventListener('DOMContentLoaded', function() {
var nameInput = document.querySelector('input[name="last_name"]');
nameInput.addEventListener('input', function(e) {
  var inputValue = e.target.value;
  var sanitizedValue = inputValue.replace(/[^a-zA-Z\s]/g, '');
  e.target.value = sanitizedValue;
});
});

document.addEventListener('DOMContentLoaded', function() {
var nameInput = document.querySelector('input[name="grand_father_name"]');
nameInput.addEventListener('input', function(e) {
  var inputValue = e.target.value;
  var sanitizedValue = inputValue.replace(/[^a-zA-Z\s]/g, '');
  e.target.value = sanitizedValue;
});
});

document.addEventListener('DOMContentLoaded', function() {
var nameInput = document.querySelector('input[name="id_number"]');
nameInput.addEventListener('input', function(e) {
  var inputValue = e.target.value;
  var sanitizedValue = inputValue.replace(/[^0-9]/g, '');
  e.target.value = sanitizedValue;
});
});
  </Script>

  <script src="registrar/vendor/jquery/jquery.min.js"></script>
  <script src="registrar/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="registrar/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="registrar/js/ruang-admin.min.js"></script>
  <!-- Page level plugins -->
  <script src="registrar/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="registrar/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->

  
  <script type="text/javascript"> 
  $('#btn').on('click', function(){
    $('#exampleModal').modal('show');

    
  });

  
  </script>
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });

    $(document).ready(function () {

      $(document).on('click', '.deletebtn', function (){
        var user_id = $(this).val();
        $('#deleteModal').modal('show');
        $('#deleting_id').val(user_id);
      });
    });

    $(document).ready(function () {
      $(document).on('click','.editbtn', function () {
        var user_id= $(this).val();
        //$('#editModal').modal('show');

            $.ajax({
                type: "GET",
                url: "/edit-user/"+user_id,
                success: function (response){
                  
                  
                  $('#name').val(response.user.name);
                  $('#usertype').val(response.user.usertype);
                  $('#email').val(response.user.email);
                  $('#phone').val(response.user.phone);
                  $('#address').val(response.user.address);
                  $('#password').val(response.user.password);
                  $('#user_id').val(user_id);

                }
            });
      });  
      
    });


  </script>
<script>
    function sanitizeInput(element) {
      var inputValue = element.value;
      var sanitizedValue = inputValue.replace(/[^A-Za-z\s]/g, '');
      element.value = sanitizedValue;
    }

    function validateEmail(input) {
      var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      var errorElement = document.getElementById('emailError');

      if (!regex.test(input.value)) {
        errorElement.textContent = 'Invalid email address.';
      } else {
        errorElement.textContent = '';
      }
    }

    function validatePhone(input) {
      var regex = /^09\d{8}$/;
      var errorElement = document.getElementById('phoneError');

      if (!regex.test(input.value)) {
        errorElement.textContent = 'Phone number must start with 09 and have 10 digits.';
      } else {
        errorElement.textContent = '';
      }
    }

    function checkPasswordStrength(input) {
      var password = input.value;
      var strengthIndicator = document.getElementById('passwordStrength');
      var strengthText = '';

      if (password.length >= 8 && isPasswordStrong(password)) {
        strengthText = 'Strong';
        strengthIndicator.classList.remove('password-strength--weak');
        strengthIndicator.classList.add('password-strength--strong');
      } else {
        strengthText = 'Weak';
        strengthIndicator.classList.remove('password-strength--strong');
        strengthIndicator.classList.add('password-strength--weak');
      }

      strengthIndicator.textContent = strengthText;
    }

    function checkPasswordMatch(input) {
      var newPasswordInput = document.getElementById('newPassword');
      var confirmPasswordInput = input;
      var confirmPasswordError = document.getElementById('confirmPasswordError');

      if (newPasswordInput.value !== confirmPasswordInput.value) {
        confirmPasswordError.textContent = 'Passwords do not match.';
      } else {
        confirmPasswordError.textContent = '';
      }
    }

    function isPasswordStrong(password) {
      // Custom logic to determine password strength
      // You can modify this function to fit your requirements
      return password.length >= 8 && /[a-z]/.test(password) && /[A-Z]/.test(password) && /[0-9]/.test(password);
    }

    document.getElementById('userForm').addEventListener('submit', function (event) {
      event.preventDefault();
      var form = event.target;
      var newPasswordInput = document.getElementById('newPassword');
      var confirmPasswordInput = document.getElementById('confirmPassword');
      var passwordError = document.getElementById('passwordError');
      var confirmPasswordError = document.getElementById('confirmPasswordError');

      if (!isPasswordStrong(newPasswordInput.value)) {
        passwordError.textContent = 'Password must be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, one number, and one special character.';
      } else {
        passwordError.textContent = '';
      }

      if (newPasswordInput.value !== confirmPasswordInput.value) {
        confirmPasswordError.textContent = 'Passwords do not match.';
      } else {
        confirmPasswordError.textContent = '';
        // Uncomment the line below to submit the form
        // form.submit();
      }
    });
  </script>
</body>

</html>