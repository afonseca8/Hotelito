<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:index.php");
}
?> 

<?php
if (!isset($_GET["rid"])) {
    header("location:index.php");
} else {
    $curdate = date("Y/m/d");
    include ('db.php');
    $id = $_GET['rid'];

    $sql = "Select * from roombook where id = '$id'";
    $re = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($re)) {
        $bookId=$row['id'];
        $title = $row['Title'];
        $fname = $row['FName'];
        $lname = $row['LName'];
        $email = $row['Email'];
        $country = $row['Country'];
        $Phone = $row['Phone'];
        $troom = $row['TRoom'];
        $nroom = $row['NRoom'];
        $meal = $row['Meal'];
        $cin = $row['cin'];
        $cout = $row['cout'];
        $sta = $row['stat'];
        $days = $row['nodays'];
    }
}
?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Administrador	</title>
        <!-- Bootstrap Styles-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FontAwesome Styles-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Morris Chart Styles-->
        <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- Custom Styles-->
        <link href="assets/css/custom-styles.css" rel="stylesheet" />
        <!-- Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        
    </head>

    <body>
     <?php
        include('navigationBar.php');
        ?>
            <div id="page-wrapper">
                <div id="page-inner">


                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-header">
                                Reserva de habitación<small>	<?php echo $curdate; ?> </small>
                            </h1>
                        </div>
                        <div class="col-md-6 col-sm-8">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    Confirmación de reserva
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th>DESCRIPCION</th>
                                                <th>INFORMACION</th>
                                            </tr>
                                            <tr>
                                                <th>Nombre Reservación</th>
                                                <th><?php echo $title . $fname . $lname; ?> </th>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <th><?php echo $email; ?> </th>
                                            </tr>
                                            <tr>
                                                <th>Pais </th>
                                                <th><?php echo $country; ?></th>
                                            </tr>
                                            <tr>
                                                <th> Número Telefono</th>
                                                <th><?php echo $Phone; ?></th>
                                            </tr>
                                            <tr>
                                                <th>Tipo de habitación</th>
                                                <th><?php echo $troom; ?></th>
                                            </tr>
                                            <tr>
                                                <th>Cantidad de huéspedes </th>
                                                <th><?php echo $nroom; ?></th>
                                            </tr>
                                            <tr>
                                                <th>Régimen de comidas </th>
                                                <th><?php echo $meal; ?></th>
                                            </tr>
                                            <tr>
                                                <th>Fecha de entrada</th>
                                                <th><?php echo $cin; ?></th>
                                            </tr>
                                            <tr>
                                                <th>Fecha de salida</th>
                                                <th><?php echo $cout; ?></th>
                                            </tr>
                                            <tr>
                                                <th>Número de días</th>
                                                <th><?php echo $days; ?></th>
                                            </tr>
                                            <tr>
                                                <th>Nivel de estado</th>
                                                <th><?php echo $sta; ?></th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <form method="post">
                                        <div class="form-group">
                                            
                                            
                                            <label>Seleccione la Opción</label>
                                            <select name="conf"class="form-control">
                                                <option value selected>	</option>
                                                <option value="Confirmado">Confirmado</option>
                                                <option value="Cancelado">Cancelar Reserva</option>
                                            </select>
                                            </br>
                                            <label>Asignar número de habitación</label>
                                            <input name="roomNumber" class="form-control" autocomplete="off">
                                        </div>
                                        <input type="submit" name="co" value="Aceptar" class="btn btn-success">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
                        $rsql = "select * from room";
                        $rre = mysqli_query($con, $rsql);
                        $r = 0;
                        $sc = 0;
                        $gh = 0;
                        $sr = 0;
                        $dr = 0;
                        while ($rrow = mysqli_fetch_array($rre)) {
                            $r = $r + 1;
                            $s = $rrow['type'];
                            $p = $rrow['place'];
                            if ($s == "Standard Room") {
                                $sc = $sc + 1;
                            }
                            if ($s == "Superior room") {
                                $gh = $gh + 1;
                            }
                            if ($s == "Guest House") {
                                $sr = $sr + 1;
                            }
                        }
                        ?>

                        <?php
                        $csql = "select * from payment";
                        $cre = mysqli_query($con, $csql);
                        $cr = 0;
                        $csc = 0;
                        $cgh = 0;
                        $csr = 0;
                        $cdr = 0;
                        while ($crow = mysqli_fetch_array($cre)) {
                            $cr = $cr + 1;
                            $cs = $crow['troom'];

                            if ($cs == "Standard Room") {
                                $csc = $csc + 1;
                            }
                            if ($cs == "Guest House") {
                                $cgh = $cgh + 1;
                            }
                            if ($cs == "Superior Room") {
                                $csr = $csr + 1;
                            }
                        }
                        ?>
                        <div class="col-md-6 col-sm-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Detalles de habitaciones disponibles
                                </div>
                        <div class="panel-body">
                                        <!-- Advanced Tables -->
                                        <div class="panel panel-default">
                                        <?php
                                        $sql = "select * from room limit 0,40";
                                        $re = mysqli_query($con, $sql)
                                        ?>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                        <thead>
                                                            <tr>
                                                                <th>Número de Habitación</th>
                                                                <th>Descripción</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        while ($row = mysqli_fetch_array($re)) {
                                                            $id2 = $row['id'];
                                                            if ($id2 % 2 == 0) {
                                                                echo "<tr class=odd gradeX>
                                                                        <td>" . $row['id'] . "</td>
                                                                        <td>" . $row['type'] . "</td>
                                                                        <th>" . $row['place'] . "</th>
                                                                      </tr>";
                                                            } else {
                                                                echo"<tr class=even gradeC>
                                                                        <td>" . $row['id'] . "</td>
                                                                        <td>" . $row['type'] . "</td>
                                                                        <th>" . $row['place'] . "</th>
                                                                    </tr>";
                                                            }
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                        <!--End Advanced Tables -->
                                    </div>
                                <div class="panel-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /. ROW  -->
                </div>
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->
        <!-- JS Scripts-->
        <!-- jQuery Js -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- Bootstrap Js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Metis Menu Js -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- Morris Chart Js -->
        <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
        <script src="assets/js/morris/morris.js"></script>
        <!-- Custom Js -->
        <script src="assets/js/custom-scripts.js"></script>
    </body>
</html>

<?php
if (isset($_POST['co'])) {
    $st = $_POST['conf'];
    $roomNumber = $_POST['roomNumber'];
    if ($st == "Confirmado") {
        $urb = "UPDATE `roombook` SET `stat`='$st',`roomNumber`='$roomNumber' WHERE id = '$id'";
        mysqli_query($con, $urb);

        $type_of_room = 0;
        if ($troom == "Standard Room") {
            $type_of_room = 80;
        } else if ($troom == "Superior Room") {
            $type_of_room = 120;
        } else if ($troom == "Guest House") {
            $type_of_room = 190;
        }

        if ($meal == "Room only") {
            $type_of_meal = 0;
        } else if ($meal == "Breakfast") {
            $type_of_meal = $nroom * 3;
        }
        $ttot = $type_of_room * $days;
        $mepr = $type_of_meal * $days;
        $status="NotPaid";
        $fintot = $ttot + $mepr;
        $roombookId=$id;

        $psql = "INSERT INTO `payment`(`title`, `fname`, `lname`, `troom`, `nroom`, `cin`, `cout`, `ttot`,`meal`, `mepr`,`fintot`,`noofdays`,`status`,`roombookId`,`roomId`) VALUES ('$title','$fname','$lname','$troom','$nroom','$cin','$cout','$ttot','$meal','$mepr','$fintot','$days','$status','$roombookId','$roomNumber')";

        mysqli_query($con, $psql);
        $notfree = "NotFree";
        $rpsql = "UPDATE `room` SET `place`='$notfree',`cusid`='$id' where id ='$roomNumber'";
        mysqli_query($con, $rpsql);
        echo "<script type='text/javascript'>Alert.render('Reservación Confirmada');document.location='home.php'</script>";
    } else if ($st == "Cancelado") {
        $del = "DELETE from `roombook` WHERE id = '$bookId'";
        mysqli_query($con, $del);
        echo "<script type='text/javascript'>Alert.render('La reserva ha sido eliminada');document.location='home.php'</script>";
}

    }
?>


