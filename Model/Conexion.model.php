<?php
    class Conexion extends mysqli
    {
       function __construct()
       {
        $ser="localhost";
        $pass="";
        $user="root";
        $DataBase="proyectoweb";

        parent:: __construct($ser, $user, $pass, $DataBase);
        $this->query("SET NAMES 'uf-8';");
        $this->connect_errno? die('Hay error en la conexión') : $error="conectado a->".$DataBase;
       }
     }

?>