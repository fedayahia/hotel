<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
        <meta name="description" content="">
        <title>Hotel Website</title>        
		
        <link rel="icon" type="image/png" href="uploads/favicon.png">

        <!-- All CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/select2-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/spacing.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        
        
        <!-- All Javascripts -->
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/select2.full.js') }}"></script>
<script src="{{ asset('js/sweetalert2.min.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/acmeticker.js') }}"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/daterangepicker.min.js') }}"></script>
<script src="{{ asset('js/sticky_sidebar.js') }}"></script>
<script src="{{ asset('js/jquery.meanmenu.js') }}"></script>


        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;500&display=swap" rel="stylesheet">
        
        <!-- Google Analytics -->
        <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-84213520-6"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-84213520-6');
        </script> -->

    </head>
    <body>
        
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left-side">
                        <ul>
                            <li class="phone-text">111-222-3333</li>
                            <li class="email-text">contact@arefindev.com</li>
                        </ul>
                    </div>
                    <div class="col-md-6 right-side">
                        <ul class="right">
                            <li class="menu"><a href="{{ route('cart') }}">Cart</a></li>
                            <li class="menu"><a href="{{ route('checkout') }}">Checkout</a></li>
                            <li class="menu"><a href="{{ route('signup') }}">Sign Up</a></li>
                            <li class="menu"><a href="{{ route('login') }}">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="navbar-area" id="stickymenu">

            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="uploads/logo.png" alt="">
                </a>
            </div>
        
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="uploads/logo.png" alt="">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">        
                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about') }}" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link dropdown-toggle">Room & Suite</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('room-detail') }}" class="nav-link">Regular Couple Bed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('room-detail') }}" class="nav-link">Delux Couple Bed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('room-detail') }}" class="nav-link">Regular Double Bed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('room-detail') }}" class="nav-link">Delux Double Bed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('room-detail') }}" class="nav-link">Premium Suite</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link dropdown-toggle">Gallery</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('photo-gallery') }}" class="nav-link">Photo Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('video-gallery') }}" class="nav-link">Video Gallery</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>


        <div class="slider">
            <div class="slide-carousel owl-carousel">
                <div class="item" style="background-image:url(uploads/slide1.jpg);">
                    <div class="bg"></div>
                    <div class="text">
                        <h2>Best Hotel in the City</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt libero voluptate, veritatis esse dolorem soluta.
                        </p>
                        <div class="button">
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image:url(uploads/slide2.jpg);">
                    <div class="bg"></div>
                    <div class="text">
                        <h2>Quality rooms for the guests</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt libero voluptate, veritatis esse dolorem soluta.
                        </p>
                        <div class="button">
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
             
         
        <div class="search-section">
            <div class="container">
                <form action="cart.html" method="post">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <select name="" class="form-select">
                                    <option value="">Select Room</option>
                                    <option value="">Standard Couple Bed Room</option>
                                    <option value="">Delux Couple Bed Room</option>
                                    <option value="">Standard Four Bed Room</option>
                                    <option value="">Delux Four Bed Room</option>
                                    <option value="">VIP Special Room</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="text" name="checkin_checkout" class="form-control daterange1" placeholder="Checkin & Checkout">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <input type="number" name="" class="form-control" min="1" max="30" placeholder="Adults">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <input type="number" name="" class="form-control" min="1" max="30" placeholder="Children">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary">Book Now</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>



        <div class="home-feature">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="inner">
                            <div class="icon"><i class="fa fa-clock-o"></i></div>
                            <div class="text">
                                <h2>24 hour Room service</h2>
                                <p>
                                    If you find a lower online rate, we will match it and give you an additional 25% off on your stay.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="inner">
                            <div class="icon"><i class="fa fa-wifi"></i></div>
                            <div class="text">
                                <h2>Free Wifi</h2>
                                <p>
                                    If you find a lower online rate, we will match it and give you an additional 25% off on your stay.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="inner">
                            <div class="icon"><i class="fa fa-superpowers"></i></div>
                            <div class="text">
                                <h2>Enjoy Free Nights</h2>
                                <p>
                                    If you find a lower online rate, we will match it and give you an additional 25% off on your stay.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="inner">
                            <div class="icon"><i class="fa fa-money"></i></div>
                            <div class="text">
                                <h2>Save up to 40%</h2>
                                <p>
                                    Members get access to an exclusive discounts on Radissonblu.com. Not a member yet? Hurry Up!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="inner">
                            <div class="icon"><i class="fa fa-coffee"></i></div>
                            <div class="text">
                                <h2>Complimentary Breakfast</h2>
                                <p>
                                    If you find a lower online rate, we will match it and give you an additional 25% off on your stay.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="inner">
                            <div class="icon"><i class="fa fa-crosshairs"></i></div>
                            <div class="text">
                                <h2>Swimming Pool</h2>
                                <p>
                                    If you find a lower online rate, we will match it and give you an additional 25% off on your stay.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="inner">
                            <div class="icon"><i class="fa fa-cubes"></i></div>
                            <div class="text">
                                <h2>Gym and Fitness</h2>
                                <p>
                                    If you find a lower online rate, we will match it and give you an additional 25% off on your stay.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="inner">
                            <div class="icon"><i class="fa fa-cutlery"></i></div>
                            <div class="text">
                                <h2>Top Class Restaurant</h2>
                                <p>
                                    Members get access to an exclusive discounts on Radissonblu.com. Not a member yet? Hurry Up!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        
        <div class="home-rooms">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="main-header">Rooms and Suites</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="inner">
                            <div class="photo">
                                <img src="uploads/1.jpg" alt="">
                            </div>
                            <div class="text">
                                <h2><a href="">Standard Couple Bed</a></h2>
                                <div class="price">
                                    $100/night
                                </div>
                                <div class="button">
                                    <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="inner">
                            <div class="photo">
                                <img src="uploads/2.jpg" alt="">
                            </div>
                            <div class="text">
                                <h2><a href="">Standard Couple Bed</a></h2>
                                <div class="price">
                                    $100/night
                                </div>
                                <div class="button">
                                    <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="inner">
                            <div class="photo">
                                <img src="uploads/3.jpg" alt="">
                            </div>
                            <div class="text">
                                <h2><a href="">Standard Couple Bed</a></h2>
                                <div class="price">
                                    $100/night
                                </div>
                                <div class="button">
                                    <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="inner">
                            <div class="photo">
                                <img src="uploads/4.jpg" alt="">
                            </div>
                            <div class="text">
                                <h2><a href="">Standard Couple Bed</a></h2>
                                <div class="price">
                                    $100/night
                                </div>
                                <div class="button">
                                    <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="inner">
                            <div class="photo">
                                <img src="uploads/5.jpg" alt="">
                            </div>
                            <div class="text">
                                <h2><a href="">Standard Couple Bed</a></h2>
                                <div class="price">
                                    $100/night
                                </div>
                                <div class="button">
                                    <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="inner">
                            <div class="photo">
                                <img src="uploads/6.jpg" alt="">
                            </div>
                            <div class="text">
                                <h2><a href="">Standard Couple Bed</a></h2>
                                <div class="price">
                                    $100/night
                                </div>
                                <div class="button">
                                    <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="inner">
                            <div class="photo">
                                <img src="uploads/7.jpg" alt="">
                            </div>
                            <div class="text">
                                <h2><a href="">Standard Couple Bed</a></h2>
                                <div class="price">
                                    $100/night
                                </div>
                                <div class="button">
                                    <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="inner">
                            <div class="photo">
                                <img src="uploads/1.jpg" alt="">
                            </div>
                            <div class="text">
                                <h2><a href="">Standard Couple Bed</a></h2>
                                <div class="price">
                                    $100/night
                                </div>
                                <div class="button">
                                    <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="big-button">
                            <a href="" class="btn btn-primary">See All Rooms</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="testimonial" style="background-image: url(uploads/slide2.jpg)">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="main-header">Our Happy Clients</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-carousel owl-carousel">
                            <div class="item">
                                <div class="photo">
                                    <img src="uploads/t1.jpg" alt="">
                                </div>
                                <div class="text">
                                    <h4>Robert Krol</h4>
                                    <p>CEO, ABC Company</p>
                                </div>
                                <div class="description">
                                    <p>
                                        Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens. Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens. 
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="photo">
                                    <img src="uploads/t2.jpg" alt="">
                                </div>
                                <div class="text">
                                    <h4>Sal Harvey</h4>
                                    <p>Director, DEF Company</p>
                                </div>
                                <div class="description">
                                    <p>
                                        Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens. Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="blog-item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="main-header">Latest Posts</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="inner">
                            <div class="photo">
                                <img src="uploads/1.jpg" alt="">
                            </div>
                            <div class="text">
                                <h2><a href="post.html">This is a sample blog post title</a></h2>
                                <div class="short-des">
                                    <p>
                                        If you want to get some good contents from the people of your country then just contribute into the main community of your people and I am sure you will be benfitted from that. 
                                    </p>
                                </div>
                                <div class="button">
                                    <a href="post.html" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="inner">
                            <div class="photo">
                                <img src="uploads/2.jpg" alt="">
                            </div>
                            <div class="text">
                                <h2><a href="post.html">This is a sample blog post title</a></h2>
                                <div class="short-des">
                                    <p>
                                        If you want to get some good contents from the people of your country then just contribute into the main community of your people and I am sure you will be benfitted from that. 
                                    </p>
                                </div>
                                <div class="button">
                                    <a href="post.html" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="inner">
                            <div class="photo">
                                <img src="uploads/3.jpg" alt="">
                            </div>
                            <div class="text">
                                <h2><a href="post.html">This is a sample blog post title</a></h2>
                                <div class="short-des">
                                    <p>
                                        If you want to get some good contents from the people of your country then just contribute into the main community of your people and I am sure you will be benfitted from that. 
                                    </p>
                                </div>
                                <div class="button">
                                    <a href="post.html" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading">Site Links</h2>
                            <ul class="useful-links">
                                <li><a href="rooms.html">Rooms & Suites</a></li>
                                <li><a href="photo-gallery.html">Photo Gallery</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading">Useful Links</h2>
                            <ul class="useful-links">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="terms.html">Terms and Conditions</a></li>
                                <li><a href="privacy.html">Privacy Policy</a></li>
                                <li><a href="disclaimer.html">Disclaimer</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading">Contact</h2>
                            <div class="list-item">
                                <div class="left">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="right">
                                    34 Antiger Lane,<br>
                                    PK Lane, USA, 12937
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left">
                                    <i class="fa fa-volume-control-phone"></i>
                                </div>
                                <div class="right">
                                    contact@arefindev.com
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="right">
                                    122-222-1212
                                </div>
                            </div>
                            <ul class="social">
                                <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading">Newsletter</h2>
                            <p>
                                In order to get the latest news and other great items, please subscribe us here: 
                            </p>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="text" name="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Subscribe Now">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="copyright">
            Copyright 2022, ArefinDev. All Rights Reserved.
        </div>
     
        <div class="scroll-top">
            <i class="fa fa-angle-up"></i>
        </div>
		
        <script src="js/custom.js"></script>        
		
   </body>
</html>