<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:index.php");
}
?> 

<?php
include('db.php');
$rsql = "select id from room";
$rre = mysqli_query($con, $rsql);
?>

<?php
include('db.php');
$usql = "select id from room WHERE place='NotFree'";
$ure = mysqli_query($con, $usql);
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
        <!-- Custom Styles-->
        <link href="assets/css/custom-styles.css" rel="stylesheet" />
        <!-- Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </head>
    <body>
                <?php
        include('navigationBar.php');
        ?>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-header">
                                MANTENIMIENTO DE HABITACIONES <small></small>
                            </h1>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-5 col-sm-5">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    AGREGAR NUEVA HABITACION
                                </div>
                                <div class="panel-body">
                                    <form name="form" method="post">
                                        <div class="form-group">
                                            <label> Tipo de habitación
                                                *</label>
                                            <select name="troom"  class="form-control" required>
                                                <option value selected ></option>
                                                <option value="Standard Room">HABITACIÓN ESTANDAR</option>
                                                <option value="Superior Room">HABITACIÓN SUPERIOR</option>
                                                <option value="Guest House">CASA DE HUESPEDES</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Número de Habitación</label>
                                            <input name="id" class="form-control" required autocomplete="off">

                                        </div>
                                        <input type="submit" name="add" value="Agregar" class="btn btn-success"> 
                                    </form>
                                    </br>
                                    <?php
                                    include('db.php');
                                    if (isset($_POST['add'])) {
                                        $id = $_POST['id'];
                                        $room = $_POST['troom'];
                                        $place = 'Free';

                                        $check = "SELECT * FROM room WHERE type = '$room'";
                                        $rs = mysqli_query($con, $check);
                                        $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                        $sql = "INSERT INTO `room`(`id`,`type`,`place`) VALUES ('$id','$room','$place')";
                                            if (mysqli_query($con, $sql)) {
//                                                echo "<script type='text/javascript'> Alert.render('Se ha agregado el cuarto exitosamente')</script>"; 
                                                echo "<script type='text/javascript'>Alert.render('Se ha agregado el cuarto exitosamente');document.location='room.php'</script>";
                                            } else {
                                                echo "<script type='text/javascript'> Alert.render('Error, el número de habitación ya se encuentra ocupado')</script>"; 
                                            }
                                        }                                    
                                    ?>
                                </div>
                            </div>
                          <div class="panel panel-primary">
                                <div class="panel-heading">
                                    ELIMINAR HABITACION
                                </div>
                                <div class="panel-body">
                                    <form name="form" method="post">
                                        <div class="form-group">
                                            <label>Seleccione la ID de la habitación</label>
                                            <select name="id" class="form-control" required>
                                                <option value selected ></option>
                                            <?php
                                            while ($rrow = mysqli_fetch_array($rre)) {
                                                $value = $rrow['id'];
                                                echo '<option value="' . $value . '">' . $value . '</option>';
                                            }
                                            ?>
                                            </select>
                                        </div>
                                        <input type="submit" name="del" value="Borrar" class="btn btn-danger"> 
                                    </form>
                                </br>
                                    <?php
                                    include('db.php');

                                    if (isset($_POST['del'])) {
                                        $did = $_POST['id'];
                                        $sql2 = "DELETE FROM `room` WHERE id = '$did'";
                                        if (mysqli_query($con, $sql2)) {
                                            echo "<script type='text/javascript'>Alert.render('Se ha borrado la habitación exitosamente');document.location='room.php'</script>";
                                        } else {
                                            echo 'Error, favor revise nuevamente';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    LIBERAR HABITACION
                                </div>
                                <div class="panel-body">
                                    <form name="form" method="post">
                                        <div class="form-group">
                                            <label>Seleccione la ID de la habitación</label>
                                            <select name="id" class="form-control" required>
                                                <option value selected ></option>
                                            <?php
                                            while ($urow = mysqli_fetch_array($ure)) {
                                                $value = $urow['id'];
                                                echo '<option value="' . $value . '">' . $value . '</option>';
                                            }
                                            ?>
                                            </select>
                                        </div>
                                        <input type="submit" name="update" value="Actualizar" class="btn btn-primary"> 
                                    </form>
                                </br>
                                    <?php
                                    include('db.php');

                                    if (isset($_POST['update'])) {
                                        $uid = $_POST['id'];
                                        $sql3 = "UPDATE `room` SET `place`='Free',`cusid`=NULL WHERE id = '$uid'";
                                        if (mysqli_query($con, $sql3)) {
                                            echo "<script type='text/javascript'>  Alert.render('Se ha liberado la habitación exitosamente')</script>";
                                        } else {
                                            echo $uid;
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                                                     
                            </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        INFORMACIÓN DE HABITACIONES
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
                                                                <th style="text-align: center">Número de Habitación</th>
                                                                <th style="text-align: center">Descripción</th>
                                                                <th style="text-align: center">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="text-align: center">
                                                        <?php
                                                        while ($row = mysqli_fetch_array($re)) {
                                                            $id = $row['id'];
                                                            if ($id % 2 == 0) {
                                                                echo "<tr class=odd gradeX>
                                                                        <td >" . $row['id'] . "</td>
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
                                </div>
                            </div>
                        </div>
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
            <!-- Custom Js -->
            <script src="assets/js/custom-scripts.js"></script>
    </body>
</html>
