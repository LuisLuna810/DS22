<?php 
require_once ("asociados.php");
session_start(); 
$varsesion = $_SESSION['id'];
if($varsesion == null || $varsesion = ''){
    echo "ACCESO DENEGADO";
    die();
}
if (isset($_SESSION['id'])){
    $datos = new Asociados;
    $datos->id_Asociado = $_SESSION['id'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Register / Login</title>
</head>

<body>

    <!-- Contenedor -->
    <div id="contenedor-main">
        <!-- Menu navegación-->
        <div id="main-menu">
            <a href="index.php">
                <p>Home</p>
            </a>
            <hr>
            <a href="datosAutogestion.php">
                <p>Datos personales</p>
            </a>
            <hr>
            <a href="cuotasAutogestion.php">
                <p>Cuotas</p>
            </a>
            <hr>
            <a href="donarAutogestion.php">
                <p>Donar</p>
            </a>
            <hr>
            <a href="solicitarAutogestion.php">
                <p>Solicitar</p>
            </a>
            <hr>
            <a href="cerrar-session.php">
                <p>Cerrar Sesion</p>
            </a>
        </div>

        <div id="contenedor-form">
                <div>
            <h4>Nombre</h4>

            <?php
                $datos->datos("nombre");
            ?>
            <h4>Apellido</h4>
            <?php
                $datos->datos("apellido");
            ?>
            <h4>Es donante</h4>
            <?php
                $datos->datos("esDonante");
            ?>
            <h4>Fecha nacimiento</h4>
            <?php
                $datos->datos("fecha_Nacimiento");
            ?>
                </div>
            </div>

        </div>
    </div>
    </div>
</body>

</html>