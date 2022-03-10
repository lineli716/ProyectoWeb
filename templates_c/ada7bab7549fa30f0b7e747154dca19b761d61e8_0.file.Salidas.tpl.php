<?php
/* Smarty version 4.0.4, created on 2022-03-10 06:05:36
  from 'C:\xampp\htdocs\ProyectoWeb\ProyectoWeb\templates\Administrador\Salidas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62298720da6a97_80470920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ada7bab7549fa30f0b7e747154dca19b761d61e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\ProyectoWeb\\templates\\Administrador\\Salidas.tpl',
      1 => 1646888731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_62298720da6a97_80470920 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">

    <div class="col s8">
        <form method="post" action="?controller=Administrador&method=Salidas">

            <div class="input-field col s8">
                <input id="idProducto" type="text" name="idProducto"/>
                <label for="idProducto">Nombre</label>
            </div>

            <div class="input-field col s8">
                <input id="Cantidad" type="number" name="Cantidad"/>
                <label for="Cantidad">Cantidad a retirar</label>
            </div>

            <div class="input-field col s8">
                <input id="Razon" type="text" name="Razon"/>
                <label for="Razon">Razon del retiro</label>
            </div>

            
            <div class="row">
                    <div class="input-field col s8 center-align">
                    <input class="waves-effect waves-light btn" type="submit"value="Guardar la salida"/>
            </div>
            </div>
        </form>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
