<?php
	ob_start();
	session_start();
	require_once 'connection.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
	$name = $userRow['userName'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>Welcome to Cab Book !</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="home.php"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+91) 9876543210</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>contact@cabbook.com</span></a></div>
                            </div>
							<div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <?php echo $name ?>
                                        </button>
                                    </div>
                                </div>
							</div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children ">
                                        <a href="home.php">Home</a>
                                    </li>
									<li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="about.php"> About </a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="booking.php"> Booking </a>
                                    </li>
                                 
                                   
                                    <li class="menu-item menu-item-has-children  ">
                                        <a href="news.php">News</a>
                                    </li>
                                    <li class="menu-item ">
                                        <a href="contact.php">Contact</a>
                                    </li>
                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                            <a href="logout.php?logout" class="wheel-cheader-but">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //////////////////////////////// -->
        <div class="wheel-start3 style-5">
            <img src="images/z-bg-11.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 padd-lr0">
                        <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                            <h3>Cab Data</h3>
                            <ol class="breadcrumb">
                                <li><a href="home.php">Home</a></li>
                                <li class="active">Cab Data</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="imgOnBanner-wrap">
                <img src="images/z-banner-img.png" alt="" class="imgOnBanner img-responsive">
            </div>
        </div>
        <div class="container-fluid padd-lr0">
            <div class="row padd-lr0">
                <div class="col-xs-12 padd-lr0">
                    <div class="container padd-lr0 xs-padd">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="listing-hedlines t-center">
                                    <h5 class="title">Lamborghini Sesto Elemento</h5>
                                    <div class="subtitle">Exotic Car Collection</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 padd-lr0 xs-padd sm-addpadd">
                                <div class="wheel-collection style-2">
                                    <div class="tabs">
                                        <div class="tabs-header">
                                            <ul>
                                                <li class="active"><a href="#">Features</a></li>
                                                <li><a href="#">Description</a></li>
                                                <li><a href="#">Reviews</a></li>
                                            </ul>
                                        </div>
                                        <div class="tabs-content marg-lg-b30">
                                            <div class="tabs-item text-item active">
                                                <ul class="tabslist">
                                                    <li class="item">2 Adult Passanger Seats</li>
                                                    <li class="item">1 Baby Seat</li>
                                                    <li class="item">2 Doors</li>
                                                    <li class="item">Air Conditioning</li>
                                                </ul>
                                                <ul class="tabslist">
                                                    <li class="item">Airbags</li>
                                                    <li class="item">Power Steering</li>
                                                    <li class="item">Automatic Transmission</li>
                                                    <li class="item">Central Locking</li>
                                                </ul>
                                                <ul class="tabslist">
                                                    <li class="item">CO2 145g/km</li>
                                                    <li class="item">AM/FM/CD Stereo Radio</li>
                                                    <li class="item">ABS Breaks</li>
                                                    <li class="item">140km Mileage Per Tank</li>
                                                </ul>
                                            </div>
                                            <div class="tabs-item text-item">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum est expedita harum neque odio perspiciatis tempora? Aliquid aut autem debitis, deserunt ipsum nesciunt placeat quas voluptatum. Accusantium beatae nobis sint.
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eveniet id natus nesciunt, quis quisquam reiciendis similique. Cum debitis doloribus et facere iste modi nam necessitatibus obcaecati, placeat quasi, repellat.
                                                </p>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum est expedita harum neque odio perspiciatis tempora? Aliquid aut autem debitis, deserunt ipsum nesciunt placeat quas voluptatum. Accusantium beatae nobis sint.
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consectetur dicta eos error exercitationem ipsam laudantium libero, magni molestias necessitatibus nesciunt nobis non omnis, possimus quis recusandae sed vel vitae.
                                                </p>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ipsa, ipsum. Deleniti dicta eos numquam odio quasi quis reiciendis, velit veniam. Architecto consectetur ducimus esse mollitia, natus nemo quia repellat?
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid, aperiam architecto dicta dolores eaque est exercitationem fugit iusto, molestias placeat praesentium ratione sit sunt temporibus ullam voluptatum. Deleniti, non?
                                                </p>
                                            </div>
                                            <div class="tabs-item text-item">
                                                <div class="wheel-comments-area wheel-bg1">
                                                    <div class="wheel-comments-list">
                                                        <ul>
                                                            <li>
                                                                <div class="wheel-comment-body">
                                                                    <div class="clearfix">
                                                                        <div class="comment-author">
                                                                            <img src="images/l3.png" alt="">
                                                                            <a href="">Anthony Martial</a>
                                                                            <div class="ratings">
                                                                                <img src="images/stars.png" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="comment-metadata">
                                                                            <time datetime="2015-01-10T20:15:40+00:00">  13:05, May 27</time>
                                                                        </div>
                                                                    </div>
                                                                    <div class="comment-content">
                                                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu.</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="wheel-sub-comment">
                                                                    <div class="wheel-comment-body">
                                                                        <div class="clearfix">
                                                                            <div class="comment-author">
                                                                                <img src="images/l4.png" alt=""><a href="">Katherine Sanders</a>
                                                                                <div class="ratings">
                                                                                    <img src="images/stars.png" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="comment-metadata">
                                                                                <time datetime="2015-01-10T20:15:40+00:00">  13:05, May 27</time>
                                                                            </div>
                                                                        </div>
                                                                        <div class="comment-content">
                                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="wheel-comment-body">
                                                                    <div class="clearfix">
                                                                        <div class="comment-author">
                                                                            <img src="images/l5.png" alt=""><a href="">Vicki Rogers</a>
                                                                            <div class="ratings">
                                                                                <img src="images/stars.png" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="comment-metadata">
                                                                            <time datetime="2015-01-10T20:15:40+00:00">  13:05, May 27</time>
                                                                        </div>
                                                                    </div>
                                                                    <div class="comment-content">
                                                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu.</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <section class="wheel-reply-form wheel-bg1">
                                                    <header>
                                                        <h3>Add Your Review</h3>
                                                    </header>
                                                    <form action="#">
                                                        <textarea placeholder="Your Review"></textarea>
                                                        <button>Post Now</button>
                                                    </form>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid padd-lr0 z-bg-1">
            <div class="row marg-lg-t75 marg-xs-t0">
                <div class="col-xs-12 padd-lr0 xs-padd">
                    <div class="container padd-lr0 xs-padd">
                        <div class="row">
                            <div class="col-xs-12 padd-lr0 xs-padd marg-lg-b90 marg-lg-t70 marg-sm-t30">
                                <div class="wheel-header text-center">
                                    <h5>Book Now</h5>
                                    <h3>Make A <span>Reservation</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="row marg-lg-b20">
                            <div class="col-xs-12 padd-lr0 xs-padd marg-lg-b60 marg-sm-b10">
                                <div class="wheel-start-form wheel-start-form2    ">
                                    <form action="checkout.php" method="get">
                                        
                                        <div class="clearfix">
                                            <div class="wheel-date">
                                                <span>Pickup Date</span>
                                               
                                                <input  type="date" name="pdate" required>
                                                
                                            </div>
                                            <div class="wheel-date ">
                                                <span>Pickup time</span>
                                                <label for="input-val23" class="fa fa-clock-o">
                                                <input class="timepicker" name="ptime" type="text" required>
                                                </label>
                                            </div>
                                            <div class="wheel-date">
                                                <span>Return Date</span>
                                                
                                                <input  type="date" name="rdate" required>
                                                
                                            </div>
                                            <div class="wheel-date">
                                                <span>Return Time</span>
                                                <label for="input-val25" class="fa fa-clock-o">
                                                <input class="timepicker" name="rtime" type="text" required>
                                                </label>
                                            </div>
												<div class="row marg-lg-b80 marg-sm-b0">
												<div class="col-xs-12 marg-lg-t30 marg-lg-b70 t-center">
												<button type="submit" class="wheel-btn" id='input-val27'>Book Now</button>
												</div>
											</div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="car-swiper-wrap">
            <!-- /////////////////////////////////// -->
            <div class="swiper-container" data-autoplay="5000" data-loop="1" data-speed="1000" data-slides-per-view="responsive" data-add-slides="3" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!-- swiper slide -->
                        <div class="car-item-wrap">
                            <div class="title">2016 Marcedes-Benz SLK</div>
                            <div class="price"><span>₹79<sup>00</sup></span>/Day</div>
                            <div class="img-wrap">
                                <img src="images/z-car-1.png" alt="img" class="img-responsive">
                            </div>
                            <ul class="metadata">
                                <li>2 seats</li>
                                <li>2 bags</li>
                                <li>150 mpg</li>
                                <li>airbags</li>
                                <li>manual/auto</li>
                                <li>ac</li>
                                <li>v8 engine</li>
                            </ul>
                            <a href="#" class="link">view details</a>
                        </div>
                    </div>
                    <!-- .swiper slide -->
                    <div class="swiper-slide">
                        <!-- swiper slide -->
                        <div class="car-item-wrap">
                            <div class="title">2016 Chevrolet Malibu</div>
                            <div class="price"><span>₹81<sup>00</sup></span>/Day</div>
                            <div class="img-wrap">
                                <img src="images/z-car-2.png" alt="img" class="img-responsive">
                            </div>
                            <ul class="metadata">
                                <li>2 seats</li>
                                <li>2 bags</li>
                                <li>150 mpg</li>
                                <li>airbags</li>
                                <li>manual/auto</li>
                                <li>ac</li>
                                <li>v8 engine</li>
                            </ul>
                            <a href="#" class="link">view details</a>
                        </div>
                    </div>
                    <!-- .swiper slide -->
                    <div class="swiper-slide">
                        <!-- swiper slide -->
                        <div class="car-item-wrap">
                            <div class="title">Bugatti Veyron</div>
                            <div class="price"><span>₹79<sup>00</sup></span>/Day</div>
                            <div class="img-wrap">
                                <img src="images/z-car-3.png" alt="img" class="img-responsive">
                            </div>
                            <ul class="metadata">
                                <li>2 seats</li>
                                <li>2 bags</li>
                                <li>150 mpg</li>
                                <li>airbags</li>
                                <li>manual/auto</li>
                                <li>ac</li>
                                <li>v8 engine</li>
                            </ul>
                            <a href="#" class="link">view details</a>
                        </div>
                    </div>
                    <!-- .swiper slide -->
                </div>
                <div class="pagination"></div>
            </div>
            <div class="swiper-outer-left"></div>
            <div class="swiper-outer-right"></div>
            <!-- /////////////////////////////// -->
        </div>
        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            <h5>Newsletter Signup </h5>
                            <h3>Subscribe & get<span> 20% </span> Off</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Your Email Adddress">
                            <button class="wheel-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <h3>Contact</h3>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>100 King Street, Gandhipuram <br> Coimbatore  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i>(+91) 9876543210</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>contact@cabbook.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item">
                            <h3>Useful Links</h3>
                            <ul>
                                <li><a href="home.php" class="">Home</a></li>
                                <li><a href="about.php" class="">About</a></li>
                                <li><a href="booking.php" class="">Booking</a></li>
                                <li><a href="rental.php" class="">Rental</a></li>
                                <li><a href="news.php" class="">News</a></li>
                                <li><a href="contact.php" class="">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                            <h3>Vehicles</h3>
                            <ul>
                                <li><a href="" class="">Exotic Cars</a></li>
                                <li><a href="" class="">SUVs</a></li>
                                <li><a href="" class="">Trucks</a></li>
                                <li><a href="" class="">Mini Vans</a></li>
                                <li><a href="" class="">Vans</a></li>
                                <li><a href="" class="">RVs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 padd-lr0">
                        <div class="wheel-footer-gallery">
                            <h3>Photo Gallery</h3>
                            <div class="  clearfix">
                                <div class="wheel-footer-galery-item"><a href=""><img src="images/i11.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="images/i12.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="images/i13.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="images/i14.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="images/i15.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="images/i16.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="images/i17.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="images/i18.jpg" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>Cab Book  &#169; <?php echo date("Y"); ?></span></div>
                </div>
            </div>
        </div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>