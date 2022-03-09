<?php
/* Smarty version 4.0.4, created on 2022-02-28 20:26:49
  from 'C:\xampp\htdocs\ProyectoWeb\templates\Administrador\Inventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_621d21f9818094_03608999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52f3f3eae5d2e366b3fee0367baf232abd63b787' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\templates\\Administrador\\Inventario.tpl',
      1 => 1646074340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_621d21f9818094_03608999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
        <div class="input-field col s12">
            <h4 class="center-align black-text">Ver Inventario</h4>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12">
            <table>
                <thead class="text_center">
                    <tr>
                        <th>Control_idControl</th>
                        <th>Usuarios_idUsuario</th>
                        <th>Marcas_idMarcas'</th>
                        <th>Categoria_idCategoria</th>
                        <th>Nombre del Producto</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Cantidad</th>

                    </tr>
                </thead>
                <tbody>
            <?php if ((isset($_smarty_tpl->tpl_vars['productos']->value))) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'Admin');
$_smarty_tpl->tpl_vars['Admin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Admin']->value) {
$_smarty_tpl->tpl_vars['Admin']->do_else = false;
?>
                        <tr>
                             <td>
                                <?php echo $_smarty_tpl->tpl_vars['Admin']->value['Control_idControl'];?>

                            </td>

                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['Admin']->value['Usuarios_idUsuario'];?>

                            </td>

                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['Admin']->value['Marcas_idMarcas'];?>

                            </td>

                            <td>
                                 <?php echo $_smarty_tpl->tpl_vars['Admin']->value['Categoria_idCategoria'];?>

                            </td>

                            <td>
                                 <?php echo $_smarty_tpl->tpl_vars['Admin']->value['Nombre'];?>

                            </td>

                             <td>
                                 <?php echo $_smarty_tpl->tpl_vars['Admin']->value['Descripcion'];?>

                            </td>

                            <td>
                                 <?php echo $_smarty_tpl->tpl_vars['Admin']->value['Precio'];?>

                            </td>

                            <td>
                                 <?php echo $_smarty_tpl->tpl_vars['Admin']->value['Cantidad'];?>

                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php ob_start();
}
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
        
                </tbody>
            </table>
        </div>
    </div>
    
</div
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
