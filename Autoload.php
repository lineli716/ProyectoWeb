<?php
function Autoload ($class)
{
    if(is_file('Controller/'.$class.'.Controller.php'))
    {
        include ('Controller/'.$class.'.Controller.php');
    }
    else if(is_file('Framework/Smarty/'.$class.'.class.php'))
    {
        include ('Framework/Smarty/'.$class.'.class.php');
    }
    else if(is_file('Model/'.$class.'.Model.php'))
    {
        include ('Model/'.$class.'.Model.php');
    }
    spl_autoload_register('Autoload');
}
?>