<?php
    include "Controller/Uuario.controller.php";

    if(isset($_GET["Controller"]) && isset ($_GET["Method"]))
    {
        $controller=$_GET["Controller"];
        $method=$_GET["Method"];
    }
    else
    {
        $controller="Usuario";
        $method="Inicio";
    }

    if(class_exists($controller) && method_exists($controller, $method))
    {
        $class=new $controller();
        $class->$method();
    }
    else
    {
        echo "La clase o metodo no existe";
    }
?>