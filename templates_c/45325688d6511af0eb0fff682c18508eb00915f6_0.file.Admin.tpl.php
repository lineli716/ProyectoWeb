<?php
/* Smarty version 4.0.4, created on 2022-03-10 20:04:51
  from 'C:\xampp\htdocs\ProyectoWeb\ProyectoWeb\templates\Navs\Admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622a4bd33cf336_48619212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45325688d6511af0eb0fff682c18508eb00915f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\ProyectoWeb\\templates\\Navs\\Admin.tpl',
      1 => 1646939073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622a4bd33cf336_48619212 (Smarty_Internal_Template $_smarty_tpl) {
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
                 <a href="?controller=Direccion&method=Ingresos" class="collection-item">Registro de Ingreso de Mercadería</a>
                 <a href="?controller=Direccion&method=Egresos" class="collection-item">Registro Retiro de Mercadería</a>
            <?php }?>
        </div>   
</div><?php }
}
