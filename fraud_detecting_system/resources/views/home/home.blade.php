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
            <a href="">
                <i class="bx bxs-home"></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="">
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
    <a href="" class="back-to-top">
        <i class="bx bxs-to-top"></i>
    </a>
    <!-- END BACK TO TOP BTN -->
    <!-- TOP NAVIGATION -->
    <div class="nav">
        <div class="menu-wrap">
            <a href="">
                <div class="logo">
                   DDU Alumni
                </div>
            </a>
            <div class="menu h-xs">
                <a href="/">
                    <div class="menu-item">
                        Home
                    </div>
                </a>
                <a href="{{url('authenticat')}}">
                    <div class="menu-item">
                        Authentication
                    </div>
                </a>
                
                <a href="#food-menu-section">
                    <div class="menu-item">
                        Service 
                    </div>
                </a>
                <a href="#footer bg-img-section">
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
    <!-- SECTION HOME -->
    <section id="home" class="fullheight align-items-center bg-img bg-img-fixed"
        style="background-image: url(fron_page/assets/grad3.png);">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <div class="slogan">
                        <h2 class="left-to-right play-on-scroll">
                           Dire Dawa University
                        </h2>
                        <p class="left-to-right play-on-scroll delay-2">
                          Welcome Home<br>
                          DDU Alumni helps you keep Communities close wherever you are.
                        </p>
                        <div class="left-to-right play-on-scroll delay-4">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION HOME -->
    <!-- SECION ABOUT -->
    <section class="about fullheight align-items-center" id="about">
        <div class="container">
        

            <div class="row">
                <div class="col-7 h-xs">
                  <!--  <img src="fron_page/assets/grad1.png" alt=""
                        class="fullwidth left-to-right play-on-scroll">-->
                        @foreach ($list as $lists)
                         <img src="{{ asset('postImage/' . $lists->image) }}" alt=""
                        class="fullwidth left-to-right play-on-scroll">
                </div>
                <div class="col-5 col-xs-12 align-items-center">
                    <div class="about-slogan right-to-left play-on-scroll">
                        <h3>
                            <span class="primary-color">{{$lists->title}}</span> 
                        </h3>
                        <p>
                            
                            {{$lists->text}}
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECION ABOUT -->
    <!-- FOOD MENU SECTION -->
    <section class="align-items-center bg-img bg-img-fixed" id="food-menu-section"
        style="background-image: url(fron_page/assets/grad2.png);">
        <div class="container">
            <div class="food-menu">
                <h1>
                    What Do <span class="primary-color">you</span> want today?
                </h1>
                <p>
                    Congrats, you did it! But remember that the hard work has just begun!
                </p>
                <div class="food-category">
                    <div class="zoom play-on-scroll">
                        <button class="active" data-food-type="all">
                            All service
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-2">
                        <button data-food-type="salad">
                            Document Authenticating
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-4">
                        <button data-food-type="lorem">
                            student copy
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-6">
                        <button data-food-type="ipsum">
                            Generating temporary degree
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-8">
                        <button data-food-type="dolor">
                            Generating original degree
                        </button>
                    </div>
                </div>

                <div class="food-item-wrap all">
                    <div class="food-item salad-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url(fron_page/assets/img.png);"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Document Authenticating
                                    </h3>
                                    <!-- <span>
                                        We provide signed certificates of authenticity for a variety of documents 
                                    </span> -->
                                    
                                    
                                </div>
                                <a class="button "href="{{route('login')}}">
                                    request 
                                    <div class="arrow-wrapper">
                                        <div class="arrow"></div>
                                
                                    </div>
                                    </a>
                             
                            </div>
                        </div>
                    </div>

                    <div class="food-item lorem-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('fron_page/assets/images.png');"></div>
                            </div>
                            <!-- <div class="item-info"> -->
                                <div class="item-info">
                                    <div>
                                        <h3>
                                            student copy
                                        </h3>
                                        <!-- <span>
                                            We provide signed certificates of authenticity for a variety of documents 
                                        </span> -->
                                        
                                        
                                    </div>
                                    <a class="button " href="{{route('login')}}">
                                        request 
                                        <div class="arrow-wrapper">
                                            <div class="arrow"></div>
                                    
                                        </div>
                                    </a>
                                 
                                </div>
                                <!-- <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div> -->
                            <!-- </div> -->
                        </div>
                    </div>

                    <div class="food-item ipsum-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('fron_page/assets/orginal.png');">
                                </div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Generating temporary degree
                                    </h3>
                                    <!-- <span>
                                        We provide signed certificates of authenticity for a variety of documents 
                                    </span> -->
                                    
                                    
                                </div>
                                <a class="button " href="{{route('login')}}">
                                    request
                                    <div class="arrow-wrapper">
                                        <div class="arrow"></div>
                                
                                    </div>
                                    </a>
                             
                            </div>
                        </div>
                    </div>

                    <!-- <div class="food-item lorem-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('assets/sina-piryae-bBzjWthTqb8-unsplash.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Lorem ipsum
                                    </h3>
                                    <span>
                                        120$
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="food-item dolor-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('assets/carly-jayne-Lv174o7fn7Y-unsplash.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Lorem ipsum
                                    </h3>
                                    <span>
                                        120$
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="food-item salad-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('assets/anh-nguyen-kcA-c3f_3FE-unsplash.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Lorem ipsum
                                    </h3>
                                    <span>
                                        120$
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="food-item lorem-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('assets/sina-piryae-bBzjWthTqb8-unsplash.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Lorem ipsum
                                    </h3>
                                    <span>
                                        120$
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="food-item dolor-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('fron_page/assets/image.jpeg')"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Generating Original Degree 
                                    </h3>
                                    <!-- <span>
                                        We provide signed certificates of authenticity for a variety of documents 
                                    </span> -->
                                    
                                    
                                </div>
                                <a class="button "href="{{route('login')}}">
                                    request 
                                    <div class="arrow-wrapper">
                                        <div class="arrow"></div>
                                
                                    </div>
                                    </a>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FOOD MENU SECTION -->
    <!-- TESTIMONIAL SECTION -->
    
    <!-- END TESTIMONIAL SECTION -->
    <!-- FOOTER SECTION -->
    <section class="footer bg-img" id="footer bg-img-section" >
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