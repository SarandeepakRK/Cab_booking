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
                                    <li class="menu-item   current-menu-parent menu-item-has-children    ">
                                        <a href="home.php">Home</a>
                                    </li>
									<li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="about.php"> About </a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="booking.php"> Booking </a>
                                    </li>
                             
                                   
                                    <li class="menu-item menu-item-has-children active-color ">
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
                            <h3>News</h3>
                            <ol class="breadcrumb">
                                <li><a href="home.php">Home</a></li>
                                <li class="active">News</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////// -->
        <div class="wheel-blog-wrap marg-lg-t150  marg-sm-t50">
            <div class="container  ">
                <div class="row">
                    <div class="col-md-8  padd-lr0">
                        <article class="wheel-blog-item">
                            <div class="wheel-blog-data">
                                <i>29 April</i>
                            </div>
                            <div class="wheel-blog-logo"><img src="images/i24.jpg" alt=""></div>
                            <header class="wheel-blog-header">
                                <h5><a href="news-details.html">Seamlessly generate focused content for robust infrastructures Credibly</a></h5>
                            </header>
                            <div class="wheel-blog-info">
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt </p>
                            </div>
                            <footer class="wheel-blog-links clearfix">
                                <ul>
                                    <li><i class="fa fa-user"></i><a href="" class="">Anthony Doe</a></li>
                                    <li><i class="fa fa-tags"></i><a href="" class="">Shopping, Branding</a></li>
                                    <li><i class="fa fa-comments"></i><a href="" class="">17 Comments</a></li>
                                </ul>
                                <a href="" class="wheel-read-more">Read More </a>
                            </footer>
                        </article>
                        <article class="wheel-blog-item">
                            <div class="wheel-blog-data">
                                <i>29 April</i>
                            </div>
                            <div class="wheel-blog-logo">
                                <div class="swiper-container" data-autoplay="7000" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="1" data-md-slides="1" data-lg-slides="1" data-add-slides="1" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="wheel-blog-slides"><img src="images/i24.jpg" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-blog-slides"><img src="images/i25.jpg" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-blog-slides"><img src="images/i26.jpg" alt=""></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-blog-slides"><img src="images/i24.jpg" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="pagination"></div>
                                    <div class="swiper-arrow-left fa fa-angle-left"></div>
                                    <div class="swiper-arrow-right fa fa-angle-right"></div>
                                </div>
                            </div>
                            <header class="wheel-blog-header">
                                <h5><a href="news-details.html">Distinctively communicate customized services without granular human capital</a></h5>
                            </header>
                            <div class="wheel-blog-info">
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt </p>
                            </div>
                            <footer class="wheel-blog-links clearfix">
                                <ul>
                                    <li><i class="fa fa-user"></i><a href="" class="">Anthony Doe</a></li>
                                    <li><i class="fa fa-tags"></i><a href="" class="">Shopping, Branding</a></li>
                                    <li><i class="fa fa-comments"></i><a href="" class="">17 Comments</a></li>
                                </ul>
                                <a href="" class="wheel-read-more">Read More </a>
                            </footer>
                        </article>
                        <article class="wheel-blog-item">
                            <div class="wheel-blog-data">
                                <i>29 April</i>
                            </div>
                            <div class="wheel-blog-logo wheel-video">
                                <iframe   src="https://www.youtube.com/embed/AlA_EKqDOFM" ></iframe>
                            </div>
                            <header class="wheel-blog-header">
                                <h5><a href="news-details.html">Credibly synthesize prospective experiences whereas alternative action items Competently</a></h5>
                            </header>
                            <div class="wheel-blog-info">
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt </p>
                            </div>
                            <footer class="wheel-blog-links clearfix">
                                <ul>
                                    <li><i class="fa fa-user"></i><a href="" class="">Anthony Doe</a></li>
                                    <li><i class="fa fa-tags"></i><a href="" class="">Shopping, Branding</a></li>
                                    <li><i class="fa fa-comments"></i><a href="" class="">17 Comments</a></li>
                                </ul>
                                <a href="" class="wheel-read-more">Read More </a>
                            </footer>
                        </article>
                        <article class="wheel-blog-item">
                            <div class="wheel-blog-data">
                                <i>29 April</i>
                            </div>
                            <div class="wheel-blog-logo wheel-audio">
                                <iframe      src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F34019569&amp;auto_play=false&amp;show_artwork=true&amp;color=0066cc"></iframe>
                            </div>
                            <header class="wheel-blog-header">
                                <h5><a href="news-details.html">Objectively restore error-free meta-services with just  in time</a></h5>
                            </header>
                            <div class="wheel-blog-info">
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt </p>
                            </div>
                            <footer class="wheel-blog-links clearfix">
                                <ul>
                                    <li><i class="fa fa-user"></i><a href="" class="">Anthony Doe</a></li>
                                    <li><i class="fa fa-tags"></i><a href="" class="">Shopping, Branding</a></li>
                                    <li><i class="fa fa-comments"></i><a href="" class="">17 Comments</a></li>
                                </ul>
                                <a href="" class="wheel-read-more">Read More </a>
                            </footer>
                        </article>
                        <article class="wheel-blog-item">
                            <div class="wheel-blog-data">
                                <i>29 April</i>
                            </div>
                            <div class="wheel-blog-logo"><img src="images/i26.jpg" alt=""></div>
                            <header class="wheel-blog-header">
                                <h5><a href="news-details.html">Professionally productivate extensive leadership without web-enabled content</a></h5>
                            </header>
                            <div class="wheel-blog-info">
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt </p>
                            </div>
                            <footer class="wheel-blog-links clearfix">
                                <ul>
                                    <li><i class="fa fa-user"></i><a href="" class="">Anthony Doe</a></li>
                                    <li><i class="fa fa-tags"></i><a href="" class="">Shopping, Branding</a></li>
                                    <li><i class="fa fa-comments"></i><a href="" class="">17 Comments</a></li>
                                </ul>
                                <a href="" class="wheel-read-more">Read More </a>
                            </footer>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <aside class="wheel-widgets">
                            <div class="wheel-widget-search">
                                <div class="form">
                                    <input type="text" placeholder="Search ..">
                                    <button><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                            <section class="wheel-widget-categories">
                                <header>
                                    <h5>Categories</h5>
                                </header>
                                <ul>
                                    <li class=" clearfix"><a href="">Blogging </a> <i>11</i></li>
                                    <li class=" clearfix"><a href=""> Transports </a><i>19</i></li>
                                    <li class=" clearfix"><a href="">Excotic Cars</a><i>08</i></li>
                                    <li class=" clearfix"><a href=""> Travelling</a><i>29</i></li>
                                    <li class=" clearfix"><a href="">WooCommerce </a><i>05</i></li>
                                    <li class=" clearfix"><a href="">News</a> <i>11</i></li>
                                </ul>
                            </section>
                            <section class="wheel-widget-posts">
                                <header>
                                    <h5>Popular Posts</h5>
                                </header>
                                <ul>
                                    <li>
                                        <a href="" class="wheel-post clearfix">
                                            <div class="wheel-post-img"><img src="images/ico11.jpg" alt=""></div>
                                            <div class="wheel-post-content">
                                                <h6>Monotonectally build  distinctive </h6>
                                                <span class="wheel-date fa fa-calendar">May 30</span>
                                                <span class="wheel-comment fa fa-comments">27</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="wheel-post clearfix">
                                            <div class="wheel-post-img"><img src="images/ico12.jpg" alt=""></div>
                                            <div class="wheel-post-content">
                                                <h6>Monotonectally build  distinctive </h6>
                                                <span class="wheel-date fa fa-calendar">May 30</span>
                                                <span class="wheel-comment fa fa-comments">27</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="wheel-post clearfix">
                                            <div class="wheel-post-img"><img src="images/ico13.jpg" alt=""></div>
                                            <div class="wheel-post-content">
                                                <h6>Monotonectally build  distinctive </h6>
                                                <span class="wheel-date fa fa-calendar">May 30</span>
                                                <span class="wheel-comment fa fa-comments">27</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                            <section class="wheel-tags">
                                <header>
                                    <h5>tags Cloud</h5>
                                </header>
                                <a href="" class="wheel-tag">News</a>
                                <a href="" class="wheel-tag">Porsche</a>
                                <a href="" class="wheel-tag">trevelling</a>
                                <a href="" class="wheel-tag">Marcedes-benz</a>
                                <a href="" class="wheel-tag">Cars</a>
                                <a href="" class="wheel-tag">Hyundai</a>
                                <a href="" class="wheel-tag">Land Rovers</a>
                                <a href="" class="wheel-tag">Mclaren</a>
                                <a href="" class="wheel-tag">Toyota</a>
                            </section>
                        </aside>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 padd-lr0">
                        <div class="wheel-page-pagination marg-lg-t60 marg-lg-b150  marg-sm-b50">
                            <a class="prev page-numbers fa fa-arrow-left" href="#"></a>
                            <span class="page-numbers current">1</span>
							 <a class="page-numbers" href="#">2</a>
                            <a class="page-numbers" href="#">3</a>
                            <a class="page-numbers" href="#">4</a>
                            <a class="next page-numbers fa fa-arrow-right" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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