<!doctype html>
<html class="no-js" lang="">
    

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MNK Garage Register/Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">      
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <!-- <link rel="stylesheet" href="css/animate.min.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/jquery-ui.min.css">
<link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/jarallax.css">
    <link rel="stylesheet" href="css/odometer.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/aos.css">
    --> 
    </head>
    <body>


        <!-- preloader-start -->
        <div class="preloader">
            <div class="meter">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="subline"></div>
                <div class="subline"></div>
                <div class="subline"></div>
                <div class="subline"></div>
                <div class="subline"></div>
                <div class="loader-circle-1">
                    <div class="loader-circle-2"></div>
                </div>
                <span class="loadtext">Loading</span>
            </div>
        </div>
        <!-- preloader-end -->


        <!-- header-area -->
        <header class="header-style-two inner-page-header">
           
            <div id="sticky-header" class="main-header menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                    
                                        <img src="img/logo/logo.png" style="height: 115px;" alt="Logo">
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="dropdown"><a href="index.php">Home</a>           
                                            </li>
                                            <li class="dropdown"><a href="inventory-list.php">INVENTORY</a>                                               
                                            </li> 
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="header-search"><a href="#" data-toggle="collapse" data-target="#collapse-search-body" aria-expanded="false" aria-controls="collapse-search-body"><i class="fas fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="menu-backdrop"></div>
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="index.php"><img src="img/logo/logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
                <div id="collapse-search-body" class="collapse-search-body collapse">
                    <div class="search-body">
                        <div class="container custom-container">
                            <form action="#">
                                <div class="form-item">
                                    <input name="search" placeholder="Type here...">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->


        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>Login-Register</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Login-Register</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- login-register-area -->
            <section class="login-register-area gray-lite pb-120">
                <div class="container">
                    <div class="login-reg-wrap">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="login-wrap">
                                    <h3 class="widget-title">Log in your <span>account</span></h3>
                                    <form action="checkUser.php" method="post" class="login-form">
                                        <div class="form-grp">
                                            <label for="username">Email <span>*</span></label>
                                            <input type="text" name="email" id="username" placeholder="Email" required>
                                        </div>
                                        <div class="form-grp">
                                            <label for="password">Password <span>*</span></label>
                                            <input type="password" name="password_user" id="password" placeholder="*****" required>
                                        </div>
                                        
                                        <button class="btn">Login</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="login-wrap reg-wrap">
                                    <h3 class="widget-title">Register</h3>
                                    <form action="addUser.php" method="post" class="login-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <label for="userName">Username <span>*</span></label>
                                                    <input type="text" name="username" id="userName" placeholder="Username" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <label for="password2">Your Password <span>*</span></label>
                                                    <input type="password" name="password_user" id="password2" placeholder="*****" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <label for="email">Email <span>*</span></label>
                                                    <input type="email" name="email" id="email" placeholder="demo@info.com" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <label for="phone">Your Phone</label>
                                                    <input type="text" name="telephone" id="phone" placeholder="+212.000000" required>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                        <button class="btn">Register</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- login-register-area-end -->

            <!-- footer-brand-area -->
            <div class="footer-brand-area white-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-6 order-2 order-md-0">
                            <div class="footer-logo">
                                <img src="img/logo/w_logo.png" style="height: 96px;" alt="">
                                
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="row footer-brand-active">
                                <div class="col">
                                    <div class="footer-brand-item">
                                        <a href="#"><img src="img/brand/footer_brand01.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="footer-brand-item">
                                        <a href="#"><img src="img/brand/footer_brand02.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="footer-brand-item">
                                        <a href="#"><img src="img/brand/footer_brand03.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="footer-brand-item">
                                        <a href="#"><img src="img/brand/footer_brand04.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="footer-brand-item">
                                        <a href="#"><img src="img/brand/footer_brand05.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="footer-brand-item">
                                        <a href="#"><img src="img/brand/footer_brand03.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-brand-area-end -->

        </main>
        <!-- main-area-end -->



        <!-- footer-area -->
        <footer class="footer-bg" data-background="img/bg/footer_bg.jpg">
            <div class="footer-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-widget black-bg mb-50">
                                <div class="fw-title mb-30">
                                    <h4 class="title">Contact Us</h4>
                                </div>
                                <div class="footer-text mb-45">
                                    <p>There are many variations of passaes of orem ipsum available, but the majority have in some form, by ipsum
                                    injected</p>
                                </div>
                                <div class="footer-contact">
                                    <ul>
                                        <li>
                                            <div class="icon"><i class="fas fa-phone"></i></div>
                                            <div class="content">
                                                <span>PHONE NUMBER</span>
                                                <p><a href="tel:12345678">+212 604 247 324</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fas fa-envelope"></i></div>
                                            <div class="content">
                                                <span>EMAIL ADDRES</span>
                                                <p><a href="">livco.mnk@gmail.com</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                            <div class="content">
                                                <span>address</span>
                                                <p>10 Rue Liberte, Etage N°3 Appartement 5 - Casablanca, Maroc</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="footer-right-wrap">
                                <div class="row justify-content-between">
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="footer-widget mb-50">
                                            <div class="fw-title mb-30">
                                                <h4 class="title">Our Info</h4>
                                            </div>
                                            <div class="fw-link">
                                                <ul>
                                                    <li><a href="#">About Us</a></li>
                                                    <li><a href="#">Our Service</a></li>
                                                    <li><a href="#">Our Shop</a></li>
                                                    <li><a href="#">Blog</a></li>
                                                    <li><a href="#">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="footer-widget mb-50">
                                            <div class="fw-title mb-30">
                                                <h4 class="title">Quick Link</h4>
                                            </div>
                                            <div class="fw-link">
                                                <ul>
                                                    <li><a href="#">About Us</a></li>
                                                    <li><a href="#">Our Service</a></li>
                                                    <li><a href="#">Our Shop</a></li>
                                                    <li><a href="#">Blog</a></li>
                                                    <li><a href="#">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-6 col-md-6">
                                        <div class="footer-widget mb-50">
                                            <div class="fw-title mb-30">
                                                <h4 class="title">Subscribe Us</h4>
                                            </div>
                                            <div class="footer-newsletter">
                                                <form action="#">
                                                    <input type="email" placeholder="Your Mail...">
                                                    <button><i class="fas fa-angle-double-right"></i></button>
                                                </form>
                                            </div>
                                            <div class="footer-social">
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-payment-method-wrap">
                                    <div class="content">
                                        <p>We know that honesty and transparency friendly customer service</p>
                                    </div>
                                    <div class="payment-card">
                                        <img src="img/images/payment_card.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="copyright-text">
                                <p>Copyright © 2021. All rights reserved. by MNK Garage</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="scroll-top scroll-to-target" data-target="html">
                                <i class="fas fa-angle-up"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->



		<!-- JS here -->
        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/jquery-3.5.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.odometer.min.js"></script>
        <script src="js/jquery.accrue.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/jarallax.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>

</html>
