<html>
    <head>
        <style type='text/css'>
            body, html {
                margin: 0;
                padding: 0;
            }
            body {
              width: 100%;
                height: 100%;
                color: black;
                display: table;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
            }
            .container {
                border: 10px solid tan;
                width: 750px;
                height: 563px;
                display: table-cell;
                vertical-align: middle;
            }
            .logo {
                color: tan;
            }
            .logoa {
          width: 100px;
        }
        .logob {
          width: 250px;
        }

            .marquee {
                color: tan;
                font-size: 48px;
                margin-right: 0px;
                display: center;
            }
            .assignment {
                margin: 0px;
                display: center;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
                display: center;
            }
            .reason {
                margin: 20px;
                display: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
        <div >
            
        <img src="{{ asset('studentImage/' . $photo->image) }}" alt="cost Image" class="logob" align="left">

        <img src="data:image/png;base64,{{ $qrCode }}" alt="QR Code">
                
            </div>    
        
        <div class="logo">
        
            <img src="{{ asset('certificate/ddu_logo.jpg') }}" alt="cost Image" class="logoa"align="center">
                
            </div>    
        <div class="logo">
        
            
                An Organization
            </div>
            

            <div class="marquee">
                Certificate of Completion
            </div>

            <div class="assignment">
                This certificate is presented to
            </div>

            <div class="person">
            {{$graduated_student->first_name}} 
            {{$graduated_student->last_name}}
            </div>

            <div class="reason">
                For deftly defying the laws of gravity<br/>
                and flying high
            </div>
        </div>
    </body>
</html>