<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:index.php");
}
?> 

<?php
include('db.php');
$usql = "SELECT * FROM `payment` WHERE status='NotPaid'";
$cre = mysqli_query($con, $usql);
?>




<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Administrator</title>
        <!-- Bootstrap Styles-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FontAwesome Styles-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Morris Chart Styles-->

        <!-- Custom Styles-->
        <link href="assets/css/custom-styles.css" rel="stylesheet" />
        <!-- Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <!-- TABLE STYLES-->
        <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

        
        <script src="../js/jquery-ui.js" type="text/javascript"></script>
        <script src="../js/jquery-2.1.4.min.js" type="text/javascript"></script>
          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <link rel="stylesheet" href="/resources/demos/style.css">
  
        <script type="text/javascript" src="../js/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>
        
        <script>
            $(function () {
                var dateFormat = "mm/dd/yy",
                        from = $("#from")
                        .datepicker({
                            defaultDate: "+1w",
                            changeMonth: true,
                            numberOfMonths: 2,
                            minDate: 0
                        })
                        .on("change", function () {
                            to.datepicker("option", "minDate", getDate(this));
                        }),
                        to = $("#to").datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 2
                })
                        .on("change", function () {
                            from.datepicker("option", "maxDate", getDate(this));
                        });

                function getDate(element) {
                    var date;
                    try {
                        date = $.datepicker.parseDate(dateFormat, element.value);
                    } catch (error) {
                        date = null;
                    }

                    return date;
                }
            });
        </script>

        <script>
            function populate(s1, s2) {
                var s1 = document.getElementById(s1);
                var s2 = document.getElementById(s2);
                s2.innerHTML = "";
                if (s1.value == "Standard Room") {
                    var optionArray = ["|", "1|1", "2|2"];
                } else if (s1.value == "Superior Room") {
                    var optionArray = ["|", "2|2", "3|3", "4|4"];
                } else if (s1.value == "Guest House") {
                    var optionArray = ["|", "4|4", "5|5", "6|6", "7|7"];
                }
                for (var option in optionArray) {
                    var pair = optionArray[option].split("|");
                    var newOption = document.createElement("option");
                    newOption.value = pair[0];
                    newOption.innerHTML = pair[1];
                    s2.options.add(newOption);
                }
            }
        </script>

        <?php
// define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameErr = "Only letters and white space allowed";
                }
            }

            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>      
    </head>
    
    <body>
        <?php
        include('navigationBar.php');
        ?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Hacer nueva reservación<small> </small>
                        </h1>
                    </div>

                    <!-- /. ROW  -->

                    <div class="about-wthree" id="about">
                        <div class="container">
                            </br>
                            <div class="clearfix"> </div>
                            <div class="row">
                                <div class="col-md-5 col-sm-5">
                                    <div class="panel panel-primary" >
                                        <div class="panel-heading">
                                            INFORMACIÓN PERSONAL
                                        </div>
                                        <div class="panel-body">
                                            <form name="form" method="post">
                                                <div class="form-group">
                                                    <label>Titulo*</label>
                                                    <select name="title" class="form-control" required >
                                                        <option value selected ></option>
                                                        <option value="Sr.">Sr.</option>
                                                        <option value="Sra.">Sra.</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input name="fname" class="form-control" required autocomplete="off">

                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido</label>
                                                    <input name="lname" class="form-control" required autocomplete="off">

                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input name="email" type="email" class="form-control" required autocomplete="off">
                                                        <span class="error">* <?php echo $emailErr; ?></span>

                                                </div>
                                                <?php
                                                $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                                                ?>
                                                <div class="form-group">
                                                    <label>Nacionalidad</label>
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
                                                    <label>Teléfono contacto</label>
                                                    <input name="phone" type ="text" class="form-control" required autocomplete="off">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                INFORMACIÓN DE RESERVA
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label>Tipo de habitación</label>

                                                    <select id="slct1" name="troom" class="form-control" required onchange="populate(this.id, 'slct2')">
                                                        <option value selected></option>
                                                        <option value="Standard Room">CUARTO ESTANDAR (2 personas)</option>
                                                        <option value="Superior Room">CUARTO SUPERIOR (2-4 personas)</option>
                                                        <option value="Guest House">CASA DE HUESPEDES (4-7 personas)</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Número de personas en la habitación</label>

                                                    <select id="slct2" name="nroom" class="form-control" required></select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Régimen de comidas</label>
                                                    <select name="meal" class="form-control"required>
                                                        <option value selected ></option>
                                                        <option value="Room only">Sólo habitación
                                                        </option>
                                                        <option value="Breakfast">Desayuno</option>
                                                    </select>
                                                </div>

                                                <div class="row">
                                                    <div class='col-sm-6'>
                                                        <label for="from">Fecha de Entrada</label>
                                                        <div class="form-group">
                                                            <input type="text" name="from" id="from" autocomplete="off">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class='col-sm-6'>
                                                        <label for="to">Fecha de Salida</label>
                                                        <div class="form-group">
                                                            <input type="text" name="to" id="to" autocomplete="off">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="well">
                                            
                                            <input type="submit" name="submit" value="CONFIRMAR SOLICITUD DE RESERVA" class="btn btn-primary">

                                                <?php
                                                if (isset($_POST['submit'])) {
                                                    $time = strtotime($_POST['from']);
                                                    $myDate = date('y-m-d', $time);
                                                    $time2 = strtotime($_POST['to']);
                                                    $myDate2 = date('y-m-d', $time2);
                                                    $approval = "Not Allowed";
                                                    $days = 2;

                                                    $con = mysqli_connect("localhost", "root", "", "hotel");
                                                    $check = "SELECT * FROM roombook WHERE email = '$_POST[email]'";
                                                    $rs = mysqli_query($con, $check);
                                                    $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                                    if ($data[0] > 1) {
                                                        echo "<script type='text/javascript'> Alert.render('Ya existe una reserva esperando ser confirmada con este correo, favor intente con otro correo para gestionar una nueva reserva')</script>";
                                                    } else {
                                                        $new = "No Confirmado";
                                                        $newUser = "INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `Country`,
                                                             `Phone`, `TRoom`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`)
                                                             VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[country]',
                                                            '$_POST[phone]','$_POST[troom]','$_POST[nroom]','$_POST[meal]','$_POST[from]' ,'$_POST[to]',
                                                            '$new',datediff('$myDate2','$myDate'))";

                                                        if (mysqli_query($con, $newUser)) {
                                                            echo "<script type='text/javascript'> Alert.render('Su reserva ha sido enviada y será confirmada lo antes posible.')</script>";
                                                            $newContact = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`)VALUES ('$_POST[fname]','$_POST[phone]','$_POST[email]',now(),'$approval')";
                                                            mysqli_query($con, $newContact);
                                                        } else {
                                                            echo "<script type='text/javascript'> Alert.render('Error al agregar usuario en la base de datos')</script>";
                                                        }
                                                    }
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


                </div>  
            </div>
        </div>

        <!-- /. PAGE WRAPPER  -->
        <!-- /. WRAPPER  -->
        <!-- JS Scripts-->
        <!-- jQuery Js -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- Bootstrap Js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Metis Menu Js -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- DATA TABLE SCRIPTS -->
        <script src="assets/js/dataTables/jquery.dataTables.js"></script>
        <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
        </script>
        <!-- Custom Js -->
        <script src="assets/js/custom-scripts.js"></script>
        <script src="../js/bootstrap-3.1.1.min.js" type="text/javascript"></script>

    </body>
</html>




