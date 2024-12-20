&nbsp<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="images/logo.jpg">

    <title>Student trenascript</title>

     <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/styles.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="asset/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="asset/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    
    <script src="datatables/jquery.dataTables.js"></script>
    <script src="datatables/dataTables.bootstrap.js"></script>
        <link href="datatables/dataTables.bootstrap.css" rel="stylesheet">

    <script src="assets/js/jquery.min.js"></script>
    <script src="asset/js/bootstrap.min.js" type="text/javascript"></script>

    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/jq.js"></script>
  <style>
  @media print {  
    @page {
      size:8.5in 13in;
    }
    head{
      height:0px;
      display: none;
    }
    #head{
      display: none;
      height:0px;
    }
    #print{
    position:fixed;
    top:0px;
    margin-top:20px;
    margin-bottom:30px;
    margin-right:50px;
    margin-left:50px;
    }
    }
    #print{
    width:7.5in;
    }
    input {
    border: 0;
    outline: 0;
    background: transparent;
    border-bottom: 1px solid black;
}

.foo{
  font-family: "Bodoni MT", Didot, "Didot LT STD", "Hoefler Text", Garamond, "Times New Roman", serif;
  font-size: 24px;
  font-style: italic;
  font-variant: normal;
  font-weight: bold;
  line-height: 24px;
  }
  .p {
  font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
  font-size: 14px;
  font-style: italic;
  font-variant: normal;
  font-weight: 550;
  line-height: 20px;
   letter-spacing: 2px;
}
  </style>

</head> 
<body style="background-color:white"> 
<span id='returncode'></span>
<div class="col-md-2" id="head">
  <button class="btn btn-info" onclick="print()"><i class="glyphicon glyphicon-print"></i>PRINT</button>
  <a class="btn btn-info" onclick="window.close()">Cancel</a>
  
</div>
<center>
<div id='print'>
<div style="margin-left:.5in;margin-right:.5in;margin-top:.1in;margin-bottom:.1in;line-height:1mm;">

    <p><center><b>Student transcript</b></center></p>

      </div>
      <div class="row">
      <div class="col-md-12">
      <center><p><b><h4>DIRE DAWA UNIVERSITY</h4></b></p></center>
      </div>
          </div>
          <div class="row">
      <div class="col-md-12">

      <table style="line-height:5mm">
    
      <tr>
        <td style="width:600px;font-size:12px">
          <label for="" style="">First Name:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
          <b style="font-size:13px;text-transform: uppercase;">{{$grade->first_name }} </b>
          <br>
          <label for="">Father Name:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
          <b style="font-size:13px; text-transform: uppercase; ">{{$grade->father_name }}</b>
          <br>
          <label for="">G.Father Name:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
          <b style="font-size:13px; text-transform: uppercase; ">{{$grade->gfather_name }}</b>
          
          <br>
          <label for="">ID no.:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
          <b style="font-size:13px; text-transform: uppercase; "></b>
          <br>
          <label for="">Sex:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
          <b style="font-size:13px; text-transform: uppercase; "></b>
          <br>
          <label for="">From:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
          <b style="font-size:13px; text-transform: uppercase; ">Notre Dame</b>
          

        </td>
        <td style="width:800px;font-size:12px">
        <label for="">Date of Birth:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
          <h style="font-size:12px">yo</h>
          <br>
          <label for="">Town / City:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
          <h style="font-size:12px">yo</h>
          <br>
          <label for="">Admission Classification&nbsp&nbsp&nbsp&nbsp&nbsp</label>
          <h style="font-size:12px;text-transform: capitalize">Regular</h>
          <br>
          <label for="">Parent or Guardian:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
          <h style="font-size:12px;text-transform: capitalize">yo</h>
          <br>
          <label for="">Medium of instruction:&nbsp</label>
          <h style="text-transform: capitalize">English</h>
        </td>
        
      </tr>
      <tr>
        

      </tr>

      
      </table> 
      
    
      <table>
      <tr>

      <td style="width:800px;font-size:12px">

        
         
        
      </td>
      <td style="width:200px;font-size:12px">
        <label for="">Year:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
          <h style="text-transform: capitalize">yo</h>
      </td>
      <td style="width:200px;font-size:12px">
        <label for="">Ave:&nbsp</label>
          <h style="text-transform: capitalize">yo</h>
      </td>
      
      
      </tr>
    </table>
    
      </div>
          </div>
          <div class="row">
          <div class="col-md-12">
          <hr style="border-color:black;border:1px solid black"></hr>
          </div>
          
          </div>

          <p style="">
          

    
    <table style="float:left;margin-left:5px;margin-bottom:20px;">
    <tr>
    <td>  
    <table>
      <tr style="width:100%">
      <td>
         
      <label style="font-size:15px">Admitted to:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
      </td>
      <td style="border-bottom:1px solid black;width:280px">
    <label style="font-size:12px">Regular/Degree program </label>
    </td>
    </tr>
    </table>
  
          
          
    <table>
    <tr style="width:100%">
      <td style="width:200px;font-size:12px">
        <label for="">Semester::&nbsp</label>
          <h style="text-transform: capitalize">AcYear:2020/2021 Year :1</h>
      </td>
    
    </tr>
    </table>
    
    
    <table style="border-collapse:collapse">
    <tr>
    <td style="width:150px;border:1px solid black;font-size:12px;"><center><b>Course No.</b></center></td>
    <td style="width:150px;border:1px solid black;font-size:12px;"><center><b>Course Title</b></center></td>
    <td style="width:60px;border:1px solid black;font-size:12px;"><center><b>Credit</b></center></td>
    <td style="width:60px;border:1px solid black;font-size:12px;"><center><b>Grade</b></center></td>
    <td style="width:10px;border:1px solid black;font-size:12px;"><center><b>NumG<br></b></center></td>
    <td style="width:10px;border:1px solid black;font-size:12px;"><center><b>GPts.<br></b></center></td>
    </tr>
    
    <tr>
    <td style="width:150px;border:1px solid black;font-size:10px;height:15px"> 	ITSE- M7811  </td>
    <td style="width:60px;border:1px solid black;font-size:10px;height:15px">	Fundamentals of IT Security</td>
    <td style="width:60px;border:1px solid black;font-size:10px;height:15px"><center>5</center></td>
    <td style="width:83px;border:1px solid black;font-size:10px;height:15px"><center>A+</center></td>
    <td style="width:60px;border:1px solid black;font-size:10px;height:15px"><center>4</center></td>
    <td style="width:83px;border:1px solid black;font-size:10px;height:15px"><center>20</center></td>
    </tr>
    
  
    
    <tr>
    <td style="width:150px;border:1px solid black;font-size:12px;height:15px">	ITSE- M3311</td>
    <td style="width:60px;border:1px solid black;font-size:12px;height:15px">	Fundamentals of Database</td>
    <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>5</center></td>
    <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>A</center></td>
    <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>4</center></td>
    <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>20</center></td>
    </tr>

    <tr>
      <td style="width:150px;border:1px solid black;font-size:12px;height:15px">ITSE-2131/td>
      <td style="width:60px;border:1px solid black;font-size:12px;height:15px">datastructure_and_algorithms</td>
      <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>5</center></td>
      <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>A</center></td>
      <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>4</center></td>
      <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>20</center></td>
      </tr>

      <tr>
        <td style="width:150px;border:1px solid black;font-size:12px;height:15px">ITSE- M4812</td>
        <td style="width:60px;border:1px solid black;font-size:12px;height:15px"> internet_programming</td>
        <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>5</center></td>
        <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>A</center></td>
        <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>4</center></td>
        <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>20</center></td>
        </tr>
    
    <tr>
    <td style="width:150px;font-size:12px;height:15px">Semester Avearge:</td>
    <td style="width:60px;border-bottom:1px solid black;font-size:12px;height:15px"><center>yo</center></td>
   
    
    </tr>
    


</table>
    <table style="border-collapse:collapse">
      <tr>
        <td style="width:150;font-size:12px;height:15px">Cumulative Average:</td>
    <td style="width:120px;border-bottom:1px solid black;font-size:12px;height:15px"><center>yo</center></td>
    <td style="width:83px;font-size:12px;height:15px"></td>
    </tr>
    </table>
    </td>
    </tr>

    </table>


    
         
          
     
  
    <<table style="float:left;margin-left:5px;margin-bottom:20px;">
      <tr>
      <td>  
      <table>
        <tr style="width:100%">
        <td>
           
          <tr style="width:100%">
            <td style="width:200px;font-size:12px">
              <label for="">Semester::&nbsp</label>
                <h style="text-transform: capitalize">AcYear:2020/2021 Year :2</h>
            </td>
          
          </tr>
        </td>
        
      </tr>
      </table>
    
            
            
      <table>
      
      </table>
      
      
      <table style="border-collapse:collapse">
      <tr>
      <td style="width:150px;border:1px solid black;font-size:12px;"><center><b>Course No.</b></center></td>
      <td style="width:150px;border:1px solid black;font-size:12px;"><center><b>Course Title</b></center></td>
      <td style="width:60px;border:1px solid black;font-size:12px;"><center><b>Credit</b></center></td>
      <td style="width:60px;border:1px solid black;font-size:12px;"><center><b>Grade</b></center></td>
      <td style="width:10px;border:1px solid black;font-size:12px;"><center><b>NumG<br></b></center></td>
      <td style="width:10px;border:1px solid black;font-size:12px;"><center><b>GPts.<br></b></center></td>
      </tr>
      
      <tr>
      <td style="width:150px;border:1px solid black;font-size:10px;height:15px"> ITSE-2191  </td>
      <td style="width:60px;border:1px solid black;font-size:10px;height:15px">Multimedia</td>
      <td style="width:60px;border:1px solid black;font-size:10px;height:15px"><center>5</center></td>
      <td style="width:83px;border:1px solid black;font-size:10px;height:15px"><center>A+</center></td>
      <td style="width:60px;border:1px solid black;font-size:10px;height:15px"><center>4</center></td>
      <td style="width:83px;border:1px solid black;font-size:10px;height:15px"><center>20</center></td>
      </tr>
      
    
      
      <tr>
      <td style="width:150px;border:1px solid black;font-size:12px;height:15px">ITSE-3162</td>	
      <td style="width:60px;border:1px solid black;font-size:12px;height:15px">Operating Systems</td>
      <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>5</center></td>
      <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>A</center></td>
      <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>4</center></td>
      <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>20</center></td>
      </tr>
  
      <tr>
        <td style="width:150px;border:1px solid black;font-size:12px;height:15px">ITSE-4172</td>
        <td style="width:60px;border:1px solid black;font-size:12px;height:15px">Software Project Management</td>
        <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>5</center></td>
        <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>A</center></td>
        <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>4</center></td>
        <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>20</center></td>
        </tr>
  
        <tr>
          <td style="width:150px;border:1px solid black;font-size:12px;height:15px">TSE-4181</td>
          <td style="width:60px;border:1px solid black;font-size:12px;height:15px"> Ethics</td>
          <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>5</center></td>
          <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>A</center></td>
          <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>4</center></td>
          <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>20</center></td>
          </tr>
      
      <tr>
      <td style="width:150px;font-size:12px;height:15px">Semester Avearge:</td>
      <td style="width:60px;border-bottom:1px solid black;font-size:12px;height:15px"><center>yo</center></td>
     
      
      </tr>
      
  
  
  </table>
      <table style="border-collapse:collapse">
        <tr>
          <td style="width:150;font-size:12px;height:15px">Cumulative Average:</td>
      <td style="width:120px;border-bottom:1px solid black;font-size:12px;height:15px"><center>yo</center></td>
      <td style="width:83px;font-size:12px;height:15px"></td>
      </tr>
      </table>
      </td>
      </tr>
  
      </table>
    
    
        <p>


<p style="float:left;margin-left:15px;margin-bottom:20px;">
<div class="col-md-12">
          <hr style="border-color:black;border:1px solid black"></hr>


<table>
         <tr>
           <td>
    <center><h3 class="foo"><b>CERTIFICATION</b></h3></center>  
    
  
    
    
    

    <p class="p" style="text-align:justify;line-height:5mm;font-transform:capitalize"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp I hereby certify that this is the true record of &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp yo &nbsp&nbsp&nbsp for admission to &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp year as (regular/irregular) student, and has no property responsibility in this school. </p>

    
    
      <table>
      <tr>
        <td align="left" style="width:500px">
          <h5>REMARKS:</h5>
        </td>
        <td style="">
          <table>
            
        
          
          <tr>
            <td>
              &nbsp
            </td>
          </tr>

            <tr>
              <td style="width:250px;border-bottom:1px solid black">
                
              </td>
            </tr>
            <tr>
            <td style="width:250px;">
              <center><h5>PRINCIPAL</h5></center>
            </td>
          </tr>
          </table>
        </td>

      </tr>
      </table>
           </td>
         </tr>
         </table>

</div>
</p>


</center>
</body>
<script>
function printContent(el){
  var restorepage = document.body.innerHTML;
  var printcontent = document.getElementById(el).innerHTML;
  document.body.innerHTML = printcontent;
  window.print();
  document.body.innerHTML = restorepage;

  $.ajax({
    url:'print_log.php?act=form137&id=yo',
    success:function(html){
      $('#returncode').html(html);
    }
  });
}
</script>
</html>