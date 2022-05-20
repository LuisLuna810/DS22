<?php 
require_once ("asociados.php");
require_once ("classDonaciones.php");
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
    <title>Datos personales</title>
</head>

<body>

    <!-- Contenedor -->
    <div id="contenedor-main">
        <!-- Menu navegación-->
        <div id="main-menu">
            <a href="datos-personales.php">
                <p>Datos personales</p>
            </a>
            <hr>
            <a href="cuotasAutogestion.php">
                <p>Cuotas</p>
            </a>
            <hr>
            <a href="donar.php">
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
            <h2>Nombre</h2>
            <?php
                $nombre = $datos->datos("nombre");
                echo $nombre;
            ?>
            <h2>Apellido</h2>
            <?php
                $apellido = $datos->datos("apellido");
                echo $apellido;            ?>
            <h2>Es donante</h2>
            <?php
               $esDonante = $datos->datos("esDonante");
               echo $esDonante;            
            ?>
            <h2>Fecha nacimiento</h2>
            <?php
                $fecha_Nac = $datos->datos("fecha_Nacimiento");
                echo $fecha_Nac;               
                ?>
            <h2>Presenta enfermedades cronicas</h2>
            <?php
                $enfermedades = $datos->datos("enfermedades");
                echo $enfermedades;               
                ?>
            <h2>Tipo de usuario</h2>
            <?php 
                $row = strtotime($datos->datos("fecha_Nacimiento"));
                $fecha_Actual = strtotime(date('Y-m-d'));
                $edad = intval(($fecha_Actual-$row)/60/60/24/365.25);
                if ($edad>=18 && $edad<=56 && $esDonante== "SI" && $enfermedades=="NO"){
                    echo "Activo";
                    $_SESSION["condicion"] = 1;
                }else{
                    echo "Pasivo";
                    $_SESSION["condicion"] = 0;
                }
            ?>  
                </div>
            </div>

        </div>
    </div>
    </div>
</body>

</html>