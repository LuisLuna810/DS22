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
                <p>Registrar / Ingresar</p>
            </a>
            <hr>
            <a href="solicitante.php">
                <p>Solicitante</p>
            </a>
            <hr>
        </div>

        <div id="contenedor-form">
            <!-- Top-->
            <div class="top-form">
                <p class="registrarse">Registrar</p>
                <p>Gestionar usuario</p>
            </div>

            <!-- Autogestion -> Contenedor registro / login-->
            <div class="cont-registro-login">
                <div class="cont-registro">
                    <form class="formulario" method="post" action="">
                        <label>CUIL</label><br>
                        <input type="number" name="cuil" minlength="11" value="<?php if (isset($id_Asociado)) echo $id_Asociado; ?>" required><br>
                        <label>Nombre</label><br>
                        <input type="text" name="nombre" value="<?php if (isset($nombre)) echo $nombre; ?>" required><br>
                        <label>Apellido</label><br>
                        <input type="text" name="apellido" value="<?php if (isset($apellido)) echo $apellido; ?>" required><br>
                        <label>Fecha nacimiento</label><br>
                        <input style="width: 180px;" type="date" name="fecha_Nacimiento" value="<?php if (isset($fecha_Nacimiento)) echo $fecha_Nacimiento; ?>" required><br>
                        <label>Es donante</label><br>
                        <select style="width: 100px;  height: 30px; font-size: 17px; border-radius: 3px" name="donante" value="<?php if (isset($donante)) echo $donante; ?>" required>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select><br>
                        <label>Posee enfermedades cronicas</label><br>
                        <select style="width: 100px;  height: 30px; font-size: 17px; border-radius: 3px" name="enfermedades" required>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select><br>
                        <div class="b-submit-register">
                            <input type="submit" value="Registrar" name="submit">
                        </div>
                    </form>
                    <?php
                        require_once("asociados.php");
                        if (isset($_POST["submit"])) {
                            $reg_Asociado = new Asociados;
                            $reg_Asociado->id_Asociado = $_POST["cuil"];
                            $reg_Asociado->nombre = $_POST["nombre"];
                            $reg_Asociado->apellido = $_POST["apellido"];
                            $reg_Asociado->es_Donante = $_POST["donante"];
                            $reg_Asociado->fecha_Nacimiento = $_POST["fecha_Nacimiento"];
                            $reg_Asociado->enfermedades = $_POST["enfermedades"];
                            $reg_Asociado->registrar();
                        } 
                    ?>
                </div>
                <!-- Autogestion -> login -->
                <div class="cont-login" >
                    <form method="POST" action="validar-session.php">
                    <input type="number" id="cuil-socio" name="cuil-socio" placeholder="Ingresar CUIL del asociado">
                    <div class="b-submit-login">
                    <input type="submit" value="Ingresar" name="ingresar">
                    </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</body>

</html>