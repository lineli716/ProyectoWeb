<?php
/* Smarty version 4.0.4, created on 2022-02-16 08:05:39
  from 'C:\xampp\htdocs\ProyectoWeb\ProyectoWeb\templates\Navs\Admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620ca243388331_54495294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45325688d6511af0eb0fff682c18508eb00915f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\ProyectoWeb\\templates\\Navs\\Admin.tpl',
      1 => 1644995136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620ca243388331_54495294 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col s5">
    <nav class = "center-align cyan accent-4">Opciones</nav>
<div class="collection">
    <?php $_prefixVariable1 = 'Administrador';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
        <a href="?controller=DireccionNav&method=Registro" class="collection-item">Registrar un producto</a>
         <a href="?controller=DireccionNav&method=Marcas" class="collection-item">Marcas</a>
        <a href="" class="collection-item">Entradas</a>
        <a href="" class="collection-item">Salidas</a>
    <?php }?>
 </div>   
</div><?php }
}
