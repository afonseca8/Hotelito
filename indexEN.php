<?php
include('db.php');
?>

<!-- ALERTA CUSTOM -->
 
 <style>
#dialogoverlay{
	display: none;
	opacity: .8;
	position: fixed;
	top: 0px;
	left: 0px;
	background: #FFF;
	width: 100%;
	z-index: 10;
}
#dialogbox{
	display: none;
	position: fixed;
	background: #008000;
	border-radius:7px; 
	width:450px;
	z-index: 10;
}
#dialogbox > div{ background:#FFF; margin:8px; }
#dialogbox > div > #dialogboxhead{ background: #FFF; font-size:19px; padding:10px; color:#006600; font-family: verdana; }
#dialogbox > div > #dialogboxbody{ background:#FFF; padding:20px; color:#000; font-family: verdana; }
#dialogbox > div > #dialogboxfoot{ background: #FFF; padding:10px; text-align:right; }
</style>

<script>
function CustomAlert(){
    this.render = function(dialog){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = "block";
        dialogoverlay.style.height = winH+"px";
        dialogbox.style.left = (winW/2) - (550 * .5)+"px";
        dialogbox.style.top = "100px";
        dialogbox.style.display = "block";
        document.getElementById('dialogboxhead').innerHTML = "HOTEL ARENAL PARAISO";
        document.getElementById('dialogboxbody').innerHTML = dialog;
        document.getElementById('dialogboxfoot').innerHTML = '<button onclick="Alert.ok()">OK</button>';
    }
	this.ok = function(){
		document.getElementById('dialogbox').style.display = "none";
		document.getElementById('dialogoverlay').style.display = "none";
	}
}
var Alert = new CustomAlert();
</script>
 
 
  <!-- ALERTA CUSTOM -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HOTEL ARENAL PARAISO</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
        <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
        <!--fonts-->
        <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
        <!--//fonts-->
    </head>
    <body>
        <div id="dialogoverlay"></div>
        <div id="dialogbox">
          <div>
            <div id="dialogboxhead"></div>
            <div id="dialogboxbody"></div>
            <div id="dialogboxfoot"></div>
          </div>
        </div>
        <!-- header -->
        <div class="banner-top">
            <div class="social-bnr-agileits">
                <ul class="social-icons3">
                    <li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
                    <li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
                    <li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li> 
                </ul>
            </div>
            <div class="contact-bnr-w3-agile">
                <ul>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:hotelparadors@gmail.com">arenalparaiso@gmail.com</a></li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>+(506) 2479-1100</li>
                    <li><a href="indexEN.php"><img src="images/en_us.gif" alt="United States" title="United States" > </a></li>
                    <li><a href="index.php"><img src="images/es.gif" alt="Spain" title="Spain" > </a></li>
                    <li class="s-bar">
                        <div class="search">
                            <input class="search_box" type="checkbox" id="search_box">
                            <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
                            <div class="search_form">
                                <form action="#" method="post">
                                    <input type="search" name="Search" placeholder=" " required=" " />
                                    <input type="submit" value="Search">
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="w3_navigation2">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header navbar-left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Palanca de navegacion</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
<!--                        <h1><a class="navbar-brand" href="index.php"> HOTEL <span>PARADOR</span><p class="logo_w3l_agile_caption">Tu resort de ensueño</p></a></h1>-->
                        <img src="images/logo.JPG" alt=" "  />
                    </div>
                    <div class="navbar-header navbar-right">
                        <h2><a class="navbar-brand" href="reservation.php" style="color:tomato"> BOOK HERE NOW</a></h2>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <nav class="menu menu--iris">
                            <ul class="nav navbar-nav menu__list">
                                <li class="menu__item menu__item--current"><a href="index.php" class="menu__link">HOME</a></li>
                                <li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li>
                                <li class="menu__item"><a href="#gallery" class="menu__link scroll">Gallery</a></li>
                                <li class="menu__item"><a href="#rooms" class="menu__link scroll">Rooms</a></li>
                                <li class="menu__item"><a href="#contact" class="menu__link scroll">Contact</a></li>
                                <li class="menu__item"><a href="admin/index.php"><i class="fa fa-expeditedssl" style="font-size:20px"></i>Admin</a></li>
                                
                            </ul>
                        </nav>
                    </div>
                </nav>

            </div>
        </div>
        <!-- //header -->
        <!-- banner -->
        <div id="home" class="w3ls-banner">
            <!-- banner-text -->
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides callbacks callbacks1" id="slider4">
                        <li>
                            <div class="w3layouts-banner-top">

                                <div class="container">
                                    <div class="agileits-banner-info">
                                        <h4>ARENAL PARAISO</h4>
                                    </div>	
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3layouts-banner-top w3layouts-banner-top1">
                                <div class="container">
                                    <div class="agileits-banner-info">
                                        <h4>ARENAL PARAISO</h4>
                                      </div>	
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3layouts-banner-top w3layouts-banner-top2">
                                <div class="container">
                                    <div class="agileits-banner-info">
                                        <h4>ARENAL PARAISO</h4>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
                <!--banner Slider starts Here-->
            </div>

        </div>	
        <!-- //banner --> 
        <!--//Header-->
        <!-- //Modal1 -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
            <!-- Modal1 -->
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4>HOTEL
                            <span>ARENAL PARAISO</span></h4>
                        <img src="images/1.jpg" alt=" " class="img-responsive">
                        <h5>We know what you love</h5>
                        <p>Offer our guests unique and delightful views from your room,<br> makes Arenal Paraíso one of the best hotels in La Fortuna. <br>Pruebe nuestro menú de comida, servicios increíbles y un personal amable mientras esté aquí.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Modal1 -->

        <!-- banner-bottom -->
        <div class="banner-bottom">
            <div class="container">	
                <div class="agileits_banner_bottom">
                    <h3><span>Experience a great vacation, enjoy some fantastic offers</span> You will be welcome always
                    </h3>
                </div>
                <div class="w3ls_banner_bottom_grids">
                    <ul class="cbp-ig-grid">
                        <li>
                            <div class="w3_grid_effect">
                                <span class="cbp-ig-icon w3_road"></span>
                                <h4 class="cbp-ig-title">REST PERFECTLY</h4>                                
                                <span class="cbp-ig-category">HIGH QUALITY ROOMS</span>
                            </div>
                        </li>
                        <li>
                            <div class="w3_grid_effect">
                                <span class="cbp-ig-icon w3_cube"></span>
                                <h4 class="cbp-ig-title">THE BEST VIEWS</h4>
                                <span class="cbp-ig-category">ARENAL VOLCANO</span>
                            </div>
                        </li>
                        <li>
                            <div class="w3_grid_effect">
                                <span class="cbp-ig-icon w3_users"></span>
                                <h4 class="cbp-ig-title">RESTAURANT BUFFET  
                                </h4>
                                <span class="cbp-ig-category">24 HOURS</span>
                            </div>
                        </li>
                        <li>
                            <div class="w3_grid_effect">
                                <span class="cbp-ig-icon w3_ticket"></span>
                                <h4 class="cbp-ig-title">WE HAVE WIFI</h4>
                                <span class="cbp-ig-category">EVERYWHERE IN OUR HOTEL
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //banner-bottom -->
        <!-- /about -->
        <div class="about-wthree" id="about">
            <div class="container">
                <div class="ab-w3l-spa">
                    <h3 class="title-w3-agileits title-black-wthree">Enjoy everything our hotel has to offer
                    </h3> 
                    <p class="about-para-w3ls"> 
                    </p>
                    <img src="images/a2.jpg" class="img-responsive" alt="Hair Salon">
                    <div class="w3l-slider-img">
                        <img src="images/7.jpg" class="img-responsive" alt="Hair Salon">
                    </div>
                    <div class="w3ls-info-about">
                        <h4>You will love all the amenities we offer
                            !</h4>
                        <p>We hope you enjoy your vacation with us </p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //about -->
        <!--sevices-->
        <div class="advantages">
            <div class="container">
                <div class="advantages-main">
                    <h3 class="title-w3-agileits title-black-wthree">Our Services
                    </h3>
                    <div class="advantage-bottom">
                        <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
                            <div class="advantage-block ">
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                                <h4 style="color: #ffce14">Stay first, pay later! </h4>
                                <p>You can leave you credit card info and enjoy your stay to cancel everything at the end</p>
                                <p><i class="fa fa-check" aria-hidden="true"></i>Tours for you to enjoy
                                </p>
                                <p><i class="fa fa-check" aria-hidden="true"></i>Souvenirs
                                </p>
                                <p><i class="fa fa-check" aria-hidden="true"></i>Massages / Spa
                                </p>

                            </div>
                        </div>
                        <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
                            <div class="advantage-block">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4 style="color: #ffce14">24 hour Restaurant
                                </h4>
                                <p>For your convenience we offer buffet and a la carte service 24 hours a day.</p>
                                <p><i class="fa fa-check" aria-hidden="true"></i>Room service
                                </p>
                                <p><i class="fa fa-check" aria-hidden="true"></i>High quality food
                                </p>
                                <p><i class="fa fa-check" aria-hidden="true"></i>Vegetarian menu
                                </p>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//sevices-->
        </br>
        </br>
        <!-- Gallery -->
        <section class="portfolio-w3ls" id="gallery">
            <h3 class="title-w3-agileits title-black-wthree">Our gallery
            </h3>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>GREAT VIEWS
                        </h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>CONFORTABLE LOBBY
                        </h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g3.jpg" class="swipebox"><img src="images/g3.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>HOT SPRINGS
                            </h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>RESTAURANT
                        </h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g5.jpg" class="swipebox"><img src="images/g5.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>GARDEN WITH ARTIFICIAL LAKE 
                        </h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g6.jpg" class="swipebox"><img src="images/g6.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>DELICIOUS BREAKFAST
                        </h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g6.jpg" class="swipebox"><img src="images/g7.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>PRIVATE HOT SPRINGS
                        </h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g6.jpg" class="swipebox"><img src="images/g8.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>DIFFERENT TEMPERATURES
                        </h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g9.jpg" class="swipebox"><img src="images/g9.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>BUFFETS
                        </h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g10.jpg" class="swipebox"><img src="images/g10.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>FREE AIR ACTIVITIES
                        </h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g4.jpg" class="swipebox"><img src="images/g11.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>DESSERTS
                        </h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g2.jpg" class="swipebox"><img src="images/g12.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>FAMILY POOL
                        </h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="clearfix"> </div>
        </section>
        <!-- //gallery -->
        <!-- rooms & rates -->
        <div class="plans-section" id="rooms">
            <div class="container">
                <h3 class="title-w3-agileits title-black-wthree">Rooms and fees
                </h3>
                <div class="priceing-table-main">
                    <div class="col-md-3 price-grid">
                        <div class="price-block agile">
                            <div class="price-gd-top">
                                <img src="images/r1.jpg" alt=" " class="img-responsive" />
                                <h4>Standard Room
                                </h4>
                                <br>
                            </div>
                            <br>
                            <div class="price-gd-bottom">
                                <div class="price-list">
                                <br>
                                </div>
                                <div class="price-selet">	
                                    <h3><span>$</span>80</h3>	
                                   
                                    <a href="reservation.php" > Book now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-3 price-grid">
                        <div class="price-block agile">
                            <div class="price-gd-top">
                                <img src="images/r2.jpg" alt=" " class="img-responsive" />
                                <h4>Superior Room
                                </h4>
                                <br><br>
                            </div>
                            <br>
                            <div class="price-gd-bottom">
                                <div class="price-list">
                                <br>
                                </div>
                                <div class="price-selet">	
                                    <h3><span>$</span>120</h3>	
                                   
                                    <a href="reservation.php" > Book now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-3 price-grid">
                        <div class="price-block agile">
                            <div class="price-gd-top">
                                <img src="images/r3.jpg" alt=" " class="img-responsive" />
                                <h4>Guest House
                                </h4>
                                <br><br>
                            </div>
                            <br>
                            <div class="price-gd-bottom">
                                <div class="price-list">
                                <br>
                                </div>
                                <div class="price-selet">	
                                    <h3><span>$</span>190</h3>	
                                   
                                    <a href="reservation.php" > Book now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-3 price-grid">
                        <div class="price-block agile">
                            <div class="price-gd-top">
                                <img src="images/r4.jpg" alt=" " class="img-responsive" />
                                <h4>Honeymoon packages
                                </h4>
                                <br>
                                </div>                            
                            <br><br>
                            <div class="price-gd-bottom">
                                <div class="price-list">
                                <br><br>
                                </div>
                                <div class="price-selet">	
                                    <h4><span style="color: tomato">Ask by phone</span></h4>	
                                 
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--// rooms & rates -->
        
        <!-- contact -->
        <section class="contact-w3ls" id="contact">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
                    <div class="contact-agileits">
                        <h4>Subscribe
                        </h4>
                        <p class="contact-agile2">Subscribe to our newsletters
                        </p>
                        <form  method="post" name="sentMessage" id="contactForm" >
                            <div class="control-group form-group">

                                <label class="contact-p1">Full name
                                    :</label>
                                <input type="text" class="form-control" name="name" id="name" required autocomplete="off">
                                <p class="help-block"></p>

                            </div>	
                            <div class="control-group form-group">

                                <label class="contact-p1">Phone number
                                    :</label>
                                <input type="tel" class="form-control" name="phone" id="phone" required autocomplete="off">
                                <p class="help-block"></p>

                            </div>
                            <div class="control-group form-group">

                                <label class="contact-p1">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" required autocomplete="off">
                                <p class="help-block"></p>

                            </div>


                            <input type="submit" name="sub" value="Send Now" class="btn btn-primary">	
                        </form>
                        <?php
                        if (isset($_POST['sub'])) {
                            $name = $_POST['name'];
                            $phone = $_POST['phone'];
                            $email = $_POST['email'];
                            $approval = "Not Allowed";
                            $sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')";
                            
                            mysqli_query($con, $sql);
                            echo"<script type='text/javascript'> Alert.render('Thanks for your preference, we will be contacting you with our offers')</script>";
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
                    <h4>Contact us
                    </h4>
                    <p class="contact-agile1"><strong>Phone :</strong>+(506) 2479-1100</p>
                    <p class="contact-agile1"><strong>Email :</strong> <a href="mailto:arenalparaiso@gmail.com">arenalparaiso@gmail.com</a></p>
                    <p class="contact-agile1"><strong>Address :</strong> San Carlos,Costa Rica</p>

                    <div class="social-bnr-agileits footer-icons-agileinfo">
                        <ul class="social-icons3">
                            <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                            <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                            <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 

                        </ul>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.983457686066!2d-84.69698378474548!3d10.501968767070144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa008cd2b1ad4e7%3A0x61a4fb84e45e8478!2sArenal+Paraiso+Resort+%26+Spa!5e0!3m2!1ses!2scr!4v1534544834896" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="clearfix"></div>
            </div>
        </section>
        <!-- /contact -->
        <div class="copy">
            <p>© 2018  <a href="index.php">HOTEL ARENAL PARAISO</a> </p>
        </div>
        <!--/footer -->
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <!-- contact form -->
        <script src="js/jqBootstrapValidation.js"></script>

        <!-- /contact form -->	
        <!-- Calendar -->
        <script src="js/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
            });
        </script>
        <!-- //Calendar -->
        <!-- gallery popup -->
        <link rel="stylesheet" href="css/swipebox.css">
        <script src="js/jquery.swipebox.min.js"></script> 
        <script type="text/javascript">
jQuery(function ($) {
$(".swipebox").swipebox();
});
        </script>
        <!-- //gallery popup -->
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
                            jQuery(document).ready(function ($) {
                                $(".scroll").click(function (event) {
                                    event.preventDefault();
                                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                                });
                            });
        </script>
        <!-- start-smoth-scrolling -->
        <!-- flexSlider -->
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
$(window).load(function () {
$('.flexslider').flexslider({
    animation: "slide",
    start: function (slider) {
        $('body').removeClass('loading');
    }
});
});
        </script>
        <!-- //flexSlider -->
        <script src="js/responsiveslides.min.js"></script>
        <script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
        </script>
        <!--search-bar-->
        <script src="js/main.js"></script>	
        <!--//search-bar-->
        <!--tabs-->
        <script src="js/easy-responsive-tabs.js"></script>
        <script>
                            $(document).ready(function () {
                                $('#horizontalTab').easyResponsiveTabs({
                                    type: 'default', //Types: default, vertical, accordion           
                                    width: 'auto', //auto or any width like 600px
                                    fit: true, // 100% fit in a container
                                    closed: 'accordion', // Start closed if in accordion view
                                    activate: function (event) { // Callback function if tab is switched
                                        var $tab = $(this);
                                        var $info = $('#tabInfo');
                                        var $name = $('span', $info);
                                        $name.text($tab.text());
                                        $info.show();
                                    }
                                });
                                $('#verticalTab').easyResponsiveTabs({
                                    type: 'vertical',
                                    width: 'auto',
                                    fit: true
                                });
                            });
        </script>
        <!--//tabs-->
        <!-- smooth scrolling -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */
                $().UItoTop({easingType: 'easeOutQuart'});
            });
        </script>

        <div class="arr-w3ls">
            <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        </div>
        <!-- //smooth scrolling -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>
</html>


