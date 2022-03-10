<?php
/* Smarty version 4.0.4, created on 2022-03-10 21:05:56
  from 'C:\xampp\htdocs\ProyectoWeb\templates\Navs\Encar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622a5a249bb154_45270373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b15ed8f454166187c0eecde8614e271efab66390' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\templates\\Navs\\Encar.tpl',
      1 => 1646942637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622a5a249bb154_45270373 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col s5">
    <nav class= "center-align lime accent-2">Opciones</nav>
        <div class="collection">
            <?php $_prefixVariable1 = 'Encargado';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
                <a href="?controller=Direcciones&method=Inventario" class="collection-item">Ver Inventario</a>
                <a href="?controller=Direcciones&method=RegistroProducto" class="collection-item">Registrar Productos</a>
                <a href="?controller=Direcciones&method=RegistroMarca" class="collection-item">Registrar Marcas</a>
                <a href="?controller=Direcciones&method=RegistroCategoria" class="collection-item">Registrar categoria</a>
                <a href="?controller=Direcciones&method=Entradas" class="collection-item">Entrada de Mercadería</a>
                <a href="?controller=Direcciones&method=Salidas" class="collection-item">Salida de Mercadería</a>
                <a href="?controller=Direccion&method=Ingresos" class="collection-item">Registro de Ingreso de Mercadería</a>
                <a href="?controller=Direccion&method=Egresos" class="collection-item">Registro Retiro de Mercadería</a>
            <?php }?>
        </div>   
</div><?php }
}
