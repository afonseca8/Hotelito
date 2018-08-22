<?php

include ('db.php');
$eid = $_GET['eid'];
$approval = "Allowed";
$napproval = "Not Allowed";

$view = "select * from contact where id = '$eid' ";
$re = mysqli_query($con, $view);
while ($row = mysqli_fetch_array($re)) {
    $id = $row['approval'];
}

if ($id == "Not Allowed") {
    $sql = "UPDATE `contact` SET `approval`= '$approval' WHERE id = '$eid' ";
    if (mysqli_query($con, $sql)) {
        header("Location: messages.php");
        echo '<script>Alert.render("El cambio se ha realizado correctamente") </script>';
    }
} else {
    $sql = "UPDATE `contact` SET `approval`= '$napproval' WHERE id = '$eid' ";
    if (mysqli_query($con, $sql)) {
        header("Location: messages.php");
        echo '<script>Alert.render("El cambio se ha realizado correctamente") </script>';
        
    }
}
?>