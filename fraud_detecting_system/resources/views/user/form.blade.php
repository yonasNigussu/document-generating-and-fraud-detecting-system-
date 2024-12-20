  <!DOCTYPE html>
    <!--=== Coding by CodingLab | www.codinglabweb.com === -->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!----======== CSS ======== -->
        <link rel="stylesheet" href="{{asset('form/style.css')}}">
         
        <!----===== Iconscout CSS ===== -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link href="{{asset('registrar/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('registrar/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('registrar/css/ruang-admin.min.css')}}" rel="stylesheet">
  <link href="{{asset('registrar/img/logo/logo.png')}}" rel="icon">
        <!--<title>Responsive Regisration Form </title>--> 

        <script> 
document.addEventListener('DOMContentLoaded', function() {
var nameInput = document.querySelector('input[name="fname"]');
nameInput.addEventListener('input', function(e) {
  var inputValue = e.target.value;
  var sanitizedValue = inputValue.replace(/[^a-zA-Z\s]/g, '');
  e.target.value = sanitizedValue;
});
});

function sanitizeLastName(event) {
var input = event.target;
input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
}

function sanitizeGrandFatherName(event) {
var input = event.target;
input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
}

function validateIDNumber(event) {
var input = event.target;
var id = input.value;
var error = document.getElementById("id-error");

if (id.length !== 7 || isNaN(id)) {
  error.style.display = "block";
  input.setCustomValidity("Invalid ID number");
} else {
  error.style.display = "none";
  input.setCustomValidity("");
}
}

function isNumberKey(event) {
var charCode = event.which ? event.which : event.keyCode;
if (charCode > 31 && (charCode < 48 || charCode > 57)) {
  return false;
}
return true;
}

function validatePhoneNumber(event) {
var input = event.target;
var phoneNumber = input.value;
var error = document.getElementById("phone-error");

if (!/^[0-9]{10}$/.test(phoneNumber) || !(phoneNumber.startsWith("09") || phoneNumber.startsWith("07"))) {
  error.style.display = "block";
  input.setCustomValidity("Invalid phone number");
} else {
  error.style.display = "none";
  input.setCustomValidity("");
}
}

function isNumberKey(event) {
var charCode = event.which ? event.which : event.keyCode;
if (charCode !== 8 && (charCode < 48 || charCode > 57)) {
  return false;
}
return true;
}


function validateEmail(event) {
var emailInput = event.target;
var emailError = document.getElementById("email-error");
var email = emailInput.value;
var isValid = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email);

if (email.includes('@') && email.includes('.') && isValid) {
emailError.style.display = "none";
emailInput.setCustomValidity("");
} else {
emailError.textContent = "Please enter a valid email address";
emailError.style.display = "block";
emailInput.setCustomValidity("Invalid email address");
}
}

var emailInput = document.getElementById("email");
emailInput.addEventListener("input", validateEmail);

var form = document.getElementById("myForm");
form.addEventListener("submit", function(event) {
var emailInput = document.getElementById("email");
var email = emailInput.value;

if (!email.includes('@') || !email.includes('.')) {
event.preventDefault();
alert("Please enter a valid email address");
}
});



function sanitizeAddress(event) {
var input = event.target;
input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
}





var yearInput = document.getElementById("yearInput");
var yearError = document.getElementById("year-error");

yearInput.addEventListener("input", validateYear);

function validateYear() {
var graduationDate = new Date(yearInput.value);
var currentYear = new Date().getFullYear();

if (graduationDate.getFullYear() <= currentYear) {
  yearError.style.display = "none";
  yearInput.setCustomValidity("");
} else {
  yearError.style.display = "block";
  yearInput.setCustomValidity("Invalid year of graduation");
}
}

var requestTypeSelect = document.getElementById("requestTypeSelect");
var requestTypeError = document.getElementById("request-type-error");

requestTypeSelect.addEventListener("change", validateRequestType);

function validateRequestType() {
if (requestTypeSelect.value === "") {
  requestTypeError.style.display = "block";
  requestTypeSelect.setCustomValidity("Invalid request type");
} else {
  requestTypeError.style.display = "none";
  requestTypeSelect.setCustomValidity("");
}
}

var fileInput = document.getElementById("customFile");
var error = document.getElementById("receipt-error");

fileInput.addEventListener("change", validateFile);

function validateFile() {
var fileName = fileInput.value;
var fileExt = fileName.slice(fileName.lastIndexOf(".") + 1).toLowerCase();

if (fileName === "" || fileExt !== "pdf") {
  error.style.display = "block";
  fileInput.setCustomValidity("Invalid file. Please attach a PDF file.");
} else {
  error.style.display = "none";
  fileInput.setCustomValidity("");
}
}



</script>

<script>
$(document).ready(function() {
$('fieldset[name="admission_type"]').on('change', function() {
  validateAdmissionType();
});

$('fieldset[name="degree_type"]').on('change', function() {
  validateDegreeType();
});

function validateAdmissionType() {
  var selectedOption = $('input[name="admission_type"]:checked').val();

  if (!selectedOption) {
    $('fieldset[name="admission_type"]').attr('aria-invalid', true);
  } else {
    $('fieldset[name="admission_type"]').attr('aria-invalid', false);
  }
}

function validateDegreeType() {
  var selectedOption = $('input[name="degree_type"]:checked').val();

  if (!selectedOption) {
    $('fieldset[name="degree_type"]').attr('aria-invalid', true);
  } else {
    $('fieldset[name="degree_type"]').attr('aria-invalid', false);
  }
}
});

function validateBankNumber() {
var bankNumberInput = document.getElementById("bankNumber");
var bankNumber = bankNumberInput.value;
var error = document.getElementById("bankNumber-error");

if (!/^\d{13}$/.test(bankNumber)) {
error.style.display = "block";
bankNumberInput.setCustomValidity("Please enter a 13-digit number.");
} else {
error.style.display = "none";
bankNumberInput.setCustomValidity("");
}
}

document.getElementById("bankNumber").addEventListener("input", function(event) {
var input = event.target;
input.value = input.value.replace(/\D/g, ""); // Remove non-digit characters
validateBankNumber();
});


</script>
<script>
document.querySelector('select[name="gender"]').addEventListener('change', function(event) {
var select = event.target;
var error = document.getElementById("gender-error");

if (select.value === "") {
  error.style.display = "block";
  select.setCustomValidity("Invalid gender selection");
} else {
  error.style.display = "none";
  select.setCustomValidity("");
}
});

function validateFaculty() {
var faculty = document.getElementsByName("school")[0];
var error = document.getElementById("school-error");

if (faculty.value === "") {
error.style.display = "block";
faculty.setCustomValidity("Please select a faculty/school.");
} else {
error.style.display = "none";
faculty.setCustomValidity("");
}
}

// function validateDepartment() {
// var department = document.getElementsByName("department")[0];
// var error = document.getElementById("department-error");

// if (department.value === "") {
// error.style.display = "block";
// department.setCustomValidity("Please select a department.");
// } else {
// error.style.display = "none";
// department.setCustomValidity("");
// }
// }

// // Attach event listeners
// document.getElementsByName("school")[0].addEventListener("change", validateFaculty);
// document.getElementsByName("department")[0].addEventListener("change", validateDepartment);


var fileInput = document.getElementById("customFile");
var error = document.getElementById("cost-error");

fileInput.addEventListener("change", validateFile);

function validateFile() {
var fileName = fileInput.value;
var fileExt = fileName.slice(fileName.lastIndexOf(".") + 1).toLowerCase();

if (fileName === "" || fileExt !== "pdf") {
  error.style.display = "block";
  fileInput.setCustomValidity("Invalid file. Please attach a PDF file.");
} else {
  error.style.display = "none";
  fileInput.setCustomValidity("");
}
}

</script>


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
    
            <form  action="{{url('apply_request')}}"  onsubmit="validateForm(event)" method="POST" enctype="multipart/form-data" >
           
           @csrf
                   <div class="details personal">
                       <span class="title">Dire Dawa University Registrar office Request for Acadamic Record</span>
   
                       <div class="fields">
   
                           <div class="input-field">
                               <label for="name">First Name</label>
                               <input type="text" value="{{$list->first_name}}"  placeholder="Enter your name" name="fname"  pattern="[A-Za-z\s]+" title="Only alphabetic characters are allowed" required>
                           </div>
                           <div class="input-field">
                             <label>Last Name</label>
                            
                            
   
                             <input type="text" value="{{$list->last_name}}"  placeholder="Enter your last name" name="lname" pattern="[A-Za-z]+" oninput="sanitizeLastName(event)" required>
                         </div>
                         <div class="input-field">
                           <label>Grand Father Name </label>
                           
                           <input type="text" value="{{$list->grand_father_name}}"  placeholder="Enter your Grand Father name" name="gfname" oninput="sanitizeGrandFatherName(event)" required>
                       </div>
                       <div class="input-field">
                         <label>ID Number</label>
                      
   
                         <input type="text" value="{{$list->account_id}}"  placeholder="Enter ID number" name="id" oninput="validateIDNumber(event)" onkeypress="return isNumberKey(event)" required>
   <small id="id-error" style="color: red; display: none;">Please enter a 7-digit ID number.</small>
   
   
                     </div>
                     <div class="input-field">
   <label>Gender</label>
   <input type="text" value="{{$list->gender}}"  placeholder="Enter your Grand Father name" name="gender" oninput="sanitizeGrandFatherName(event)" required>
                      
   <small id="gender-error" style="color: red; display: none;">Please select a gender.</small>
   </div>
   
   
                   <div class="input-field">
   <label>Request Type</label>
   <select name="request_type" id="requestTypeSelect" required>
   <option  selected value="">Select Request Type</option>
   @if($id=='1')
   <option value="To Whom It May Concern"selected>To Whom It May Concern</option>
   @elseif($id=='2')
   <option value="Official Transcript"selected>Official Transcript</option>
   @elseif($id=='3')
   <option value="Student Copy"selected>Student Copy</option>
   @elseif($id=='4')
   <option value="Temporary Certificate"selected>Temporary Certificate</option>
   @elseif($id=='5')
   <option value="Original Degree"selected>Original Degree</option>
   @endif
   </select>
   <small id="request-type-error" style="color: red; display: none;">Please select a valid request type.</small>
   </div>
   
                           <div class="input-field">
   <label>Email</label>
   <input type="email" value="{{$list->email}}"  placeholder="Enter your email" name="email" id="emailInput" oninput="validateEmail(event)" required>
   <small id="email-error" style="color: red; display: none;">Please enter a valid email address.</small>
   </div>
   
                           <div class="input-field">    
                             <span id="phoneNumberError" class="error"></span>
                               <label for="phoneNumber">Mobile Number</label>
                               <input type="text" value="{{$list->mobile_number}}"  placeholder="Enter mobile number" name="phone" oninput="validatePhoneNumber(event)" onkeypress="return isNumberKey(event)" required>
                               <small id="phone-error" style="color: red; display: none;">Please enter a valid 10-digit phone number starting with 09.</small>
                           </div>
   
                        
   
   
   
                     <div class="input-field">
   <label>Year Of Graduation</label>
   <input type="number" value="{{$list->year_of_graduation}}"  placeholder="Enter Graduation date" name="year" id="yearInput" min="2002" max="2023" required>
   <small id="year-error" style="color: red; display: none;">Please enter a valid year of graduation.</small>
   </div>
   
                        
                           
                       </div>
                       <div class="col-sm-9">
   <fieldset class="form-group" name="admission_type"   required>
   <div class="row">
     <legend class="col-form-label col-sm-3 pt-0">Admission Type</legend>
     <div class="col-sm-9">
       <div class="custom-control custom-radio">
         <input type="radio"  id="customRadio1" name="admission_type" class="custom-control-input" value="Regular" required checked>
         <label class="custom-control-label"  for="customRadio1">Regular</label>
       </div>
       <div class="custom-control custom-radio">
         <input type="radio" id="customRadio2" name="admission_type" class="custom-control-input" value="evening" required disabled>
         <label class="custom-control-label" for="customRadio2" >Evening</label>
       </div>
       <div class="custom-control custom-radio">
         <input type="radio" id="customRadio3" name="admission_type" class="custom-control-input" value="summer" required disabled>
         <label class="custom-control-label" for="customRadio3">Summer</label>
       </div>
       <div class="custom-control custom-radio">
         <input type="radio" id="customRadio4" name="admission_type" class="custom-control-input" value="Distance" required disabled>
         <label class="custom-control-label" for="customRadio4">Distance</label>
       </div>
     </div>
   </div>
   <small id="admission-type-error" style="color: red; display: none;">Please select an admission type.</small>
   </fieldset>
   
   <fieldset class="form-group" name="degree_type" required>
   <div class="row">
     <legend class="col-form-label col-sm-3 pt-0">Degree Type</legend>
     <div class="col-sm-9">
      
       <div class="custom-control custom-radio">
         <input type="radio" id="customRadio22" name="degree_type" class="custom-control-input" value="degree" required checked>
         <label class="custom-control-label"  for="customRadio22">Degree</label>
       </div>
       <div class="custom-control custom-radio">
         <input type="radio" id="customRadio23" name="degree_type" class="custom-control-input" value="masters" required disabled>
         <label class="custom-control-label" for="customRadio23">Master's</label>
       </div>
       <div class="custom-control custom-radio">
         <input type="radio" id="customRadio24" name="degree_type" class="custom-control-input" value="PHD" required disabled>
         <label class="custom-control-label" for="customRadio24">PHD</label>
       </div>
     </div>
   </div>
   <small id="degree-type-error" style="color: red; display: none;">Please select a degree type.</small>
   </fieldset>
   </div>
   
   <div class="details ID">
  <div class="fields">
    <p>Faculty/School</p>
    <select class="form-control mb-2" name="school" required id="slct">
      <option  selected value="{{$list->college}}" >{{$list->college}}</option>
    </select>
    <small id="school-error" style="color: red; display: none;">Please select a faculty/school.</small>

    <p>Department</p>
    <select class="form-control mb-2" name="department" required id="slct">
      <option  selected value="{{$list->department}}" >{{$list->department}}</option>
    </select>
    <small id="department-error" style="color: red; display: none;">Please select a department.</small>
 

<script>
      let species = ["Institute of technology","college of social science and humanities","college of business and economics","college of medicine and health sciences","college of natural and computational science","collage of law"];
      let aa = [" computer science","information technology" ,"electrical and computer engineering","mechanical engineering",
      "civil engineering","industrial engineering","food process engineering","chemical engineering","textile engineering"
      ,"geotechnical engineering","architecture","surveying  engineering","electrical power engineering","communication engineering"
      ,"manufacturing engineering","process engineering","transport engineering","production engineering","structural engineering","thermal engineering"];
      let bb =["oromo language and literature","engilsh language and literature","somali language and literature","amaharic language and literature","geography"
      ,"political science and international relation","history","psychology"];
      let cc =[" management", "accounting and finance","marketing management","banking and finance","economics","land and real property valuation"
      ,"public administration and development management","logistics and supplies chain management"];
      let dd =["midwifery","general public health","medical laboratory science","public health nutrition","medicine","psychiatry nursing","anesthesia","family health"];
      let ee =["statistics","sport science","biology","chemistry","physics","mathematics"];
      let ff=[" law"]

      let slct1 =document.getElementById("slct1");
      let slct2 =document.getElementById("slct2");
      species.forEach(function addspecies(item){
          let option = document.createElement("option");
          option.text = item;
          option.value = item;
          slct1.appendChild(option);
      });
      slct1.onchange = function(){
          slct2.innerHTML="<option></option>";
          if (this.value == "Institute of technology"){
              addtoslct2(aa);
          }
          if(this.value == "college of social science and humanities"){
              addtoslct2(bb);
          }
          if (this.value == "college of business and economics"){
              addtoslct2(cc);
          }
          if(this.value == "college of medicine and health sciences"){
              addtoslct2(dd);
          }
          if(this.value == "collage of law"){
              addtoslct2(ff);
          }
          if(this.value == "college of natural and computational science"){
              addtoslct2(ee);
          }
          
      }
      function addtoslct2(arr){
          arr.forEach(function (item){
              let option = document.createElement("option");
              option.text =item;
              option.value = item;
              slct2.appendChild(option);
          }
      )}
  </script>
                
   <div class="input-field">
   <label for="bankNumber">Bank Deposit Tr. Ref.</label>
   <input type="text" id="bankNumber" name="bankNumber" placeholder="Bank Deposit Tr. Ref." oninput="validateBankNumber(event)" onkeypress="return isNumberKey(event)" required>
   <small id="bankNumber-error" style="color: red; display: none;">Please enter a 13-digit number.</small>
   </div>
   
   
                     
   <div class="input-field">
   <label for="exampleFormControlTextarea1">Address of Institution</label>
   <input type="text" placeholder="Address" name="insAddress" pattern="[A-Za-z]+"  oninput="sanitizeAddress(event)"   required>
   <small id="address-error" style="color: red; display: none;">Please enter a valid address.</small>
   </div>
   
   
                       
                         <div class="input-field">
                           <label for="exampleInputEmail1">Name of Institution to be sent</label>
                           <input type="text" placeholder="Institution" name="insName" pattern="[A-Za-z]+" oninput="sanitizeAddress(event)" required>
                           <input type="hidden" name="user_id" value="{{ old('user_id', auth()->user()->id) }}" > 
                           
                         </div>
                      
                         
                         <div class="input-field1">
   <label for="text">Attach Receipt of Bank Deposit</label>
   <input type="file" class="form-control-file" id="customFile" name="receipt" oninput="validateFile(event)" onkeypress="return validateFile(event)"  required>
   <small id="receipt-error" style="color: red; display: none;">Please attach a receipt file.</small>
   </div>
                        
   <div class="input-field1">
   <label for="text">Attach Cost Sharing Letter</label>
   <input type="file" class="form-control-file" id="customFile" name="cost" oninput="validateFile(event)" onkeypress="return validateFile(event)" required>
   <small id="cost-error" style="color: red; display: none;">Please attach a cost sharing letter file.</small>
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
    
    
    
    <script src="{{asset('registrar/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('registrar/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('registrar/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('registrar/js/ruang-admin.min.js')}}"></script>
  <script src="{{asset('registrar/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('registrar/js/demo/chart-area-demo.js')}}"></script>  
    <script src="{{asset('form/script.js')}}"></script>
  </body>
</html>
