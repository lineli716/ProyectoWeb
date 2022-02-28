<?php
/* Smarty version 4.0.4, created on 2022-02-28 06:02:58
  from 'C:\xampp\htdocs\ProyectoWeb\ProyectoWeb\templates\Navs\Admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_621c5782e17b61_50182895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45325688d6511af0eb0fff682c18508eb00915f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\ProyectoWeb\\templates\\Navs\\Admin.tpl',
      1 => 1646024564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621c5782e17b61_50182895 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col s5">
    <nav class = "center-align lime accent-2">Opciones</nav>
        <div class="collection">
            <?php $_prefixVariable1 = 'Administrador';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
                <a href="?controller=Direccion&method=Inventario" class="collection-item">Ver Inventario</a>
                <a href="?controller=Direccion&method=RegistroProducto" class="collection-item">Registrar Productos</a>
                 <a href="?controller=Direccion&method=RegistroP" class="collection-item">Registrar Productos</a>
            <?php }?>
        </div>   
</div><?php }
}
