<?php
    class User
    {
        public $smarty;
        public $usuario;
        public function __construct()
        {
            $this->usuario=new Usuario();
            $this->smarty=new Smarty();
            session_start();
        }

        public function BuscarUsuario()
        {
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            
            $u=$this->usuario->BuscarUsuario($user,$pass);

            if($u->num_rows==1)
            {
                $arr=array();
                while ($fila=mysqli_fetch_assoc($u))
                {
                    array_push($arr,$fila);
                }
                $_SESSION['id_Usuario']=$arr[0]['idUsuario'];
                if ($arr[0]['Rol_idRol']==1)
                {
                    $this->smarty->assign('title','Administrador');
                    $this->smarty->display('Administrador.tpl');
                }

               else if ($arr[0]['Rol_idRol']==2)
                {
                    $this->smarty->assign('title','Encargado');
                    $this->smarty->display('Encargado.tpl');
                }

            } 

            else if($u->num_rows>1)
            {
                $this->smarty->assign('title', 'Home');
                $this->smarty->display('Home.tpl');
            }
            else
            {
                $this->smarty->assign('title','Home');
                $this->smarty->display('Home.tpl');
            }  

        } 

    }
?>