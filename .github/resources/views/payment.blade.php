<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
        <meta name="description" content="">
        <title>Hotel Website</title>        
		
        <link rel="icon" type="image/png" href="uploads/favicon.png">

        <!-- All CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/select2.min.css">
        <link rel="stylesheet" href="css/select2-bootstrap.min.css">
        <link rel="stylesheet" href="css/sweetalert2.min.css">
        <link rel="stylesheet" href="css/spacing.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/daterangepicker.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/style.css">
        
        <!-- All Javascripts -->
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/select2.full.js"></script>
        <script src="js/sweetalert2.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/acmeticker.js"></script>
        <script src="js/moment.min.js"></script>
        <script src="js/daterangepicker.min.js"></script>
        <script src="js/sticky_sidebar.js"></script>
        <script src="js/jquery.meanmenu.js"></script>

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
                            <li class="menu"><a href="cart.html">Cart</a></li>
                            <li class="menu"><a href="checkout.html">Checkout</a></li>
                            <li class="menu"><a href="signup.html">Sign Up</a></li>
                            <li class="menu"><a href="login.html">Login</a></li>
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
                                    <a href="index.html" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void;" class="nav-link dropdown-toggle">Room & Suite</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="room-detail.html" class="nav-link">Regular Couple Bed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="room-detail.html" class="nav-link">Delux Couple Bed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="room-detail.html" class="nav-link">Regular Double Bed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="room-detail.html" class="nav-link">Delux Double Bed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="room-detail.html" class="nav-link">Premium Suite</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void;" class="nav-link dropdown-toggle">Gallery</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="photo-gallery.html" class="nav-link">Photo Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="video-gallery.html" class="nav-link">Video Gallery</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="blog.html" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>


        
        <div class="page-top">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Payment</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="page-content">
            <div class="container">
                <div class="row cart">
                    <div class="col-lg-8 col-md-6 checkout-left mb_30">
                        
                        <h4>Make Payment</h4>
                        <select name="payment_method" class="form-control select2" id="paymentMethodChange" autocomplete="off">
                            <option value="">Select Payment Method</option>
                            <option value="PayPal">PayPal</option>
                            <option value="Stripe">Stripe</option>
                        </select>

                        <div class="paypal mt_20">
                            <h4>Pay with PayPal</h4>
                            <p>Write necessary code here</p>
                        </div>
    
                        <div class="stripe mt_20">
                            <h4>Pay with Stripe</h4>
                            <p>Write necessary code here</p>
                        </div>
    
                    </div>

                    <div class="col-lg-4 col-md-6 checkout-right">
                        <div class="inner">
                            <h4 class="mb_10">Cart Details</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Regular Couple Bed
                                                <br>
                                                (05/07/2022 - 07/07/2022)
                                                <br>
                                                Adult: 2, Children: 0
                                            </td>
                                            <td class="p_price">$60</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Regular Couple Bed
                                                <br>
                                                (05/07/2022 - 05/07/2022)
                                                <br>
                                                Adult: 2, Children: 0
                                            </td>
                                            <td class="p_price">$60</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Delux Couple Bed
                                                <br>
                                                (10/07/2022 - 11/07/2022)
                                                <br>
                                                Adult: 2, Children: 2
                                            </td>
                                            <td class="p_price">$40</td>
                                        </tr>
                                        <tr>
                                            <td><b>Total:</b></td>
                                            <td class="p_price"><b>$160</b></td>
                                        </tr>
                                    </tbody>
                                </table>
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