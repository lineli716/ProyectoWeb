<?php
    class Home
    {
      public $smarty;
      public $con;
      public function __construct()
      {
          $this->smarty=new Smarty();
          $this->con=new Conexion();
      }
       public function Inicio()
       {
           $this->smarty->display('Home.tpl');
       }

    }
?>