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
            <a href="registrarse-ingresar.php">
                <p>Registrarse / Ingresar</p>
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
                    <form class="formulario" method="post" action="">
                        <label>CUIL</label><br>
                        <input type="number" name="cuil" minlength="11" maxlength="11" value="<?php if (isset($id_Asociado)) echo $id_Asociado; ?>" required><br>
                        <label>Nombre</label><br>
                        <input type="text" name="nombre" value="<?php if (isset($nombre)) echo $nombre; ?>" required><br>
                        <label>Apellido</label><br>
                        <input type="text" name="apellido" value="<?php if (isset($apellido)) echo $apellido; ?>" required><br>
                        <label>Fecha nacimiento</label><br>
                        <input style="width: 180px;" type="date" name="fecha_Nacimiento" value="<?php if (isset($fecha_Nacimiento)) echo $fecha_Nacimiento; ?>" required><br>
                        <label>Es donante</label><br>
                        <select style="width: 100px;  height: 30px; font-size: 17px; border-radius: 3px" name="donante" value="<?php if (isset($sangre)) echo $sangre; ?>" required>
                            <option value="1">SI</option>
                            <option value="0">NO</option>
                        </select><br>
                        <div class="b-submit-register">
                            <input type="submit" name="submit">
                        </div>
                    </form>
                    <?php
                        require_once("datos.php");
                        if (isset($_POST["submit"])) {
                            $asociado = new Asociados;
                            $asociado->id_Asociado = $_POST["cuil"];
                            $asociado->nombre = $_POST["nombre"];
                            $asociado->apellido = $_POST["apellido"];
                            $asociado->es_Donante = $_POST["donante"];
                            $asociado->fecha_Nacimiento = $_POST["fecha_Nacimiento"];
                            $asociado->insertar();
                        } 
                    ?>
                </div>
                <!-- Autogestion -> login -->
                <div class="cont-login">
                    <input type="number" id="cuil-socio" placeholder="Ingresar CUIL del asociado">
                    <div class="b-submit-login">
                        <input id="Ingresar" type="submit" value="Ingresar">
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</body>

</html>