<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
       DDU Alumni System
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="fron_page/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- MOBILE NAV -->
    <div class="mb-nav">
        <div class="mb-move-item"></div>
        <div class="mb-nav-item active">
            <a href="#home">
                <i class="bx bxs-home"></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="#about">
                <i class='bx bxs-wink-smile'></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="#food-menu-section">
                <i class='bx bxs-food-menu'></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="#testimonial">
                <i class='bx bxs-comment-detail'></i>
            </a>
        </div>
    </div>
    <!-- END MOBILE NAV -->
    <!-- BACK TO TOP BTN -->
    <a href="#home" class="back-to-top">
        <i class="bx bxs-to-top"></i>
    </a>
    <!-- END BACK TO TOP BTN -->
    <!-- TOP NAVIGATION -->
    <div class="nav">
        <div class="menu-wrap">
            <a href="#home">
                <div class="logo">
                   DDU Alumni
                </div>
            </a>
            <div class="menu h-xs">
                <a href="#home">
                    <div class="menu-item active">
                        Home
                    </div>
                </a>
                <a href="{{url('authenticat')}}">
                    <div class="menu-item">
                        Authentication
                    </div>
                </a>
                <a href="#about">
                    <div class="menu-item">
                        About us
                    </div>
                </a>
                <a href="#food-menu-section">
                    <div class="menu-item">
                        Service 
                    </div>
                </a>
                <a href="#testimonial">
                    <div class="menu-item">
                        Contact
                    </div>
                </a>
            </div>
            <a href="{{route('login')}}" class="button ">
                Login 
                <div class="arrow-wrapper">
                    <div class="arrow"></div>
            
                </div>
</a>
        </div>
    </div>
    <!-- END TOP NAVIGATION -->
    <!-- FOOD MENU SECTION -->
    <section class="align-items-center bg-img bg-img-fixed" id="food-menu-section"
        style="background-image: url(fron_page/assets/grad2.png);">
        <div class="container">
            <div class="food-menu">
                <h1>
                    Authenticat your <span class="primary-color">Document</span> 
                </h1>
                <p>
                    everyone can authenticate dire dawa University student document by inserting a document id
                </p>

                @if(session()->has('message'))
            <div class="alert alert-danger alert-dismissible" role="alert">
            {{session()->get('message')}}
            
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                    
                    
                  </div>
                 
            

            @endif
                
                     <form action="{{ url('id_auth') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                    <b><span class="primary-color">insert doc. id</span></b>
                    <input type="text" placeholder="insert doc. id" name="account_ida" required>
                    <button class="menu-item active">
                        submit
                    </button>
                </form>

                    </div>
                   </div>
                   

    </section>
    <!-- END TESTIMONIAL SECTION -->
    <!-- FOOTER SECTION -->
    <section class="footer bg-img" >
        <div class="container">
            <div class="row">
                <div class="footerContaner">
                    <div class="socialIcons">
                        <a href="https://www.facebook.com/DDUniv/"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.youtube.com/channel/UCwGK2TmnY4mbykkPE5c8bbw?app=desktop"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                    <div class="footerNav">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">About us</a></li>
                            <li><a href="">Service</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                  
                </div>
              
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FOOTER SECTION -->

    <script src="fron_page/index.js"></script>
</body>

</html>