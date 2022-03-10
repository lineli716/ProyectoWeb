<?php
/* Smarty version 4.0.4, created on 2022-03-10 05:58:13
  from 'C:\xampp\htdocs\ProyectoWeb\ProyectoWeb\templates\Administrador\Entradas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62298565a7c046_17884952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea194b193bbbcba851d4e22e70a79ab8fe2ab47e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\ProyectoWeb\\templates\\Administrador\\Entradas.tpl',
      1 => 1646888221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_62298565a7c046_17884952 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">

    <div class="col s8">
        <form method="post" action="?controller=Administrador&method=Entradas">

            <div class="input-field col s8">
                <input id="idProducto" type="text" name="idProducto"/>
                <label for="idProducto">Nombre</label>
            </div>

            <div class="input-field col s8">
                <input id="Cantidad" type="number" name="Cantidad"/>
                <label for="Cantidad">Cantidad a ingresar</label>
            </div>

            <div class="input-field col s8">
                <input id="Razon" type="text" name="Razon"/>
                <label for="Razon">Razon del ingreso</label>
            </div>

            
            <div class="row">
                    <div class="input-field col s8 center-align">
                    <input class="waves-effect waves-light btn" type="submit"value="Guardar Ingreso"/>
            </div>
            </div>
        </form>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
