<?php
/* Smarty version 4.0.4, created on 2022-02-23 06:16:57
  from 'C:\xampp\htdocs\ProyectoWeb\ProyectoWeb\templates\Administrador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6215c34921ad16_33314286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51d3e0df4a40bd3a18038651f8dc60196100e14d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\ProyectoWeb\\templates\\Administrador.tpl',
      1 => 1645593268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6215c34921ad16_33314286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="navbar-fixed">
   <nav>
      <nav class="lime accent-3">
         <div class="container">

            <img src="Recursos/Lgo.png" height="60" width="55"> 
            <a href="" class="brand-logo">ATTICO</a>
            <ul class="right hide-on-med-and-down">
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href="http://localhost/ProyectoWeb/ProyectoWeb/"><i class="material-icons">exit_to_app</i></a>
            <li><a href="http://localhost/ProyectoWeb/ProyectoWeb/"><i class="material-icons">person_pin</i></a>
           </ul>
          </div>
      </nav>
  </nav>
</div>

<div class="card-panel  teal accent-3">  
    <div class="container">
        <div class="col s12 m6">
             <h2 class="center-align white-text text- ">Menú</h2>
             <h3 class="center-align white-text text- ">Elige una opción</h3>
        </div>
        <br><br>
        <div class="container">
            <div class="col s6 m6">
                <div class="center">
                <a href="?controller=Administrador&method=Producto" class="waves-effect waves-light btn"><i class="material-icons left">local_mall</i>Productos</a>
                <a href="?controller=Administrador&method=Marcas" class="waves-effect waves-light btn"><i class="material-icons left">event_seat</i>Marcas</a>
                <a href="http://localhost/ProyectoWeb/ProyectoWeb/" class="waves-effect waves-light btn"><i class="material-icons left">dns</i>Categorias</a>
                </div>
            </div>
        </div>
        <br>
         <div class="container">
            <div class="col s6 m6">
                <div class="center">
                <a class="waves-effect waves-light btn"><i class="material-icons left">queue_play_next</i>Entrada</a>
                <a class="waves-effect waves-light btn"><i class="material-icons left">unarchive</i>Salidas</a>
                <a class="waves-effect waves-light btn"><i class="material-icons left">person</i>Usuarios</a>
                
                </div>
            </div>
        </div>
<br><br>
    </div>
</div> 

<footer class="page-footer card  lime accent-3 "><div class="card  lime accent-3">
    <div class="container  ">
        <div class="row ">
        <div class="col l6 s12">
        <h5 class="white-text  "></h5>
        <p class="green accent-2 text-lighten-4"></p>
        </div>
        <div class="col l4 offset-l2 s12">
        <h5 class="white-text"></h5>
        <ul>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
        </ul>
        </div>
        </div>
        </div>
        <div class="footer-copyright">
        <div class="container">
        © 2021 Copyright ATTICO
        <a class="grey-text text-lighten-4 right" href="#!"></a>
    </div>
</footer>
</div> 

<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
