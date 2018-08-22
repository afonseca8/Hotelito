<?php

include ('db.php');


$id = $_GET['eid'];
$newsql = "DELETE FROM `login` WHERE id ='$id' ";
if (mysqli_query($con, $newsql)) {
    echo' <script language="javascript" type="text/javascript">  Alert.render("User name and password Added") </script>';
}
header("Location: usersetting.php");
?>


