<?php
/* Smarty version 4.0.4, created on 2022-02-28 20:26:49
  from 'C:\xampp\htdocs\ProyectoWeb\templates\Navs\Admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_621d21f96e8a63_74956443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '030744680b63a946eb2808f1d96ca4da0cd9885b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\templates\\Navs\\Admin.tpl',
      1 => 1646074340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621d21f96e8a63_74956443 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col s5">
    <nav class= "center-align lime accent-2">Opciones</nav>
        <div class="collection">
            <?php $_prefixVariable1 = 'Administrador';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
                <a href="?controller=Direccion&method=Inventario" class="collection-item">Ver Inventario</a>
                <a href="?controller=Direccion&method=RegistroProducto" class="collection-item">Registrar Productos</a>
                <a href="?controller=Direccion&method=RegistroMarca" class="collection-item">Registrar Marcas</a>
                <a href="?controller=Direccion&method=RegistroCategoria" class="collection-item">Registrar categoria</a>
                <a href="?controller=Direccion&method=Entreda" class="collection-item">Entrada de Mercadería</a>
                <a href="?controller=Direccion&method=Salida" class="collection-item">Salida de Mercadería</a>
            <?php }?>
        </div>   
</div><?php }
}
