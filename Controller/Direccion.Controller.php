<?php
    class Direccion
    {
        public $smarty;
        public $administrador;
        
        public function __construct()
        {
            $this->smarty=new Smarty();
            $this->administrador=new Administradores(); 
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
            $this->smarty->assign('rol','RegistroProducto');
            $this->smarty->assign('title','Administrador');
            $this->smarty->display('Administrador.tpl');
        }

        public function RegistroMarca()
        {
            $this->smarty->assign('nav','administrador');
            $this->smarty->assign('rol','RegistroMarca');
            $this->smarty->assign('title','Administrador');
            $this->smarty->display('Administrador.tpl');
        }

        public function RegistroCategoria()
        {
            $this->smarty->assign('nav','administrador');
            $this->smarty->assign('rol','RegistroCategoria');
            $this->smarty->assign('title','Administrador');
            $this->smarty->display('Administrador.tpl');
        }

        public function Entradas()
        {
            $this->smarty->assign('nav','administrador');
            $this->smarty->assign('rol','Entradas');
            $this->smarty->assign('title','Administrador');
            $this->smarty->display('Administrador.tpl');
        }

        public function Salidas()
        {
            $this->smarty->assign('nav','administrador');
            $this->smarty->assign('rol','Salidas');
            $this->smarty->assign('title','Administrador');
            $this->smarty->display('Administrador.tpl');
        }

        public function Ingresos()
        {
            $ad=$this->administrador->VerIngresos();
            $arr=array();
            while($row=mysqli_fetch_assoc($ad))
            {
                array_push($arr,$row);
            }
            
            $this->smarty->assign('administrador', $arr);
            $this->smarty->assign('nav','administrador');
            $this->smarty->assign('rol','Ingresos');
            $this->smarty->assign('title','Administrador');
            $this->smarty->display('Administrador.tpl');
        }

        public function Egresos()
        {
            $ad=$this->administrador->VerSalidas();
            $arr=array();
            while($row=mysqli_fetch_assoc($ad))
            {
                array_push($arr,$row);
            }
            
            $this->smarty->assign('administrador', $arr);
            $this->smarty->assign('nav','administrador');
            $this->smarty->assign('rol','Egresos');
            $this->smarty->assign('title','Administrador');
            $this->smarty->display('Administrador.tpl');
        }

    }
?>