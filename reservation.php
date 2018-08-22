<?php
include('db.php');
?>
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
        <script src="js/jquery-ui.js" type="text/javascript"></script>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>
        <!--fonts-->
        <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">  
        <script>
  $( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 2,
          minDate: 0
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 2
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script>
  
  <script>
function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "Standard Room"){
		var optionArray = ["|","1|1","2|2"];
	} else if(s1.value == "Superior Room"){
		var optionArray = ["|","2|2","3|3","4|4"];
	} else if(s1.value == "Guest House"){
		var optionArray = ["|","4|4","5|5","6|6","7|7"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
</script>

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
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <nav class="menu menu--iris"></br>
                            <ul class="nav navbar-nav menu__list">
                                <li class="menu__item menu__item--current"><a href="indexEN.php" class="menu__link">BACK TO HOMEPAGE</a></li>
                            </ul>
                        </nav>
                    </div>
                </nav>

            </div>
        </div>
        <!-- //header -->
        
                        <!-- /rooms -->
		<div >
			<div class="container">
				<div class="row">
					<div class="col-md-4 room-wrap" >                                            
						<a class="room image-popup-link"><img src="images/room-1.JPG" alt=" "  /></a>
						<div class="desc text-center">
                                                    </br>
                                                    <h3 class="text-center" style="color: #008000">Standard Room</h3>
							<p class="price-selet" >	
                                                        <h3 class="text-center"><span>$</span>80</h3></p></br>
							<ul>
								<li>We have 36 standard rooms</li>
								<li>2 double beds, private bath, hot water </li>
								<li>A/C, cable TV, WiFi, coffee maker and mini refrigerator</li>
							</ul>
							</div>
					</div>
                                    <div class="col-md-4 room-wrap ">                                            
						<a class="room image-popup-link"><img src="images/room-2.JPG" alt=" "  /></a>
						<div class="desc text-center">
                                                    </br>
                                                    <h3 class="text-center" style="color: #008000">Superior Room</h3>
							<p class="price-selet" >	
                                                        <h3 class="text-center"><span>$</span>120</h3></p></br>
							<ul>
                                                                <li>Individual wood cabins</li>
                                                                <li>Private bath and hot water</li>
								<li>A/C, cable TV, WiFi, coffee maker and mini refrigerator</li>
								<li>Large terrace with rocking chairs</li>
							</ul>
							</div>
					</div>
                                    <div class="col-md-4 room-wrap ">                                            
						<a class="room image-popup-link"><img src="images/room-3.JPG" alt=" "  /></a>
						<div class="desc text-center">
                                                    </br>
                                                    <h3 class="text-center" style="color: #008000">Guest House</h3>
							<p class="price-selet" >	
                                                        <h3 class="text-center"><span>$</span>190</h3></p></br>
							<ul>
								<li>Villa with 2 bedrooms</li>
								<li>Master bedroom: 1 king bed and 1 sofabed single, Jacuzzi.</li>
								<li>Second bedroom: 1 double bed and 1 single bed</li>
                                                                <li>Refrigerator, telephone, A/C, cable TV, microwave, living room</li>
                                                                <li>Balcony with privileged view Arenal Volcano.</li>
							</ul>
							</div>
					</div>     
				</div>
			</div>
		</div>
        <!-- //rooms -->
        </br>
        <!-- /about -->
        <div class="about-wthree" id="about">
            <div class="container">
                <div class="ab-w3l-spa">
                    <h1 class="title-w3-agileits title-black-wthree">RESERVATION FORM</h1> 
                </div>
                </br>
                <div class="clearfix"> </div>
                <div class="row">
                        <div class="col-md-5 col-sm-5">
                            <div class="panel panel-primary" >
                                <div class="panel-heading">
                                    PERSONAL INFO
                                </div>
                                <div class="panel-body">
                                    <form name="form" method="post">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <select name="title" class="form-control" required >
                                                <option value selected ></option>
                                                <option value="Sr.">Mr.</option>
                                                <option value="Sra.">Mrs.</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input name="fname" type ="text" class="form-control" required autocomplete="off" maxlength="50"> 

                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lname" type ="text" class="form-control" required autocomplete="off" maxlength="50">

                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required autocomplete="off" maxlength="50">

                                        </div>
                                        <?php
                                        
                                        $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                                        ?>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select name="country" class="form-control" required>
                                                <option value selected ></option>
                                                    <?php
                                                    foreach ($countries as $key => $value):
                                                        echo '<option value="' . $value . '">' . $value . '</option>'; //close your tags!!
                                                    endforeach;
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input name="phone" type ="number" class="form-control" required autocomplete="off" maxlength="11">
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        BOOKING INFORMATION
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>Room type</label>
                                            
                                            <select id="slct1" name="troom" class="form-control" required onchange="populate(this.id,'slct2')">
                                                <option value selected></option>
                                                <option value="Standard Room">STANDARD ROOM (2 people)</option>
                                                <option value="Superior Room">SUPERIOR ROOM (2-4 people)</option>
                                                <option value="Guest House">GUEST HOUSE (4-7 people)</option>
                                            </select>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>How many people in room?</label>
                                            
                                            <select id="slct2" name="nroom" class="form-control" required></select>
                                        </div>

                                        <div class="form-group">
                                            <label>Food service</label>
                                            <select name="meal" class="form-control"required>
                                                <option value selected ></option>
                                                <option value="Room only">Only Room
                                                </option>
                                                <option value="Breakfast">Breakfast included (add $3 per person)</option>
                                            </select>
                                        </div>
                                                                              
                                        <div class="row">
                                            <div class='col-sm-6'>
                                                <label for="from">Check In</label>
                                                <div class="form-group">
                                                    <input type="text" name="from" id="from" autocomplete="off">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class='col-sm-6'>
                                                <label for="to">Check Out</label>
                                                <div class="form-group">
                                                    <input type="text" name="to" id="to" autocomplete="off">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                     <div class="well">
                                    <h4>HUMAN VERIFICATION</h4>
                                    <p>Please write below the code shown here:
                                    <?php $Random_code = rand();
                                    echo$Random_code; ?> </p><br />
                                    <input  type="text" name="code1" title="random code" autocomplete="off" /> <input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
                                    
                                    </br>
                                    </br>

                                    <input type="submit" name="submit" value="CONFIRM BOOKING RESERVATION" class="btn btn-primary">

                                        <?php
                                        
                                        if (isset($_POST['submit'])) {
                                            $code1 = $_POST['code1'];
                                            $code = $_POST['code'];
                                            $time = strtotime( $_POST['from'] );
                                            $myDate = date( 'y-m-d', $time );
                                            $time2 = strtotime( $_POST['to'] );
                                            $myDate2 = date( 'y-m-d', $time2 );
                                            $approval = "Not Allowed";
                                            $days=2;
                                            if ($code1 != "$code") {
//                                                $msg = "Invalid code, please try again";
                                                echo "<script type='text/javascript'> Alert.render('Invalid code, please try again')</script>";
                                            } else {

                                                $con = mysqli_connect("localhost", "root", "", "hotel");
                                                $check = "SELECT * FROM roombook WHERE email = '$_POST[email]'";
                                                $rs = mysqli_query($con, $check);
                                                $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                                if ($data[0] > 1) {
                                                    echo "<script type='text/javascript'> Alert.render('There is a reservation waiting to be confirmed with this email, please try again with different email address to make a new reservation')</script>";
                                                } else {
                                                    $new = "No Confirmado";
                                                    $newUser = "INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `Country`,
                                                             `Phone`, `TRoom`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`)
                                                             VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[country]',
                                                            '$_POST[phone]','$_POST[troom]','$_POST[nroom]','$_POST[meal]','$_POST[from]' ,'$_POST[to]',
                                                            '$new',datediff('$myDate2','$myDate'))";
                                                    
                                                    if (mysqli_query($con, $newUser)) {
                                                        echo "<script type='text/javascript'> Alert.render('Thanks for choosing us. Your booking has been sent to our staff and will be confirmed as soon as possible')</script>";
                                                        $newContact = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`)VALUES ('$_POST[fname]','$_POST[phone]','$_POST[email]',now(),'$approval')";
                                                        mysqli_query($con, $newContact);
                                                    } else {
                                                        echo "<script type='text/javascript'> Alert.render('Error')</script>";
                                                    }
                                                    
                                                }
                                                $msg = "Right code";                                            }
                                        }
                                        ?>
                                        </form>
                                </div>
                            </div>

                           
                            </div>
                        </div>
                    </div>
            </div>   
        <!-- //about -->       
        
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
        <script src="../js/main.js"></script>	
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


