<?php
    class Encargado
        {
            public $Enc;
            public $smarty;
            public $direcciones;

            public function __construct()
            {
                $this->Enc=new Encargados();
                $this->smarty=new Smarty();
                $this->direcciones=new Direcciones();
            }

            public function RegistroProducto()
            {
                
                $idMarca=$_POST['idMarca'];
                $idCategoria=$_POST['idCategoria'];
                $Nombre=$_POST['Nombre'];
                $Descripcion=$_POST['Descripcion'];
                $Precio=$_POST['Precio'];
                $Cantidad=$_POST['Cantidad'];

                $z=$this->Enc->CrearProducto($idMarca, $idCategoria, $Nombre, $Descripcion, $Precio, $Cantidad);
                $this->direcciones->RegistroProducto();
            } 

            public function RegistroMarca()
            {
               
                $Nombre=$_POST['Nombre'];
                $Detalles=$_POST['Detalles'];

                $m=$this->Enc->CrearMarca($Nombre, $Detalles);
                $this->direcciones->RegistroMarca();
            } 

            public function RegistroCategoria()
            {
               
                $Nombre=$_POST['Nombre'];

                $o=$this->Enc->CrearCategoria($Nombre);
                $this->direcciones->RegistroCategoria();
            } 

            public function Entradas()
            {
               
                $idProducto=$_POST['idProducto'];
                $Cantidad=$_POST['Cantidad'];
                $Razon=$_POST['Razon'];

                $e=$this->Enc->Mas($idProducto, $Cantidad, $Razon);
                $this->direcciones->Entradas();
            } 

            public function Salidas()
            {
               
                $idProducto=$_POST['idProducto'];
                $Cantidad=$_POST['Cantidad'];
                $Razon=$_POST['Razon'];

                $s=$this->Enc->Menos($idProducto, $Cantidad, $Razon);
                $this->direcciones->Salidas();
            } 


        }
?>