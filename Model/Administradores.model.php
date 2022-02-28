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
            
            $query="INSERT INTO `productos`(`idProductos`, `Control_idControl`, `Usuarios_idUsuario`, `Marcas_idMarcas`, `Categoria_idCategoria`, `Nombre`, `Descripción`, `Precio`, `Cantidad`);";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }

        public function VerInventario($idControl, $idUsuarios, $idMarcas, $idCategoria, $Nombre,$Descripcion,$Precio,$Cantidad)
        {
            $query="INSERT INTO `productos`(`idProductos`, `Control_idControl`, `Usuarios_idUsuario`, `Marcas_idMarcas`, `Categoria_idCategoria`, `Nombre`, `Descripción`, `Precio`, `Cantidad`);";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }
    ]

?>