<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="{{ asset('degree/base.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('degree/fancy.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('degree/main.css') }}"/>
<script src="{{ asset('degree/compatibility.min.js') }}"></script>
<script src="{{ asset('degree/theViewer.min.js') }}"></script>
<script>
try{
theViewer.defaultViewer = new theViewer.Viewer({});
}catch(e){}
</script>
<title></title>
</head>
<body>
<div id="sidebar">
<div id="outline">
</div>
</div>
<div id="page-container">
<button class="btn btn-info" onclick="print()"><i class="glyphicon glyphicon-print"></i>PRINT</button>
  <a class="btn btn-info" href="/home" onclick="window.close()">Cancel</a>
<div id="pf1" class="pf w0 h0" data-page-no="1">
  <div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="{{ asset('degree/bg2.png') }}"/><div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">                         <span class="ff2 fs1 fc1">ድሬዳዋ<span class="ff3"> </span>ዩኒቨርሲቲ</span></div><div class="t m0 x1 h3 y2 ff4 fs2 fc2 sc0 ls0 ws0">                                                  Dire Dawa University </div><div class="t m0 x2 h3 y3 ff4 fs2 fc2 sc0 ls0 ws0">                                                          <span class="fs3">Tel: +251-251127862</span></div><div class="t m0 x2 h4 y4 ff4 fs3 fc2 sc0 ls0 ws0">                                                                            p.o.Box    1362, Dire Dawa, Ethiopia   </div><div class="t m0 x2 h5 y5 ff3 fs3 fc2 sc0 ls0 ws0"> </div><div class="t m0 x2 h6 y6 ff4 fs1 fc0 sc0 ls0 ws0">                                           TO WHOM IT MAY CONCERN  
    <img src="{{ asset('studentImage/' . $photo->image) }}" alt="no image" style="display: grid; grid-template-columns: repeat(3, 1fr); grid-template-rows: repeat(3, 1fr); width: 600px; height: auto; background: transparent;">
</div><div class="t m0 x2 h7 y7 ff3 fs2 fc0 sc0 ls0 ws0">                                                               <span class="fs1">This is to certify that </span></div><div class="t m0 x2 h7 y8 ff3 fs1 fc0 sc0 ls0 ws0">               <B>                                   {{$graduated_student->first_name}} {{$graduated_student->last_name}} {{$graduated_student->grand_father_name}} </B> </div><div class="t m0 x2 h7 y9 ff3 fs1 fc0 sc0 ls0 ws0">                                             graduated from Dire Dawa University with </div><div class="t m0 x2 h7 ya ff3 fs1 fc0 sc0 ls0 ws0">                                        Bachelor of Science Degree in <B> {{$graduated_student->department}}</B> </div><div class="t m0 x2 h7 yb ff3 fs1 fc0 sc0 ls0 ws0">                                                               </div><div class="t m0 x2 h7 yc ff3 fs1 fc0 sc0 ls0 ws0">                                                        with <b>CGPA of {{$graduated_student->gpa}}</b> </div><div class="t m0 x2 h7 yd ff3 fs1 fc0 sc0 ls0 ws0">                                                            on <b>July 04, {{$graduated_student->year_of_graduation}}.</b> </div><div class="t m0 x2 h7 ye ff3 fs1 fc0 sc0 ls0 ws0">  Issuance of original Diploma and Transcript awaits settlement of cost sharing </div><div class="t m0 x2 h7 yf ff3 fs1 fc0 sc0 ls0 ws0">                         Expenses or provision of the required service</div><div class="t m0 x3 h8 y10 ff5 fs4 fc0 sc0 ls0 ws0">                                                             </div><div class="t m0 x2 h3 y11 ff4 fs2 fc0 sc0 ls0 ws0">Scientific Director, Dire Dawa                                    Director, Enrollment, Academic Record    </div><div class="t m0 x2 h3 y12 ff4 fs2 fc0 sc0 ls0 ws0">Institute of Technology                                                            and  Alumni Directorate</div><div class="t m0 x2 h3 y13 ff4 fs2 fc0 sc0 ls0 ws0">     
    <img src="data:image/png;base64,{{ $qrCode }} tempo id= {{$graduated_student->account_id}}
                                                                                       </div><div class="t m0 x2 h3 y14 ff4 fs2 fc0 sc0 ls0 ws0">                                                                  </div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
</div>
<div class="loading-indicator">

</div>
</body>
</html>
