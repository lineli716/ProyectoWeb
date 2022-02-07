<?php
    class Home
    {

      public $smarty
      public $con;
      public function_construct()
      {
          $this->smarty=new Smarty();
          $this->con=new Conexion();
      }
       public function Inicio()
       {
           $this->smart->display('Home.tpl');
       }

    }
?>