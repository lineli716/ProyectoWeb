<?php
    class Usuario
    {
        public $con;
        public function_construct()
        {
            $this->con=new Conexion();
        }

        public function BuscarUsuario($user, $pass)
        {
            $query="SELECT * FROM `usuarios` WHERE `Usuario`='$user' AND `PASS`='$pass';";
        }
    }
?>