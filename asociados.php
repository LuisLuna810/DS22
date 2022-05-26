<?php
    require_once("conexion.php");
    class Asociados extends Conexion{
        public $id_Asociado;
        public $nombre;
        public $apellido;
        public $es_Donante;
        public $fecha_Nacimiento;
        public $enfermedades;

        public function registrar(){
            $this->conectar_DB();
            $query = mysqli_prepare($this->enlace,"INSERT INTO asociado VALUES (?,?,?,?,?,?)");
            $query->bind_param("isssss",$this->id_Asociado, $this->nombre, $this->apellido, $this->es_Donante, $this->fecha_Nacimiento, $this->enfermedades);
            $query->execute();

            #$verificar =mysqli_prepare($this->enlace, "SELECT ? FROM asociados");
            #$verificar->bind_param("i",$this->id_Asociado)
            
            if(!$query->execute()){
                echo "<h3>DATOS REGISTRADOS CORRECTAMENTE</h3> <br>";
            }else{
                echo "<h3>ERROR: Los datos no se registraron correctamente </h3> <br>";
            }
        }

        public function  ingresar(){
            $this->conectar_DB();
            $sql = ("SELECT id_Asociado FROM asociado WHERE id_Asociado=$this->id_Asociado");
            $resultado = mysqli_query($this->enlace,$sql);

            if ($resultado->num_rows == 1) {
                header("Location: datos-personales.php");
                die();
            }else{ 
                include_once("registrarse-ingresar.php");
                echo '<script language="javascript">alert("CUIL INGRESADO NO REGISTRADO");</script>';
            } 
            mysqli_free_result($resultado);
            mysqli_close($this->enlace);
        }


        public function datos($column){
            $this->conectar_DB();
            $datos_Asociado = ("SELECT * FROM asociado WHERE id_Asociado= $this->id_Asociado ");
            $resultado = mysqli_query($this->enlace,$datos_Asociado);
            $row= mysqli_fetch_assoc($resultado);
            return $row[$column];
        }

        public function editar()
        {
            $this->conectar_DB();
            $editar = mysqli_query($this->enlace,"UPDATE asociado SET nombre = '$this->nombre' , apellido= '$this->apellido' , esDonante= '$this->es_Donante' , fecha_Nacimiento= '$this->fecha_Nacimiento' , enfermedades= '$this->enfermedades' WHERE id_Asociado= '$this->id_Asociado' "); 
            if ($editar){
                echo '<H2 style="color:red; font-family: sans-serif;">*Datos actualizados correctamente</H2>';
                }else{
                    echo '<H2 style="color:red; font-family: sans-serif;">*ERROR: los datos no se actualizaron</H2>';
                }
        }

        public function eliminarAsociado(){
            $this->conectar_DB();
            $eliminarAsociado = mysqli_query($this->enlace,"DELETE FROM asociado WHERE id_Asociado = '$this->id_Asociado' ");
            if($eliminarAsociado){
                header("Location: index.php");
            }
        }
    }
?>