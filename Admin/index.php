<?php
session_start();
if (isset($_SESSION["user"])) {
    header("location:home.php");
}
?>

<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>ADMINISTRACION</title> 
        <link rel="stylesheet" href="css/style.css">

        
    </head>

    <body>
                
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
	background: #b30000;
	border-radius:7px; 
	width:450px;
	z-index: 10;
}
#dialogbox > div{ background:#FFF; margin:8px; }
#dialogbox > div > #dialogboxhead{ background: #FFF; font-size:19px; padding:10px; color:#b30000; font-family: verdana; }
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
        document.getElementById('dialogboxhead').innerHTML = "PORTAL ADMINISTRATIVO";
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
        <div id="dialogoverlay"></div>
        <div id="dialogbox">
          <div>
            <div id="dialogboxhead"></div>
            <div id="dialogboxbody"></div>
            <div id="dialogboxfoot"></div>
          </div>
        </div>
        <div id="clouds">
            <div class="cloud x1"></div>
            <!-- Time for multiple clouds to dance around -->
            <div class="cloud x2"></div>
            <div class="cloud x3"></div>
            <div class="cloud x4"></div>
            <div class="cloud x5"></div>
        </div>

        <div class="container">
            <div id="login">
                <form method="post">
                    <fieldset class="clearfix">
                        <p><span class="fontawesome-user"></span><input type="text"  name="user" value="Username" onBlur="if (this.value == '')
                        this.value = 'Username'" onFocus="if (this.value == 'Username')
                                    this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                        <p><span class="fontawesome-lock"></span><input type="password" name="pass"  value="Password" onBlur="if (this.value == '')
                        this.value = 'Password'" onFocus="if (this.value == 'Password')
                                    this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
                        <p><input type="submit" name="sub"  value="Login"></p>
                    </fieldset>
                </form>
            </div> <!-- end login -->
        
    
    </p>
 
    
        <div class="bottom">  <h3><a href="../index.php">VOLVER A INICIO</a></h3></div>
        </div>
    </body>
</html>

<?php
include('db.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $myusername = mysqli_real_escape_string($con, $_POST['user']);
    $mypassword = mysqli_real_escape_string($con, $_POST['pass']);

    $sql = "SELECT id FROM login WHERE usname = '$myusername' and pass = '$mypassword'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {

        $_SESSION['user'] = $myusername;

        header("location: home.php");
    } else {
        echo '<script>Alert.render("Acceso restringido: Usuario o Contraseña inválido, favor intente de nuevo") </script>';
    }
}
?>



