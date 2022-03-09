<?php
    class Encargado
        {
            public $Enc;
            public $smarty;

            public function __construct()
            {
                $this->Enc=new Encargado();
                $this->smarty=new Smarty();
            }

            public function RegistroProducto()
            {
               
                $idControl=$_POST['Control_idControl'];
                $idUsuarios=$_POST['Usuario_idUsuario'];
                $idMarcas=$_POST['Marcas_idMarcas'];
                $idCategoria=$_POST['Categoria_idCategoria'];
                $Nombre=$_POST['Nombre'];
                $Descripcion=$_POST['Descripcion'];
                $Precio=$_POST['Precio'];
                $Cantidad=$_POST['Cantidad'];

                $z=$this->Enc->CrearProducto($idControl, $idUsuarios, $idMarcas, $idCategoria, $Nombre, $Descripcion, $Precio, $Cantidad);
                $this->smarty->assign('nav',"Encargado");
                $this->smarty->assign('title','Encargado');
                $this->smarty->display('Encargado/Productos.tpl');
            } 

            public function RegistroMarca()
            {
               
                $Nombre=$_POST['Nombre'];
                $Descripcion=$_POST['Detalles'];

                $m=$this->Enc->CrearMarca($Nombre, $Detalles);
                $this->smarty->assign('nav',"Encargado");
                $this->smarty->assign('title','Encargado');
                $this->smarty->display('Encargado/Marcas.tpl');
            } 

            public function RegistroCategoría()
            {
               
                $Nombre=$_POST['Nombre'];
                $Descripcion=$_POST['Descripcion'];

                $o=$this->Enc->CrearMarca($Nombre, $Descripcion);
                $this->smarty->assign('nav',"Encargado");
                $this->smarty->assign('title','Encargado');
                $this->smarty->display('Encargado/Categoria.tpl');
            } 


        }
?>