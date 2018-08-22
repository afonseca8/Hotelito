<?php

include ('db.php');

$id = $_GET['eid'];
if ($id == "") {
    echo '<script>alert("Sorry ! Wrong Entry") </script>';
    header("Location: messages.php");
} else {
    $view = "DELETE FROM `contact` WHERE id ='$id' ";

    if ($re = mysqli_query($con, $view)) {
        echo '<script>alert("Contacto eliminado correctamente") </script>';
        header("Location: messages.php");
    }
}
?>