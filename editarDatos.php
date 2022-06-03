<?php
/*ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);*/
require_once("asociados.php");
$id = $_GET["id"];
if ($id == null || $id = '') {
    echo "ACCESO DENEGADO";
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Editar datos</title>
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
            <a href="cerrar-session.php">
                <p>Cerrar Sesion</p>
            </a>
        </div>

        <div id="contenedor-form">
            <div>
                <form class="formulario" method="post" action="">
                    <input type="hidden" name="id_Asociado" value="<?php echo $_GET['id']  ?>">
                    <label>Nombre</label><br>
                    <input type="text" name="nombre" required><br>
                    <label>Apellido</label><br>
                    <input type="text" name="apellido" required><br>
                    <label>Fecha nacimiento</label><br>
                    <input style="width: 180px;" type="date" name="fecha_Nacimiento" required><br>
                    <label>Es donante</label><br>
                    <select style="width: 100px;  height: 30px; font-size: 17px; border-radius: 3px" name="donante" required>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select><br>
                    <label>Posee enfermedades cronicas</label><br>
                    <select style="width: 100px;  height: 30px; font-size: 17px; border-radius: 3px" name="enfermedades" required>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select><br>
                    <div class="b-actualizar">
                        <input type="submit" value="Actualizar datos" name="actualizar">
                    </div>
                </form>
                <?php
                include_once("asociados.php");
                if (isset($_POST["actualizar"])) {
                    $editar = new Asociados;
                    $editar->id_Asociado = $_POST["id_Asociado"];
                    $editar->nombre = $_POST["nombre"];
                    $editar->apellido = $_POST["apellido"];
                    $editar->fecha_Nacimiento = $_POST["fecha_Nacimiento"];
                    $editar->es_Donante = $_POST["donante"];
                    $editar->enfermedades = $_POST["enfermedades"];
                    $editar->editar();
                    }    
                ?>
            </div>
        </div>



    </div>
    </div>
    </div>
</body>

</html>