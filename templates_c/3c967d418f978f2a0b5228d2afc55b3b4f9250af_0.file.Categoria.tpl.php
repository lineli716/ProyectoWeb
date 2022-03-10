<?php
/* Smarty version 4.0.4, created on 2022-03-10 21:14:31
  from 'C:\xampp\htdocs\ProyectoWeb\templates\Encargado\Categoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622a5c2741ebd0_77128963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c967d418f978f2a0b5228d2afc55b3b4f9250af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\templates\\Encargado\\Categoria.tpl',
      1 => 1646943267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_622a5c2741ebd0_77128963 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">

    <div class="col s8">
        <form method="post" action="?controller=Administrador&method=RegistroCategoria">

            <div class="input-field col s8">
                <input id="Nombre" type="text" name="Nombre"/>
                <label for="Nombre">Nombre</label>
            </div>

            <div class="row">
                    <div class="input-field col s8 center-align">
                    <input class="waves-effect waves-light btn" type="submit"value="Guardar Categoria"/>
            </div>
            </div>
        </form>
    </div>
</div>



<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
