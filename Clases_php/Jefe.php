<?php
    require_once("Empleado.php");
    class Jefe extends Empleado{
        public $Nom_dep;
        function __construct( $nombre,  $apellido,  $Edad, $email, $puesto, $Num_plaza,$Nom_dep){
            parent::__construct( $nombre,  $apellido,  $Edad, $email, $puesto, $Num_plaza);
            $this-> Nom_dep = $Nom_dep;
        } 

        public function getpuesto():string{
            return $this->puesto;
        }


        public function getDatos(){
            $datos="
                Tipo de Usuario:{$this->TipoUsuario}<br>
                Nombre: {$this->Nombre}<br>
                Apellido: {$this->Apellido}<br>
                Edad: {$this->Edad}<br>
                Puesto: {$this->puesto}<br>
                Nombre del departamento: {$this->Nom_dep}
            ";
            return $datos;
        }
        
    }
?>

