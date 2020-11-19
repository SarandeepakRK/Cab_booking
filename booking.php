<?php
	ob_start();
	session_start();
	require_once 'connection.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	if( !isset($_GET['dplace']) ) {
		header("Location: home.php");
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
	$name = $userRow['userName'];
	$userId = $userRow['userId'];
?>
<?php
	require_once 'connect.php';
	$dplace=$_GET['dplace'];
	$pplace=$_GET['pplace'];
	$pdate=$_GET['pdate'];
	$ptime=$_GET['ptime'];
	$ctype=$_GET['ctype'];
	$btype=$_GET['btype'];
?>
<?php
            
            $origin = $pplace; $destination = $dplace;
            $api = file_get_contents("https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$origin."&destinations=".$destination."&key=AIzaSyDbwMMkO9OR7mEilbPY1SChgVLq17KMEgw");
            $data = json_decode($api);
			$distance = ((int)$data->rows[0]->elements[0]->distance->value / 1000);
			$time = $data->rows[0]->elements[0]->duration->text;
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
                                    <li class="menu-item current-menu-parent menu-item-has-children active-color ">
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
        <div class="wheel-start3">
            <img src="images/bg7.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 padd-lr0">
                        <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                            <h3>Booking</h3>
                            <ol class="breadcrumb">
                                <li><a href="home.php">Home</a></li>
                                <li class="active">Booking</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////////// -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 padd-lr0">
                    <div class="wheel-billing">
                        <div class="wheel-header marg-lg-t140 marg-lg-b50 marg-sm-t100">
                            <h5>Billing Details</h5>
                        </div>
						<br>
						<div class="wheel-order-price marg-lg-t30 marg-lg-b30">
                            <div class="wheel-header ">
                                <h5>Booking Details</h5>
                            </div>
                            <ul>
								<li class="clearfix"><span>Picking Up</span><b><?php echo $pplace ?></b></li>	                               
								<li class="clearfix"><span>Dropping Off</span><b><?php echo $dplace ?></b></li>
                                <li class="clearfix"><span>Pickup Date</span><b><?php echo $pdate ?></b></li>
                                <li class="clearfix"><span>Pickup Time</span><b><?php echo $ptime ?></b></li>
                                <li class="clearfix"><span>Cab Type</span><b><?php echo $ctype ?></b></li>
                                <li class="clearfix"><span>Booking Type</span><b><?php echo $btype ?></b></li>
                                <li class="clearfix"><span>Estd Distance</span><b><?php echo $distance.' Km' ?></b></li>
                                <li class="clearfix"><span>Estd Travel Time</span><b><p style="text-transform: capitalize"><?php echo $time ?></p></b></li>
                                <li class="clearfix wheel-total">
                                    <h4>Estd Travel Price</h4>
									
                                    <b>₹ <?php $fare = $distance*20; echo $fare ?></b>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 padd-lr0">
                    <div class="wheel-order marg-lg-t150 marg-lg-b150 marg-sm-b100 marg-sm-t100">
                        	<div class="wheel-search-form clearfix">
                            <input type="text" placeholder="Coupon Code">
                            <button class="">Apply Coupon</button>
							</div>
							<div class="wheel-payment marg-lg-t60 marg-lg-b30">
                            <div class="wheel-header ">
                                <h5>Payment Method</h5>
                            </div>
                            <form method="post" action="conf-booking.php">
							<input type="hidden" value=<?php echo $userId ?> name='uid'>
							<input type="hidden" value=<?php echo $dplace ?> name='dplace'>
							<input type="hidden" value=<?php echo $pplace ?> name='pplace'>
							<input type="hidden" value=<?php echo $pdate ?> name='pdate'>
							<input type="hidden" value=<?php echo $ptime ?> name='ptime'>
							<input type="hidden" value=<?php echo $ctype ?> name='ctype'>
							<input type="hidden" value=<?php echo $btype ?> name='btype'>
							<input type="hidden" value=<?php echo $distance ?> name='distance'>
							<input type="hidden" value=<?php echo $time ?> name='time'>
							<input type="hidden" value=<?php echo $fare ?> name='fare'>
							
							
							
							
							
								<p align="justify">Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit  </p>
                                <input type="radio" id='r1' name='payment'>
                                <label for="r1"><i></i>
                                <span>Direct Cash</span>
                                </label>
								<input type="radio" id='r3' name='payment'>
                                <label for="r3"><i></i>
                                <span>Online Banking</span>
                                </label>
                                <input type="radio" id='r2' name='payment'>
                                <label for="r2"><i></i>
                                <span>Credit Card</span>
                                </label>
                                <input type="radio" id='r3' name='payment'>
                                <label for="r3"><i></i>
                                <span>Debit Card</span>
                                </label>
                                <label for="input-val10" class="wheel-agree">
                                <input type="checkbox" id='input-val10' required>
                                <span>I Agree With The</span>
                                <a href=""> Terms and Conditions</a>
                                </label>
                                <button type="submit" name="submit">Confirm Booking</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .wheel-billing -->
        <!-- /////////////////////////////// -->
        
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo2.png" alt=""></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>121 King Street, Melbourne <br>
                                    VIC 3000, Australia  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +61 3 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>contact@wheel-rental.com</span></a></li>
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
                                <li><a href="" class="">About us</a></li>
                                <li><a href="" class="">Customer Service</a></li>
                                <li><a href="" class="">Contact Us</a></li>
                                <li><a href="" class="">Safety Recall</a></li>
                                <li><a href="" class="">Privacy policy</a></li>
                                <li><a href="" class="">Site Map</a></li>
                                <li><a href="" class="">Terms & condition</a></li>
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
                                <li><a href="" class="">Moving Trucks</a></li>
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
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; WHEEL 2016 | Designed with Love By bigpsfan</span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Listings</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
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