<?php
    class Administradores
    {
        public $con;
        public function __construct()
        {
            $this->con=new Conexion();
            session_start();
        }

        public function CrearProducto($idMarca, $idCategoria, $Nombre,$Descripcion,$Precio,$Cantidad)
        {
            
            $query="INSERT INTO `productos`(`Marcas_idMarcas`, `Categoria_idCategoria`, `Nombre`, `Descripción`, `Precio`, `Cantidad`)
            VALUES ('[$idMarca]','[$idCategoria]','[$Nombre]','[$Descripcion]','[$Precio]','[$Cantidad]');";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }

        public function VerInventario()
        {
            $query="SELECT p.Nombre, p.Descripción, p.Precio, p.Cantidad, c.Nombre AS Categoria, m.Nombre AS Marca FROM `productos` AS p, categoria AS c, marcas AS m WHERE p.Categoria_idCategoria=c.idCategoria AND p.Marcas_idMarcas=m.idMarcas;";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }

        public function CrearMarca($Nombre)
        {
            
            $query="INSERT INTO `categoria`(`Nombre`) VALUES ('[$Nombre]');";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }
        public function CrearCategoria($Nombre, $Detalles)
        {
            
            $query="INSERT INTO `marcas`( `Nombre`, `Detalles`) VALUES ('[$Nombre]','[$Detalles]');";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }




    }

?>