<?php
    require_once("AbsInformacion.php");
    class Usuario extends Informacion{
        public $Nombre;
        public $Apellido;
        public $Edad;
        protected $Empleado = true;
        protected $TipoUsuario;
        protected $Email;

        public function __construct( $nombre,  $apellido,  $Edad, $email){
            $this->Nombre = $nombre;
            $this->Email = $email;
            $this->Apellido = $apellido;
            $this->Edad = $Edad;
            $this->TipoUsuario = ($this->Empleado) ? 'Empleado' : 'Cliente';
        }   
        
        public function getEmail():string{
            return $this->Email;
        }

        public function getDatos(){
            $datos="
                Protegido -> Tipo de Usuario: {$this->TipoUsuario}<br>
                Publico -> Nombre: {$this->Nombre}<br>
                Publico -> Apellido: {$this->Apellido}<br>
                Publico -> Edad: {$this->Edad}<br>
                Protegido -> Email: {$this->Email}";
            return $datos;
        }
    } 
?>
