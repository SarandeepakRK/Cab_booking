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
	$uid = $userRow['userId'];
?>
<?php
	require_once 'connection.php';
	$pdate=$_GET['pdate'];
	$ptime=$_GET['ptime'];
	$rdate=$_GET['rdate'];
	$rtime=$_GET['rtime'];
?>
<?php
	require_once 'connect.php';
	if( isset($_POST['submit']) ) {

	$date = date("d-m-Y");
	$query = "INSERT INTO rental (uid,aadhaar,license,mobile,email,pdate,ptime,rdate,rtime,nod,rent,date) VALUES ('$_POST[uid]','$_POST[aadhaar]','$_POST[license]','$_POST[mobile]','$_POST[email]','$_POST[pdate]','$_POST[ptime]','$_POST[rdate]','$_POST[rtime]','$_POST[nod]','$_POST[rent]','$date')";

	if($connection->query($query)===TRUE) {
	echo "<script type='text/javascript'>alert('Your Booking Confirmed Successfully!')</script>";
	echo "<script type='text/javascript'>window.location.href = 'home.php'</script>";
	}	
	else {
    echo "Error: " . $query . "<br>" . $connection->error;
}
}


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
                                    <li class="menu-item   current-menu-parent menu-item-has-children   ">
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
        <div class="wheel-start3">
            <img src="images/bg7.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 padd-lr0">
                        <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                            <h3>Checkout</h3>
                            <ol class="breadcrumb">
                                <li><a href="home.php">Home</a></li>
                                <li class="active">Checkout</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="product-wrap">
            <!-- ////////////////////////////////////////// -->
            <div class="container padd-lr0 xs-padd">
                <div class="row">
                    <div class="col-xs-12 pad-r col-md-6">
                        <div class="headlines1">
                            Personal Info
                        </div>
					<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <div class="form-2 marg-lg-b25">
                            <input type="text" class="f-input" name="aadhaar" placeholder="Aadhaar No" required>
                            <input type="text" class="f-input f-right" name="license" placeholder="License No" required>
                            <input type="text" class="f-input" name="mobile" placeholder="Mobile" required>
                            <input type="text" class="f-input f-right" name="email" placeholder="Email" required>
                            <input type="hidden" class="f-input f-right" name="uid" value="<?php echo $uid ?>" required>
                            <input type="hidden" class="f-input f-right" name="pdate" value="<?php echo $pdate ?>" required>
                            <input type="hidden" class="f-input f-right" name="ptime" value="<?php echo $ptime ?>" required>
                            <input type="hidden" class="f-input f-right" name="rdate" value="<?php echo $rdate ?>" required>
                            <input type="hidden" class="f-input f-right" name="rtime" value="<?php echo $rtime ?>" required>
                            <label>
                            <input type="checkbox" class="input-check" value="yes" required>
                            I Agree With The <a href="#">Terms and Conditions</a>
                            </label>
                        </div>
                        
                        <div class="headlines1">
                            Your order
                        </div>
                        <ul class="order clearfix marg-lg-b40 marg-xs-b10">
                            <li class="item clearfix">
                                <div class="title">Per Day</div>
                                <span>₹ 1500.00</span>
                            </li>
							<?php
							$pdate = $_GET['pdate'];
							$rdate = $_GET['rdate'];
							$count = round(abs(strtotime($rdate)-strtotime($pdate))/86400);
							
							?>
							<input type="hidden" class="f-input f-right" name="nod" value="<?php echo $count ?>" required>
                            <li class="item clearfix">
                                <div class="title">Total Days</div>
                                <span><?php echo $count." Days"; ?></span>
                            </li>
                            <li class="item clearfix">
                                <div class="title">Advance Amount</div>
                                <span><?php echo "₹ ".$count*1500; ?></span>
								<input type="hidden" class="f-input f-right" name="rent" value="<?php echo $count*1500 ?>" required>
                            </li>
                        </ul>
						
                        <div class="payment">
                            <div class="headlines1">
                                Payment method
                            </div>
                            <input name="pay" id="pay1" type="radio" value="1" checked>
                            <label for="pay1">Pay at Rental Counter</label>
                            <input name="pay" id="pay2" type="radio" value="2">
                            <label for="pay2">Pay Online <span>(Save ₹250)</span></label>
                            <div class="total clearfix">
                                <div class="title">Estimated Total</div>
                                <div class="price"><?php echo "₹ ".$count*1500; ?></div>
                            </div>
                            <div class="agree">
                                <input type="checkbox" class="input-check" value="yes" required>
                                I agree with the <a href="#">Terms and Conditions</a>
                            </div>
							<input type="submit" name="submit" class="wheel-btn style-1">
                            
                        </div>
                    </div>
					</form>
                    <div class="col-xs-12 pad-l col-md-6">
                        <div class="r-return-block type-2">
                       
                            <h5 class="title">Pick Up</h5>
                            <div class="date">Date <?php echo $pdate." Time ".$ptime ?></div>
                            
                        </div>
                        <div class="r-return-block type-2">
                            
                            <h5 class="title">Return</h5>
                            <div class="date">Date <?php echo $rdate." Time ".$rtime ?></div>
                           
                        </div>
                        <div class="r-return-block type-2 style-2">
                            
                            <div class="img-wrap">
                                <img src="images/z-img-1.png" alt="img" class="img-responsive">
                            </div>
                        </div>
                        <div class="r-return-block type-2 style-3">
                            <div class="text-wrap">
                                <div class="t-title">Lamborghini Aventador</div>
                                <div class="t-subtitle">Luxury Sports Car</div>
                                <ul class="metadata">
                                    <li>2 seats</li>
                                    <li>2 bags</li>
                                    <li>150 mpg</li>
                                    <li>airbags</li>
                                    <li>manual/auto</li>
                                    <li>ac</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ////////////////////////////////////////// -->
        </div>
        <!-- ////////////////////////////////////////// -->
        
        <!-- ////////////////////////////////////////// -->
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