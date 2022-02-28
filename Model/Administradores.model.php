<?php
    class Administradores
    {
        public $con;
        public function __construct()
        {
            $this->con=new Conexion();
            session_start();
        }

        public function CrearProducto($idControl, $idUsuarios, $idMarcas, $idCategoria, $Nombre,$Descripcion,$Precio,$Cantidad)
        {
            
            $query="INSERT INTO `productos`(`idProductos`, `Control_idControl`, `Usuarios_idUsuario`, `Marcas_idMarcas`, `Categoria_idCategoria`, `Nombre`, `Descripción`, `Precio`, `Cantidad`)
            VALUES ('[$idControl]','[$idUsuarios]','[$idMarcas]','[$idCategoria]','[$Nombre]','[$Descripcion]','[$Precio]','[$Cantidad]','[value-9]');";
            
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }

        public function VerInventario()
        {
            $query="SELECT * FROM `productos`;";
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




    ]

?>