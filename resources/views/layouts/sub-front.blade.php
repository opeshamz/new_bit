<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>| Exchange Services Made Easy</title>
<link href="{{asset('images-current')}}" rel="icon">
<link rel="stylesheet" href="{{asset('css-current/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css-current/all.min.css')}}">
<link rel="stylesheet" href="{{asset('css-current/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('css-current/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css-current/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('css-current/tooltipster.min.css')}}">
<link rel="stylesheet" href="{{asset('css-current/cubeportfolio.min.css')}}">
<link rel="stylesheet" href="{{asset('css-current/revolution/navigation.css')}}">
<link rel="stylesheet" href="{{asset('css-current/revolution/settings.css')}}">
<link rel="stylesheet" href="{{asset('css-current/style.css')}}">
   <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body data-spy="scroll" data-target=".navbar-nav" data-offset="75" class="offset-nav">
<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="cssload-loader"></div>
    </div>
</div>
<!--PreLoader Ends-->
<!-- header -->
<header class="site-header">
    <nav class="navbar navbar-expand-lg padding-nav static-nav">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
               <img src="images-current/" alt="logo">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto mr-auto">
                   
                   <li class="nav-item dropdown static">
                        <a class="nav-link"  href="{{url('/bitcoin')}}"  aria-haspopup="true" aria-expanded="false"> Product </a>
                      <li class="nav-item dropdown position-relative">
                         <a class="nav-link" href="{{url('/about')}}"> About Us </a>
                    </li>
                  <!--  <li class="nav-item">
                        <a class="nav-link" href="{{url('rates')}}">Rates</a>
                    </li>-->
                    
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link" href="{{url('contact')}}"> Help Center </a>
                       
                    </li>
                </ul>
            </div>
            <ul class="social-icons social-icons-simple d-lg-inline-block d-none animated fadeInUp" data-wow-delay="300ms">
                <li><a href=""><i class="fab fa-facebook-f"></i> </a> </li>
                <li><a href=""><i class="fab fa-twitter"></i> </a> </li>
                <li><a href=""><i class="fab fa-instagram"></i> </a> </li>
            </ul>
        </div>
        
      
        
        
        
        <!--side menu open button-->
        <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span class="gradient-bg"></span> <span class="gradient-bg"></span> <span class="gradient-bg"></span>
        </a>
    </nav>
    <!--side menu open button-->
            <a href="javascript:void(0)" class="d-inline-block sidemenu_btn mr-0" id="sidemenu_toggle">
                <span class="bg-white"></span> <span class="bg-white"></span> <span class="bg-white"></span>
            </a>
        </div>
    </nav>
     <!-- side menu -->
    <div class="side-menu opacity-0 gradient-bg">
        <div class="overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close btn-close-no-padding" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/bitcoin')}}">
                            Product
                        </a>
    </li>

                        <li class="nav-item">
                        <a class="nav-link" href="{{url('/about')}}">
                           About Us
                        </a>
                        
                    </li>



                  <!--  <li class="nav-item">
                        <a class="nav-link" href="#">Rates </a>
                    </li>-->
                       <li class="nav-item">
                        <a class="nav-link" href="{{url('login')}}">Sign in</a>
                    </li>


                       

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/contact')}}">Help Center</a>
                    </li>

                     </li>
                       <li class="nav-item">
                        <a class="nav-link" href="{{url('register')}}">Register</a>
                    </li>





                </ul>
            </nav>
            <div class="side-footer w-100">
                <ul class="social-icons-simple white top40">
                    <li><a href="#"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a href="#"><i class="fab fa-twitter"></i> </a> </li>
                    <li><a href="#"><i class="fab fa-instagram"></i> </a> </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="close_side_menu" class="tooltip"></div>
    <!-- End side menu -->
</header>
<!-- header -->
<!--Page Header-->



<section id="main-banner-page" class="position-relative page-header about-header parallax section-nav-smooth" style="background-image:url('images-current/blockchain-3581920_1920.jpg') ; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center; margin-top: 0px;">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">Exchange</h2>
                    <h2 class="font-bold">Growing Exchange Platform</h2>
                    <h2 class="font-xlight">Fastest Growing</h2>
                    <h3 class="font-light pt-2">(Exchange Services Made Easy)</h3>
                </div>
            </div>
        </div>

        <style type="text/css">
            .gradient-bg {
                background-image: linear-gradient(to right, #28347a 0%, #2f55a2 51%, #28347a 100%);
            }
            .ps {
    font-weight: 300;
    font-size: 16px;
    line-height: 1.7;
    color: black;
}

.feature-item .icon {
    
    color: #29357b;
}
        </style>


@yield('content')






<section class="bglight">
    <h2 class="d-none">heading</h2>
    <div class="container-fluid bgdarkss tt">
        

        <div class="row align-items-center">

            <div class="col-md-12 col-sm-12 p-0 col-video">
                <div class="row mx-0">

                    <div class="col-md-10 offset-md-1 offset-sm-0 col-sm-12">

                        <div class="video-content-setting center-block text-center text-sm-left">
                            <h2 class=" font-normal text-capitalize mb-3" style="color:white;">Register Now!!!</h2>
                             <a href="{{url('register')}}" class="button btnsecondary gradient-btn mb-sm-0 mb-4" type="submit">Click here</a>
                          <style>
    .video-content-setting {
    height: 200px;
}

.bgdarkss {
background: url("images-current/bitcoin-3369039_1920.jpg ");
}
}

</style>

                           
                        </div>
                    </div>
                </div>
                
            </div>

            
        </div>
    </div>
</section>
<br> <Br>

<!--Site Footer Here-->
<footer id="site-footer" class="">
    <div class="container">
        <div class="row">
            <style>
                @media (max-width:767px){
                    .wd{
                        width:50%;
                         word-wrap: break-word;
                    }
                    
                     .wds{
                        width:55%;
                         word-wrap: break-word;
                    }
                    .wdss{
                        width:45%;
                         word-wrap: break-word;
                    }
                }
            </style>
            <div class="col-lg-3 col-md-3 col-sm-3 wd">
                 <div class="footer_panel padding_bottom_half bottom20 pl-0 pl-lg-5">
                    <h3 class=" bottom25">Product</h3>
                    <ul class="" >
                        <li><a href="{{url('/bitcoin')}}" style="color: black;">Bitcoin</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 wd">
               <div class="footer_panel padding_bottom_half bottom20 pl-0 pl-lg-5">
                    <h3 class=" bottom25">Useful Links</h3>
                    <ul class="" >
                        <li><a href="{{url('/')}}" style="color: black;">Home</a></li>
                        <li><a href="{{url('/about')}}" style="color: black;">About Us</a></li>
                       
                        <li><a href="{{url('/contact')}}" style="color: black;">Contact Us</a></li>
                        
                    </ul>
                </div>
            </div>
        <div class="col-lg-3 col-md-3 col-sm-3 wds">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class=" bottom25">Contact</h3>
                     <div class="d-table w-100 address-item bottom25">
                        <p class="d-table-cell align-middle bottom0">
                          <a class="d-block" href="">support@gmail.com.ng</a>
                        </p>
                    </div>
                   
                  
                     
                         <ul class="social-icons  wow fadeInUp" data-wow-delay="300ms">
                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
               
                        <li><a href="#" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                    </ul>
                
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 wdss">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class=" bottom25">Location</h3>
                   
                    <ul class="">
                          <li><a href="privacy_policy">Lagos</a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer ends-->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js-current/jquery-3.4.1.min.js"></script>
<!--Bootstrap Core-->
<script src="js-current/propper.min.js"></script>
<script src="js-current/bootstrap.min.js"></script>
<!--to view items on reach-->
<script src="js-current/jquery.appear.js"></script>
<!--Owl Slider-->
<script src="js-current/owl.carousel.min.js"></script>
<!--number counters-->
<script src="js-current/jquery-countTo.js"></script>
<!--Parallax Background-->
<script src="js-current/parallaxie.js"></script>
<!--Cubefolio Gallery-->
<script src="js-current/jquery.cubeportfolio.min.js"></script>
<!--Fancybox js-->
<script src="js-current/jquery.fancybox.min.js"></script>
<!--Tooltip js-->
<script src="js-current/tooltipster.min.js"></script>
<!--wow js-->
<script src="js-current/wow.js"></script>
<!--Revolution SLider-->
<script src="js-current/revolution/jquery.themepunch.tools.min.js"></script>
<script src="js-current/revolution/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="js-current/revolution/extensions/revolution.extension.actions.min.js"></script>
<script src="js-current/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script src="js-current/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script src="js-current/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="js-current/revolution/extensions/revolution.extension.migration.min.js"></script>
<script src="js-current/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script src="js-current/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script src="js-current/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script src="js-current/revolution/extensions/revolution.extension.video.min.js"></script>
<!--custom functions and script-->
<script src="js-current/functions.js"></script>
</body>

</html>
