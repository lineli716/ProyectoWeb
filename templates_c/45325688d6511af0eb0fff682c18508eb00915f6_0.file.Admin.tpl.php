<?php
/* Smarty version 4.0.4, created on 2022-03-07 05:15:15
  from 'C:\xampp\htdocs\ProyectoWeb\ProyectoWeb\templates\Navs\Admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622586d3b5c6c9_66482438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45325688d6511af0eb0fff682c18508eb00915f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\ProyectoWeb\\templates\\Navs\\Admin.tpl',
      1 => 1646626450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622586d3b5c6c9_66482438 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col s8">
    <nav class= "center-align lime accent-2">Opciones</nav>
        <div class="collection">
            <?php $_prefixVariable1 = 'Administrador';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
                <a href="?controller=Direccion&method=Inventario" class="collection-item">Ver Inventario</a>
                <a href="?controller=Direccion&method=RegistroProducto" class="collection-item">Registrar Productos</a>
                <a href="?controller=Direccion&method=RegistroMarca" class="collection-item">Registrar Marcas</a>
                <a href="?controller=Direccion&method=RegistroCategoria" class="collection-item">Registrar Categoria</a>
                <a href="?controller=Direccion&method=Entreda" class="collection-item">Entrada de Mercadería</a>
                <a href="?controller=Direccion&method=Salida" class="collection-item">Salida de Mercadería</a>
            <?php }?>
        </div>   
</div><?php }
}
