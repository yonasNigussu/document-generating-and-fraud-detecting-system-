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
  <a class="btn btn-info" href="/home" onclick="window.close()">Cancel</a>
  
</div>
<center>
<div id='print'>
<?php

$c1=$grade->advanced_database;
$c2=$grade->software_engineering;
$c3=$grade->datastructure_and_algorithms;
$c4=$grade->internet_programming;
$c5=$grade->python;
$c6=$grade->computer_graphics;
$c7=$grade->mobile_application_development;
$c8=$grade->computer_security;

if($c1>=90){
  $g1= "A+";
  $v1=20;
  $n1="4";
}elseif($c1>=85)
{
  $g1= "A";
  $v1=20;
  $n1="4";
}elseif($c1>=80)
{
  $g1= "A-";
  $v1=18.75;
  $n1="3.75";
}elseif($c1>=85)
{
  $g1= "B+";
  $v1=17.75;
  $n1="3.5";
}elseif($c1>=85)
{
  $g1= "B";
  $v1=15;
  $n1="3";
}elseif($c1>=85)
{
  $g1= "B-";
  $v1=13.75;
  $n1="2.75";
}elseif($c1>=85)
{
  $g1= "C+";
  $v1=12.5;
  $n1="2.5";
}elseif($c1>=85)
{
  $g1= "C";
  $v1=10;
  $n1="2";
}elseif($c1>=45)
{
  $g1= "C-";
  $v1=8.75;
  $n1="1.75";
}elseif($c1>=40)
{
  $g1= "D";
  $v1=5;
  $n1="1";
}else
{
  $g1= "F";
  $v1=0;
  $n1="0";
}
if($c2>=90){
  $g2= "A+";
  $v2=20;
  $n2="4";
}elseif($c1>=85)
{
  $g2= "A";
  $v2=20;
  $n2="4";
}elseif($c1>=80)
{
  $g2= "A-";
  $v2=18.75;
  $n2="3.75";
}elseif($c1>=85)
{
  $g2= "B+";
  $v2=17.75;
  $n2="3.5";
}elseif($c1>=85)
{
  $g2= "B";
  $v2=15;
  $n2="3";
}elseif($c1>=85)
{
  $g2= "B-";
  $v2=13.75;
  $n2="2.75";
}elseif($c1>=85)
{
  $g2= "C+";
  $v2=12.5;
  $n2="2.5";
}elseif($c1>=85)
{
  $g2= "C";
  $v2=10;
  $n2="2";
}elseif($c1>=45)
{
  $g2= "C-";
  $v2=8.75;
  $n2="1.75";
}elseif($c1>=40)
{
  $g2= "D";
  $v2=5;
  $n2="1";
}else
{
  $g2= "F";
  $v2=0;
  $n2="0";
}
if($c3>=90){
  $g3= "A+";
  $v3=20;
  $n3="4";
}elseif($c3>=85)
{
  $g3= "A";
  $v3=20;
  $n3="4";
}elseif($c3>=80)
{
  $g3= "A-";
  $v3=18.75;
  $n3="3.75";
}elseif($c3>=85)
{
  $g3= "B+";
  $v3=17.75;
  $n3="3.5";
}elseif($c3>=85)
{
  $g3= "B";
  $v3=15;
  $n3="3";
}elseif($c3>=85)
{
  $g3= "B-";
  $v3=13.75;
  $n3="2.75";
}elseif($c3>=85)
{
  $g3= "C+";
  $v3=12.5;
  $n3="2.5";
}elseif($c3>=85)
{
  $g3= "C";
  $v3=10;
  $n3="2";
}elseif($c3>=45)
{
  $g3= "C-";
  $v3=8.75;
  $n3="1.75";
}elseif($c3>=40)
{
  $g3= "D";
  $v3=5;
  $n3="1";
}else
{
  $g3= "F";
  $v3=0;
  $n3="0";
}
if($c4>=90){
  $g4= "A+";
  $v1=20;
  $n4="4";
}elseif($c4>=85)
{
  $g4= "A";
  $v4=20;
  $n4="4";
}elseif($c4>=80)
{
  $g4= "A-";
  $v4=18.75;
  $n4="3.75";
}elseif($c4>=85)
{
  $g4= "B+";
  $v4=17.75;
  $n4="3.5";
}elseif($c4>=85)
{
  $g4= "B";
  $v4=15;
  $n4="3";
}elseif($c4>=85)
{
  $g4= "B-";
  $v4=13.75;
  $n4="2.75";
}elseif($c4>=85)
{
  $g4= "C+";
  $v4=12.5;
  $n4="2.5";
}elseif($c4>=85)
{
  $g4= "C";
  $v4=10;
  $n4="2";
}elseif($c4>=45)
{
  $g4= "C-";
  $v4=8.75;
  $n4="1.75";
}elseif($c4>=40)
{
  $g4= "D";
  $v4=5;
  $n4="1";
}else
{
  $g4= "F";
  $v4=0;
  $n4="0";
}
$cg=$v1+$v2+$v3+$v4;
$cg1=$cg/20;

if($c5>=90){
  $g5= "A+";
  $v5=20;
  $n5="4";
}elseif($c5>=85)
{
  $g5= "A";
  $v5=20;
  $n5="4";
}elseif($c5>=80)
{
  $g5= "A-";
  $v5=18.75;
  $n5="3.75";
}elseif($c5>=85)
{
  $g5= "B+";
  $v5=17.75;
  $n5="3.5";
}elseif($c5>=85)
{
  $g5= "B";
  $v5=15;
  $n5="3";
}elseif($c5>=85)
{
  $g5= "B-";
  $v5=13.75;
  $n5="2.75";
}elseif($c5>=85)
{
  $g5= "C+";
  $v5=12.5;
  $n5="2.5";
}elseif($c5>=85)
{
  $g5= "C";
  $v5=10;
  $n5="2";
}elseif($c5>=45)
{
  $g5= "C-";
  $v5=8.75;
  $n5="1.75";
}elseif($c5>=40)
{
  $g5= "D";
  $v5=5;
  $n5="1";
}else
{
  $g5= "F";
  $v5=0;
  $n5="0";
}

if($c6>=90){
  $g6= "A+";
  $v6=20;
  $n6="4";
}elseif($c6>=85)
{
  $g6= "A";
  $v6=20;
  $n6="4";
}elseif($c6>=80)
{
  $g6= "A-";
  $v6=18.75;
  $n6="3.75";
}elseif($c6>=85)
{
  $g6= "B+";
  $v6=17.75;
  $n6="3.5";
}elseif($c6>=85)
{
  $g6= "B";
  $v6=15;
  $n6="3";
}elseif($c6>=85)
{
  $g6= "B-";
  $v6=13.75;
  $n6="2.75";
}elseif($c6>=85)
{
  $g6= "C+";
  $v6=12.5;
  $n6="2.5";
}elseif($c6>=85)
{
  $g6= "C";
  $v6=10;
  $n6="2";
}elseif($c6>=45)
{
  $g6= "C-";
  $v6=8.75;
  $n6="1.75";
}elseif($c6>=40)
{
  $g6= "D";
  $v6=5;
  $n6="1";
}else
{
  $g6= "F";
  $v6=0;
  $n6="0";
}

if($c7>=90){
  $g7= "A+";
  $v7=20;
  $n7="4";
}elseif($c7>=85)
{
  $g7= "A";
  $v7=20;
  $n7="4";
}elseif($c7>=80)
{
  $g7= "A-";
  $v7=18.75;
  $n7="3.75";
}elseif($c7>=85)
{
  $g7= "B+";
  $v7=17.75;
  $n7="3.5";
}elseif($c7>=85)
{
  $g7= "B";
  $v7=15;
  $n7="3";
}elseif($c7>=85)
{
  $g7= "B-";
  $v7=13.75;
  $n7="2.75";
}elseif($c7>=85)
{
  $g7= "C+";
  $v7=12.5;
  $n7="2.5";
}elseif($c7>=85)
{
  $g7= "C";
  $v7=10;
  $n7="2";
}elseif($c7>=45)
{
  $g7= "C-";
  $v7=8.75;
  $n7="1.75";
}elseif($c7>=40)
{
  $g7= "D";
  $v7=5;
  $n7="1";
}else
{
  $g7= "F";
  $v7=0;
  $n7="0";
}

if($c8>=90){
  $g8= "A+";
  $v8=20;
  $n8="4";
}elseif($c8>=85)
{
  $g8= "A";
  $v8=20;
  $n8="4";
}elseif($c8>=80)
{
  $g8= "A-";
  $v8=18.75;
  $n8="3.75";
}elseif($c8>=85)
{
  $g8= "B+";
  $v8=17.75;
  $n8="3.5";
}elseif($c8>=85)
{
  $g8= "B";
  $v8=15;
  $n8="3";
}elseif($c8>=85)
{
  $g8= "B-";
  $v8=13.75;
  $n8="2.75";
}elseif($c8>=85)
{
  $g8= "C+";
  $v8=12.5;
  $n8="2.5";
}elseif($c8>=85)
{
  $g8= "C";
  $v8=10;
  $n8="2";
}elseif($c8>=45)
{
  $g8= "C-";
  $v8=8.75;
  $n8="1.75";
}elseif($c8>=40)
{
  $g8= "D";
  $v8=5;
  $n8="1";
}else
{
  $g8= "F";
  $v8=0;
  $n8="0";
}

$cg2=$v5+$v6+$v7+$v8;
$cg3=$cg2/20;

$cg4=$cg+$cg2;
$cg5=$cg4/40;

?>
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
          <label for="">Last Name:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
          <b style="font-size:13px; text-transform: uppercase; ">{{$grade->last_name }}</b>
          <br>
          <label for="">G.Father Name:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
          <b style="font-size:13px; text-transform: uppercase; ">{{$grade->grand_father_name }}</b>
          
          <br>
          <label for="">ID no.:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
          <b style="font-size:13px; text-transform: uppercase; ">{{$grade->id_number }}</b>
          <br>
          <label for="">Sex:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
          <b style="font-size:13px; text-transform: uppercase; ">{{$graduated_student->gender }}</b>
          

        </td>
        <td style="width:800px;font-size:12px">
        <label for="">Department:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
          <h style="font-size:12px">{{$graduated_student->department }}</h>
          <br>
          <label for="">Admission Classification :&nbsp&nbsp&nbsp&nbsp&nbsp</label>
          <h style="font-size:12px">{{$graduated_student->admission_type }}</h>
          <br>
          <label for="">Mobile number :&nbsp&nbsp&nbsp&nbsp&nbsp</label>
          <h style="font-size:12px;text-transform: capitalize">{{$graduated_student->mobile_number }}</h>
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
      
    </table>
  
          
          
    <table>
    <tr style="width:100%">
      <td style="width:200px;font-size:12px">
        <label for="">Semester::</label>
          <h style="text-transform: capitalize">2020/2012 Year:1 Semester:1</h>
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
    <td style="width:150px;border:1px solid black;font-size:12px;height:15px"> CoSc2042  </td>
    <td style="width:60px;border:1px solid black;font-size:12px;height:15px">Adavanced database</td>
    <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>5</center></td>
    <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>{{$g1}}</center></td>
    <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>{{$n1}}</center></td>
    <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>{{$v1}}</center></td>
    </tr>
    
  
    
    <tr>
    <td style="width:150px;border:1px solid black;font-size:12px;height:15px">CoSc3061</td>
    <td style="width:60px;border:1px solid black;font-size:12px;height:15px">Software Engineering</td>
    <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>5</center></td>
    <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>{{$g2}}</center></td>
    <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>{{$n2}}</center></td>
    <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>{{$v2}}</center></td>
    </tr>

    <tr>
      <td style="width:150px;border:1px solid black;font-size:12px;height:15px">CoSc2092</td>
      <td style="width:60px;border:1px solid black;font-size:12px;height:15px">Datastructure And Algorithms</td>
      <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>5</center></td>
      <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>{{$g3}}</center></td>
      <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>{{$n3}}</center></td>
      <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>{{$v3}}</center></td>
      </tr>

      <tr>
        <td style="width:150px;border:1px solid black;font-size:12px;height:15px">CoSc3034</td>
        <td style="width:60px;border:1px solid black;font-size:12px;height:15px"> internet_programming</td>
        <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>5</center></td>
        <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>{{$g4}}</center></td>
        <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>{{$n4}}</center></td>
        <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>{{$v4}}</center></td>
        </tr>
    
    <tr>
    <td style="width:150px;font-size:12px;height:15px">Semester Avearge:</td>
    <td style="width:60px;border-bottom:1px solid black;font-size:12px;height:15px"><center>{{$cg1}}</center></td>
   
    
    </tr>
    


</table>
    <table style="border-collapse:collapse">
      <tr>
        <td style="width:150;font-size:12px;height:15px">Cumulative Average:</td>
    <td style="width:120px;border-bottom:1px solid black;font-size:12px;height:15px"><center>{{$cg1}}</center></td>
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
                <h style="text-transform: capitalize">2020/2012 Year:1Semester :2</h>
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
      <td style="width:150px;border:1px solid black;font-size:12px;height:15px"> CoSc3025  </td>
      <td style="width:60px;border:1px solid black;font-size:12px;height:15px">Python</td>
      <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>5</center></td>
      <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>{{$g5}}</center></td>
      <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>{{$n5}}</center></td>
      <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>{{$v5}}</center></td>
      </tr>
      
    
      
      <tr>
      <td style="width:150px;border:1px solid black;font-size:12px;height:15px">CoSc3072</td>
      <td style="width:60px;border:1px solid black;font-size:12px;height:15px">Computer graphics</td>
      <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>5</center></td>
      <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>{{$g6}}</center></td>
      <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>{{$n6}}</center></td>
      <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>{{$v6}}</center></td>
      </tr>
  
      <tr>
        <td style="width:150px;border:1px solid black;font-size:12px;height:15px">CoSc3142</td>
        <td style="width:60px;border:1px solid black;font-size:12px;height:15px">Mobile_Application Development</td>
        <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>5</center></td>
        <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>{{$g7}}</center></td>
        <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>{{$n7}}</center></td>
        <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>{{$v7}}</center></td>
        </tr>
  
        <tr>
          <td style="width:150px;border:1px solid black;font-size:12px;height:15px">CoSc4035</td>
          <td style="width:60px;border:1px solid black;font-size:12px;height:15px"> computer_security</td>
          <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>5</center></td>
          <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>{{$g8}}</center></td>
          <td style="width:60px;border:1px solid black;font-size:12px;height:15px"><center>{{$n8}}</center></td>
          <td style="width:83px;border:1px solid black;font-size:12px;height:15px"><center>{{$v8}}</center></td>
          </tr>
      
      <tr>
      <td style="width:150px;font-size:12px;height:15px">Semester Avearge:</td>
      <td style="width:60px;border-bottom:1px solid black;font-size:12px;height:15px"><center>{{$cg3}}</center></td>
     
      
      </tr>
      
  
  
  </table>
      <table style="border-collapse:collapse">
        <tr>
          <td style="width:150;font-size:12px;height:15px">Cumulative Average:</td>
      <td style="width:120px;border-bottom:1px solid black;font-size:12px;height:15px"><center>{{$cg5}}</center></td>
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
    
  
    
    
    

    <p class="p" style="text-align:justify;line-height:5mm;font-transform:capitalize"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp I hereby certify that this is the true record of <b> {{$grade->first_name }} {{$grade->last_name }} {{$grade->grand_father_name }} </b>&nbsp&nbsp&nbsp for admission to &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 1 year as (regular/irregular) student. </p>

    
    
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