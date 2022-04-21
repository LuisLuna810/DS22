<?php
    if(isset ($_POST["submit"])){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $cuil = $_POST["cuil"];
        $fecha_Nacimiento = $_POST["fecha_Nacimiento"];
        $sexo = $_POST["sexo"];
        $sangre = $_POST["tipo_Sangre"];
        $provincia = $_POST["provincia"];
        $direccion = $_POST["direccion"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
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
                        <input type="number" name="cuil" value="<?php if(isset($cuil)) echo $cuil;?>"  required><br>
                        <label>Apellido</label><br>
                        <input type="text" name="apellido" value="<?php if(isset($apellido)) echo $apellido;?>"  required><br>
                        <label>Nombre completo</label><br>
                        <input type="text" name="nombre" value="<?php if(isset($nombre)) echo $nombre;?>"   ><br>
                        <label>Fecha nacimiento</label><br>
                        <input style="width: 180px;" type="date" name="fecha_Nacimiento" value="<?php if(isset($fecha_Nacimiento)) echo $fecha_Nacimiento;?>"  required><br>
                        <label>Sexo</label><br>
                        <select style="width: 120px; border-radius: 3px; height: 30px; font-size: 17px;" name="sexo" value="<?php if(isset($sexo)) echo $sexo;?>"   >
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                            <option value="otro">Otro</option>
                        </select><br>
                        <label>Tipo de sangre</label><br>
                        <select style="width: 100px;  height: 30px; font-size: 17px; border-radius: 3px" name="tipo_Sangre" value="<?php if(isset($sangre)) echo $sangre;?>"  required>
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="ab">AB</option>
                            <option value="o">O</option>
                        </select><br>
                        <label>Provincia</label><br>
                        <input type="text" name="provincia" value="<?php if(isset($provincia)) echo $provincia?>"  ><br>
                        <label>Direccion</label><br>
                        <input type="text" name="direccion" value="<?php if(isset($direccion)) echo $direccion?>"  ><br>
                        <label>Correo electronico</label><br>
                        <input type="email" name="correo" value="<?php if(isset($correo)) echo $correo?>"   required><br>
                        <label>Telefono celular</label><br>
                        <input type="number" name="telefono" value="<?php if(isset($telefono)) echo $telefono?>"  ><br>
                        <div class="b-submit-register">
                            <input type="submit" name="submit">
                        </div>
                </div>
                </form>
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