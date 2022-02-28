<?php
    class Administrador
        {
            public $Admin;
            public $smarty;

            public function __construct()
            {
                $this->Admin=new Administradores();
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

                $z=$this->Admin->CrearProducto($idControl, $idUsuarios, $idMarcas, $idCategoria, $Nombre, $Descripcion, $Precio, $Cantidad);
                $this->smarty->assign('nav',"Administrador");
                $this->smarty->assign('title','Administrador');
                $this->smarty->display('Administrador/Productos.tpl');
            } 


        }
?>