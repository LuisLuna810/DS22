<?php
    $servirdor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDatos = "ds22";

    $enlace = mysqli_connect($servirdor, $usuario, $clave, $baseDatos);

    if(!$enlace){
        echo "<h1>Error en la conexion con la BDD</h1>";
    }

    if(isset ($_POST["submit"])){
        $id_Asociado = $_POST["cuil"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["correo"];
        $esDonante = $_POST["donante"];
        $fecha_Nacimiento = $_POST["fecha_Nacimiento"];

        $insertar_Datos = "INSERT INTO asociado VALUES('$id_Asociado',
                                                        '$nombre',
                                                        '$apellido',
                                                        '$email',
                                                        '$esDonante', 
                                                        '$fecha_Nacimiento') ";

        $exec_Insert = mysqli_query($enlace, $insertar_Datos);

        if(!$exec_Insert){
            echo"Error al intentar insertar datos en la BDD";
        }
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
            <a href="autogestion.php">
                <p>Autogestion</p>
            </a>
            <hr>
        </div>

        <div id="contenedor-form">
            <!-- Top-->
            <div class="top-form">
                <p class="registrarse">Registrarse</p>
                <p>Ingresar al sistema</p>
            </div>

            <!-- Autogestion -> Contenedor registro / login-->
            <div class="cont-registro-login">
                <div class="cont-registro">
                    <form class="formulario" method="post">
                        <label>CUIL</label><br>
                        <input type="number" name="cuil" value="<?php if(isset($id_Asociado)) echo $id_Asociado;?>"  required><br>
                        <label>Nombre completo</label><br>
                        <input type="text" name="nombre" value="<?php if(isset($nombre)) echo $nombre;?>"   ><br>
                        <label>Apellido</label><br>
                        <input type="text" name="apellido" value="<?php if(isset($apellido)) echo $apellido;?>"><br>
                        <label>Fecha nacimiento</label><br>
                        <input style="width: 180px;" type="date" name="fecha_Nacimiento" value="<?php if(isset($fecha_Nacimiento)) echo $fecha_Nacimiento;?>"  required><br>
                        <label>Es donante</label><br>
                        <select style="width: 100px;  height: 30px; font-size: 17px; border-radius: 3px" name="donante" value="<?php if(isset($sangre)) echo $sangre;?>"  required>
                            <option value="1">SI</option>
                            <option value="0">NO</option>
                        </select><br>
                        <div class="b-submit-register">
                            <input type="submit" name="submit">
                        </div>
                </form>
                </div>
                <!-- Autogestion -> login -->
                <div class="cont-login">
                    <input type="number" id="cuil-socio" placeholder="Ingresar CUIL del asociado">
                    <div class="b-submit-login">
                        <input id="Ingresar" type="submit" value="Ingresar">
                    </div>
                </div>
            </div>
            <?php
                include("validar.php");
                ?>
        </div>
    </div>
    </div>
</body>
</html>