<?php
/* Smarty version 4.0.4, created on 2022-03-10 16:44:52
  from 'C:\xampp\htdocs\ProyectoWeb\templates\Encargado\Entradas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622a1cf49147a2_85325187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfa12a5ebc5402016cf7ad00dcc698f402d54b47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\templates\\Encargado\\Entradas.tpl',
      1 => 1646926558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_622a1cf49147a2_85325187 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">

    <div class="col s8">
        <form method="post" action="?controller=Encargado&method=Entradas">

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
