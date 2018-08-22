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
                            Gestionar pagos<small> </small>
                        </h1>
                    </div>

                <!-- /. ROW  -->
                
                <div class="panel-body">
                                    <form name="form" method="post">
                                        <div class="form-group">
                                            <label>Seleccione el # de la reservación a cancelar</label>
                                            <select name="id" class="form-control" required>
                                                <option value selected ></option>
                                            <?php
                                            while ($rrow = mysqli_fetch_array($cre)) {
                                                $value = $rrow['id'];
                                                echo '<option value="' . $value . '">' . $value . '</option>';
                                            }
                                            ?>
                                            </select>
                                        </div>
                                        <input type="submit" name="checkOut" value="Hacer check out" class="btn btn-danger"> 
                                    </form>
                                </br>
                                
                                <?php
                                
                                include('db.php');
 
                                if (isset($_POST['checkOut'])) {
                                    $did = $_POST['id'];
                                    $status = "Paid"; 
                                    
                                    $idsql = "select `roomId` from payment where `id`=$did";
                                    $userid = mysqli_query($con, $idsql);
                                    $userid = mysqli_fetch_row($userid);
                                    $userid = $userid[0];
                                    
                                    $idsql2 = "select `roombookId` from payment where `id`=$did";
                                    $userid2 = mysqli_query($con, $idsql2);
                                    $userid2 = mysqli_fetch_row($userid2);
                                    $userid2 = $userid2[0];

                                    $sql2 = "UPDATE `payment` SET `status`='$status' WHERE id = '$did'";
                                    if (mysqli_query($con, $sql2)) {
                                        
                                        $sql4 = "UPDATE `room` SET `place`='Free',`cusid`=NULL WHERE id = '$userid'";
                                        mysqli_query($con, $sql4);
                                        
                                        $sql5 = "DELETE from `roombook` WHERE id = '$userid2'";
                                        mysqli_query($con, $sql5);
                                        echo"<script type='text/javascript'> Alert.render('Se ha realizado el check out del cliente correctamente.')</script>";

                                    } else {
                                        echo 'Error, favor revise nuevamente';
                                    }
                                }
                                ?>
                                </div>
                            </div>
                
                
                

                    <div class="panel panel-primary">
                                <div class="panel-heading">
                                    RESERVACIONES PENDIENTES DE PAGO
                                </div>
                        
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th style='text-align: center'>Id Pago</th>
                                                    <th style='text-align: center'>Nombre</th>
                                                    <th style='text-align: center'>Tipo de habitación</th>
                                                    <th style='text-align: center'>Check In</th>
                                                    <th style='text-align: center'>Check Out</th>
                                                    <th style='text-align: center'>Cantidad de huéspedes</th>
                                                    <th style='text-align: center'>Tipo de comida</th>
                                                    <th style='text-align: center'>Monto habitación</th>
                                                    <th style='text-align: center'>Monto Comidas </th>
                                                    <th style='text-align: center'>Total a Pagar</th>                                            
                                                    <th style='text-align: center'># Reserva</th>
                                                    <th style='text-align: center'># Cuarto</th>
                                                    <th style='text-align: center'>Factura</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                include ('db.php');
                                                $sql = "SELECT * FROM `payment` WHERE status='NotPaid'";
                                                $re = mysqli_query($con, $sql);
                                                while ($row = mysqli_fetch_array($re)) {

                                                    $id = $row['id'];

                                                    if ($id % 2 == 1) {
                                                        echo"<tr class='gradeC'>
                                                        <td style='text-align: center'>" . $row['id'] . "</td>                                                        
                                                        <td style='text-align: center'>" . $row['title'] . " " . $row['fname'] . " " . $row['lname'] . "</td>
                                                        <td style='text-align: center'>" . $row['troom'] . "</td>
                                                        <td style='text-align: center'>" . $row['cin'] . "</td>
                                                        <td style='text-align: center'>" . $row['cout'] . "</td>
                                                        <td style='text-align: center'>" . $row['nroom'] . "</td>
                                                        <td style='text-align: center'>" . $row['meal'] . "</td>
                                                        <td style='text-align: center'>" . $row['ttot'] . "</td>
                                                        <td style='text-align: center'>" . $row['mepr'] . "</td>
                                                        <td style='text-align: center'>" . $row['fintot'] . "</td>
                                                        <td style='text-align: center'>" . $row['roombookId'] . "</td>
                                                        <td style='text-align: center'>" . $row['roomId'] . "</td>
                                                        <td style='text-align: center'><a href=print.php?pid=" . $id . " <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
                                                        </tr>";
                                                    } else {
                                                        echo"<tr class='gradeU'>
                                                        <td style='text-align: center'>" . $row['id'] . "</td>
                                                        <td style='text-align: center'>" . $row['title'] . " " . $row['fname'] . " " . $row['lname'] . "</td>
                                                        <td style='text-align: center'>" . $row['troom'] . "</td>
                                                        <td style='text-align: center'>" . $row['cin'] . "</td>
                                                        <td style='text-align: center'>" . $row['cout'] . "</td>
                                                        <td style='text-align: center'>" . $row['nroom'] . "</td>
                                                        <td style='text-align: center'>" . $row['meal'] . "</td>
                                                        <td style='text-align: center'>" . $row['ttot'] . "</td>
                                                        <td style='text-align: center'>" . $row['mepr'] . "</td>
                                                        <td style='text-align: center'>" . $row['fintot'] . "</td>
                                                        <td style='text-align: center'>" . $row['roombookId'] . "</td>
                                                        <td style='text-align: center'>" . $row['roomId'] . "</td>
                                                        <td style='text-align: center'><a href=print.php?pid=" . $id . " <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
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
                    <!-- /. ROW  -->
                     <div class="panel panel-primary">
                                <div class="panel-heading">
                                    RESERVACIONES PAGADAS
                                </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th style='text-align: center'>Id de Reservación</th>
                                                    <th style='text-align: center'>Nombre</th>
                                                    <th style='text-align: center'>Tipo de habitación</th>
                                                    <th style='text-align: center'>Check In</th>
                                                    <th style='text-align: center'>Check Out</th>
                                                    <th style='text-align: center'>Cantidad de huéspedes</th>
                                                    <th style='text-align: center'>Tipo de comida</th>
                                                    <th style='text-align: center'>Monto habitación</th>
                                                    <th style='text-align: center'>Monto Comidas </th>
                                                    <th style='text-align: center'>Total a Pagar</th>
                                                    <th style='text-align: center'>Factura</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                include ('db.php');
                                                $sql = "SELECT * FROM `payment` WHERE status='Paid'";
                                                $re = mysqli_query($con, $sql);
                                                while ($row = mysqli_fetch_array($re)) {

                                                    $id = $row['id'];

                                                    if ($id % 2 == 1) {
                                                        echo"<tr class='gradeC'>
                                                        <td style='text-align: center'>" . $row['id'] . "</td>                                                        
                                                        <td style='text-align: center'>" . $row['title'] . " " . $row['fname'] . " " . $row['lname'] . "</td>
                                                        <td style='text-align: center'>" . $row['troom'] . "</td>
                                                        <td style='text-align: center'>" . $row['cin'] . "</td>
                                                        <td style='text-align: center'>" . $row['cout'] . "</td>
                                                        <td style='text-align: center'>" . $row['nroom'] . "</td>
                                                        <td style='text-align: center'>" . $row['meal'] . "</td>
                                                        <td style='text-align: center'>" . $row['ttot'] . "</td>
                                                        <td style='text-align: center'>" . $row['mepr'] . "</td>
                                                        <td style='text-align: center'>" . $row['fintot'] . "</td>
                                                        <td style='text-align: center'><a href=print.php?pid=" . $id . " <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
                                                        </tr>";
                                                    } else {
                                                        echo"<tr class='gradeU'>
                                                        <td style='text-align: center'>" . $row['id'] . "</td>
                                                        <td style='text-align: center'>" . $row['title'] . " " . $row['fname'] . " " . $row['lname'] . "</td>
                                                        <td style='text-align: center'>" . $row['troom'] . "</td>
                                                        <td style='text-align: center'>" . $row['cin'] . "</td>
                                                        <td style='text-align: center'>" . $row['cout'] . "</td>
                                                        <td style='text-align: center'>" . $row['nroom'] . "</td>
                                                        <td style='text-align: center'>" . $row['meal'] . "</td>
                                                        <td style='text-align: center'>" . $row['ttot'] . "</td>
                                                        <td style='text-align: center'>" . $row['mepr'] . "</td>
                                                        <td style='text-align: center'>" . $row['fintot'] . "</td>
                                                        <td style='text-align: center'><a href=print.php?pid=" . $id . " <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
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
                    <!-- /. ROW  -->
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
    </body>
</html>




