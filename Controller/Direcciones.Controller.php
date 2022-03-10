<?php
    class Direcciones
    {
        public $smarty;
        public $encargado;
        
        public function __construct()
        {
            $this->smarty=new Smarty();
            $this->encargado=new Encargados(); 
        }
        
        public function Inventario()
        {
            $ad=$this->encargado->VerInventario();
            $arr=array();
            while($row=mysqli_fetch_assoc($ad))
            {
                array_push($arr,$row);
            }
            
            $this->smarty->assign('encargado', $arr);
            $this->smarty->assign('nav', 'encargado');
            $this->smarty->assign('rol','Inventario');
            $this->smarty->assign('title','Encargado');
            $this->smarty->display('Encargado.tpl');
        }
        public function RegistroProducto()
        {
            $this->smarty->assign('nav', 'encargado');
            $this->smarty->assign('rol','RegistroProducto');
            $this->smarty->assign('title','Encargado');
            $this->smarty->display('Encargado.tpl');
        }

        public function RegistroMarca()
        {
            $this->smarty->assign('nav', 'encargado');
            $this->smarty->assign('rol','RegistroMarca');
            $this->smarty->assign('title','Encargado');
            $this->smarty->display('Encargado.tpl');
        }

        public function RegistroCategoria()
        {
            $this->smarty->assign('nav', 'encargado');
            $this->smarty->assign('rol','RegistroCategoria');
            $this->smarty->assign('title','Encargado');
            $this->smarty->display('Encargado.tpl');
        }

        public function Entradas()
        {
            $this->smarty->assign('nav', 'encargado');
            $this->smarty->assign('rol','Entradas');
            $this->smarty->assign('title','Encargado');
            $this->smarty->display('Encargado.tpl');
        }

        public function Salidas()
        {
            $this->smarty->assign('nav', 'encargado');
            $this->smarty->assign('rol','Salidas');
            $this->smarty->assign('title','Encargado');
            $this->smarty->display('Encargado.tpl');
        }

        public function Ingresos()
        {
            $ad=$this->encargado->VerIngresos();
            $arr=array();
            while($row=mysqli_fetch_assoc($ad))
            {
                array_push($arr,$row);
            }
            
            $this->smarty->assign('encargado', $arr);
            $this->smarty->assign('nav','encargado');
            $this->smarty->assign('rol','Ingresos');
            $this->smarty->assign('title','Encargado');
            $this->smarty->display('Encargado.tpl');
        }

        public function Egresos()
        {
            $ad=$this->encargado->VerSalidas();
            $arr=array();
            while($row=mysqli_fetch_assoc($ad))
            {
                array_push($arr,$row);
            }
            
            $this->smarty->assign('encargado', $arr);
            $this->smarty->assign('nav','encargado');
            $this->smarty->assign('rol','Egresos');
            $this->smarty->assign('title','Encargado');
            $this->smarty->display('Encargado.tpl');
        }
    }
?>