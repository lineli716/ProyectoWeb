<?php
    class Administrador
        {
            public $Admin;
            public $smarty;
            public $direcciones;

            public function __construct()
            {
                $this->Admin=new Administradores();
                $this->smarty=new Smarty();
                $this->direcciones=new Direccion();
            }

            public function RegistroProducto()
            {
               
                $idMarca=$_POST['idMarca'];
                $idCategoria=$_POST['idCategoria'];
                $Nombre=$_POST['Nombre'];
                $Descripcion=$_POST['Descripcion'];
                $Precio=$_POST['Precio'];
                $Cantidad=$_POST['Cantidad'];

                $z=$this->Admin->CrearProducto($idMarca, $idCategoria, $Nombre, $Descripcion, $Precio, $Cantidad);
                $this->direcciones->RegistroProducto();
            } 

            public function RegistroMarca()
            {
               
                $Nombre=$_POST['Nombre'];
                $Descripcion=$_POST['Detalles'];

                $m=$this->Admin->CrearMarca($Nombre, $Detalles);
                $this->smarty->assign('nav',"Administrador");
                $this->smarty->assign('title','Administrador');
                $this->smarty->display('Administrador/Marcas.tpl');
            } 

            public function RegistroCategoría()
            {
               
                $Nombre=$_POST['Nombre'];
                $Descripcion=$_POST['Descripcion'];

                $o=$this->Admin->CrearMarca($Nombre, $Descripcion);
                $this->smarty->assign('nav',"Administrador");
                $this->smarty->assign('title','Administrador');
                $this->smarty->display('Administrador/Categoria.tpl');
            } 


        }
?>