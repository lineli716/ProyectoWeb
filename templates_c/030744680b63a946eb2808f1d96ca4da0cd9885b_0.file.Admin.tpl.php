<?php
/* Smarty version 4.0.4, created on 2022-03-10 16:00:12
  from 'C:\xampp\htdocs\ProyectoWeb\templates\Navs\Admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622a127c7e1a23_88375960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '030744680b63a946eb2808f1d96ca4da0cd9885b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\templates\\Navs\\Admin.tpl',
      1 => 1646924379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622a127c7e1a23_88375960 (Smarty_Internal_Template $_smarty_tpl) {
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
                <a href="?controller=Direccion&method=Entradas" class="collection-item">Entrada de Mercadería</a>
                <a href="?controller=Direccion&method=Salidas" class="collection-item">Salida de Mercadería</a>
            <?php }?>
        </div>   
</div><?php }
}
