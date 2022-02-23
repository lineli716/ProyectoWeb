<?php
    class Direccion
    {
        public $smarty;
        public $Admin;
        
        public function __construct()
        {
            $this->smarty=new Smarty();
            $this->Admin=new Administrador(); 
        }
        
        public function Producto()
        {
            $ad=$this->administrador->Ve();
            $arr=array();
            while($row=mysqli_fetch_assoc($ad))
            {
                array_push($arr,$row);
            }

            $this->smarty->assign('Administrador','$array');
            $this->smarty->assign('nav', 'Administrador');
            $this->smarty->assign('rol','Inventario');
            $this->smarty->assign('title','Administrador');
            $this->smarty->display('Administrador.tpl');
        }