<?php
/* Smarty version 4.0.4, created on 2022-03-10 16:00:18
  from 'C:\xampp\htdocs\ProyectoWeb\templates\Administrador\Marcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622a1282b65a59_24758408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '243fa7458284fcef9b82f7a49450fd4c9b98cafc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\templates\\Administrador\\Marcas.tpl',
      1 => 1646924379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_622a1282b65a59_24758408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">

    <div class="col s8">
        <form method="post" action="?controller=Administrador&method=RegistroMarca">

            <div class="input-field col s8">
                <input id="Nombre" type="text" name="Nombre"/>
                <label for="Nombre">Nombre</label>
            </div>

            <div class="input-field col s8">
                <input id="Detalles" type="text" name="Detalles"/>
                <label for="Detalles">Detalles</label>
            </div>
            
            <div class="row">
                    <div class="input-field col s8 center-align">
                    <input class="waves-effect waves-light btn" type="submit"value="Guardar Marca"/>
            </div>
            </div>
        </form>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
