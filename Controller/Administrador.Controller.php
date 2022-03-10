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
                $Detalles=$_POST['Detalles'];

                $m=$this->Admin->CrearMarca($Nombre, $Detalles);
                $this->direcciones->RegistroMarca();
            } 

            public function RegistroCategoria()
            {
               
                $Nombre=$_POST['Nombre'];

                $o=$this->Admin->CrearCategoria($Nombre);
                $this->direcciones->RegistroCategoria();
            } 

            public function Entradas()
            {
               
                $idProducto=$_POST['idProducto'];
                $Cantidad=$_POST['Cantidad'];
                $Razon=$_POST['Razon'];

                $e=$this->Admin->Mas($idProducto, $Cantidad, $Razon);
                $this->direcciones->Entradas();
            } 

            public function Salidas()
            {
               
                $idProducto=$_POST['idProducto'];
                $Cantidad=$_POST['Cantidad'];
                $Razon=$_POST['Razon'];

                $s=$this->Admin->Menos($idProducto, $Cantidad, $Razon);
                $this->direcciones->Salidas();
            } 

            


        }
?>