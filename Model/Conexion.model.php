<?php
    class Conexion extends mysqli
    {
        $servidor="localhost";
        $pass="";
        $user="root";
        $DataBase="proyectoweb";

        parent::_construct($servidor, $user, $pass, $DataBase);
        $this->query("SET NAMES 'uf-8';");
        $this->connect_errno? die('Hay error en la conexión') : $error="conectado a->".$DataBase;
     }

?>