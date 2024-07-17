<?php
$site_title = isset($site_title) ? $site_title : 'RAJ STUDIO11 - FAMILY SALON';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Raj Studio 11 - Family Salon</title>
    <meta name="author" content="Vecuro">
    <meta name="description" content="Raj studio11 - Family Salon Khagul">
    <meta name="keywords" content="Raj studio11 - Family Salon Khagul" />
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!--==============================
	    All CSS File
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Open+Sans:wght@400;600&family=Syne:wght@600;700&display=swap" rel="stylesheet">


    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo-title.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/logo-title.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo-title.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Layerslider -->
    <link rel="stylesheet" href="assets/css/layerslider.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<style>
    .vs-btn {
   
   /* background-color: #ab47bc; */
   background-color:#3f1647;

}
.sub-title {
   color: #efd074;
  font-weight: 800;
}

.header-info-list li > i {
 color: #efd074;
font-weight: 800;
  
}
/* BLOG */
.blog-content {
    background: var(--white-color);
    box-shadow: 0px 6px 35px 0px rgb(0 0 0 / 9%);
    padding-left: 50px;
    padding-bottom:20px;
    /* background:#1a1710; */
}
@media (max-width:767px){
    .blog-single .blog-content {
    padding: 30px;
}

.blog-single .blog-content {
        margin-top: 0px;
    }
    
}
/* @media (max-width: 991px){
.header-logo {
    padding: 0px;
}
} */

/* fixed */
.header-inner-fixed {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 999;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  animation: slideDown 0.3s ease-in-out;
  display: flex;
  align-items: center;
  padding: 10px 0; /* Adjust padding as needed */
}

.header-inner-fixed .header-logo {
  margin-right: auto; /* Push the logo to the left */
}

.header-inner-fixed .main-menu {
  margin-left: auto; /* Push the menu to the right */
}

@keyframes slideDown {
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateY(0);
  }
}


/* fixxxde */

</style>


<body>


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here 
	******************************** -->




    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader  ">
        <button class="vs-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <img src="assets/img/logo-bg.png" alt="Raj Studio11">
            <span class="loader"></span>
        </div>
    </div>
    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index"><img src="assets/img/logo-bg-1.png" alt="Raj Studio11"></a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    <li><a href="index">Home</a></li>
                    <li>
                        <a href="about">About</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="javascript:void()">Services</a>
                        <ul class="sub-menu">
                            <li><a href="service-hair-care">Hair Care</a></li>
                            <li><a href="service-makeup">Makeup</a></li>
                            <li><a href="service-skin-care">Skin Care</a></li>
                            <li><a href="service-hair-removal">Hair Removal</a></li>
                         
                        </ul>
                    </li>
                    <li><a href="blog">Blog</a>
                       
                    </li>
                  
                    <li>
                        <a href="contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
        Header Area
    ==============================-->
    <header class="vs-header header-layout1">
        <!-- Header Top Area -->
        <div class="header-top py-15 d-none d-sm-block" style="background: #3f1647;">
            <div class="container">
                <div class="row align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-sm-auto d-none d-lg-block">
                        <p class="m-0 fw-semibold text-white"><i class="fal fa-map-marker-alt me-2"></i> <a href="contact" class="text-reset"> 1st Floor, Bihari Complex, near Radiant School, Khagual, Patna</a></p>
                    </div>
                    <div class="col-auto">
                        <div class="header-info-list text-white">
                            <ul>
                                <li><i class="fas fa-phone-alt"></i>Phone: <a class="text-reset" href="tel:02073885619">+91-7091-181-948</a></li>
                                <li><i class="fal fa-envelope"></i>Email: <a class="text-reset" href="mailto:info@example.com">info@rajstudio11.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <!-- Main Menu Area -->
                <div class="header-inner">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-7 col-sm-auto order-1">
                                <div class="header-logo  py-lg-0">
                                    <a href="index"><img src="assets/img/logo-bg-1.png" alt="raj studio11" style="height: 60px;
"></a>
                                </div>
                            </div>
                            <div class="col-auto order-3 order-sm-2">
                                <nav class="main-menu menu-style1 d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <a href="index"><span class="has-new-lable">Home</span></a>
                                            
                                        </li>
                                        <li>
                                            <a href="about">About</a>
                                        </li>
                                        <li class="menu-item-has-children mega-menu-wrap">
                                            <a href="#"><span class="has-new-lable">Services</span></a>
                                            <ul class="mega-menu">
                                                <li><a href="service-hair-care">Hair Care</a>
                                                    <ul>
                                                        <li><a href="service-hair-care#hair-treatment">Hair Treatment</a></li>
                                                        <li><a href="service-hair-care#hair-coloring">Hair Coloring</a></li>
                                                        <li><a href="service-hair-care#hair-do">Hair Do (Female)</a></li>
                                                        <li><a href="service-hair-care#hair-rebonding">Hair Rebonding</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="service-makeup">Makeup</a>
                                                    <ul>
                                                        <li><a href="service-makeup#bridal-package">Bridal package</a></li>
                                                        <li><a href="service-makeup#groom-makeup">Groom Makeup</a></li>
                                                        <li><a href="service-makeup#engagement-makeup">Engagement Makeup</a></li>
                                                        <li><a href="service-makeup#basic-makeup">Basic Makeup</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="service-skin-care">Skin Care</a>
                                                    <ul>
                                                       
                                                        <li><a href="service-skin-care#facial">Facial</a></li>
                                                        <li><a href="service-skin-care#skin-treatment">Skin Treatment</a></li>
                                                        <li><a href="service-skin-care#clean-up">Clean Up</a></li>
                                                        <li><a href="service-skin-care#facial-massages">Facial Massages</a></li>

                                                    </ul>
                                                </li>
                                                <li><a href="service-hair-removal">Hair Removal</a>
                                                    <ul>
                                                        <li><a href="service-hair-removal#waxing">Waxing</a></li>
                                                        <li><a href="service-hair-removal#threading">Threading</a></li>
                                                        <li><a href="service-hair-removal#eyebrow-shaping">Eyebrow Shaping</a></li>
                                                        <li><a href="service-hair-removal#fruit-wax-bikini-line">Fruit Wax - Bikini Line</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="blog">Blog</a></li>
                                        <li>
                                            <a href="contact">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-5 col-sm-auto order-2 order-sm-3 text-end">
                                <div class="header-btn">
                                   
                                    <a href="contact" class="vs-btn d-none d-xl-inline-block">Book Now</a>
                                    <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fas fa-bars"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
    </header>

    <script>
        window.addEventListener('scroll', function() {
  const headerInner = document.querySelector('.header-inner');
  const scrollPosition = window.scrollY;

  if (scrollPosition > 100) {
    headerInner.classList.add('header-inner-fixed');
  } else {
    headerInner.classList.remove('header-inner-fixed');
  }
});

    </script>
    <!--==============================


