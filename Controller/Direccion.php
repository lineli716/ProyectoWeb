<?php
    class Direccion
    {
        public $smarty;
        public $administrador;
        
        public function __construct()
        {
            $this->smarty=new Smarty();
            $this->Admin=new Administradores(); 
        }
        
        public function Inventario()
        {
            $ad=$this->administrador->VerInventario();
            $arr=array();
            while($row=mysqli_fetch_assoc($ad))
            {
                array_push($arr,$row);
            }
            $this->smarty->assign('administrador', $arr);
            $this->smarty->assign('nav', 'administrador');
            $this->smarty->assign('rol','Inventario');
            $this->smarty->assign('title','Administrador');
            $this->smarty->display('Administrador.tpl');
        }
        public function RegistroProducto()
        {
            $this->smarty->assign('nav','administrador');
            $this->smarty->assign('rol','RegistroProductos');
            $this->smarty->assign('title','Administrador');
            $this->smarty->display('Administrador.tpl');
        }