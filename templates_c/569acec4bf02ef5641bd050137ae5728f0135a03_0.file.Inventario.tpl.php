<?php
/* Smarty version 4.0.4, created on 2022-03-10 16:13:03
  from 'C:\xampp\htdocs\ProyectoWeb\templates\Encargado\Inventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622a157f352999_26856928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '569acec4bf02ef5641bd050137ae5728f0135a03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\templates\\Encargado\\Inventario.tpl',
      1 => 1646925170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_622a157f352999_26856928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
        <div class="col s11" align="center">
        <h3>Ver Inventario</h3>  
        </div>   
    <div class="row">
        <div class="input-field col s11">
            <table>
                <thead class="text_center">
                    <tr>
                        <th>Marcas</th>
                        <th>Categoria</th>
                        <th>Nombre del Producto</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Cantidad</th>

                    </tr>
                </thead>
                <tbody>
            <?php if ((isset($_smarty_tpl->tpl_vars['encargado']->value))) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['encargado']->value, 'Enc');
$_smarty_tpl->tpl_vars['Enc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Enc']->value) {
$_smarty_tpl->tpl_vars['Enc']->do_else = false;
?>
                        <tr>
                            
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['Enc']->value['Marca'];?>

                            </td>

                            <td>
                                 <?php echo $_smarty_tpl->tpl_vars['Enc']->value['Categoria'];?>

                            </td>

                            <td>
                                 <?php echo $_smarty_tpl->tpl_vars['Enc']->value['Nombre'];?>

                            </td>

                             <td>
                                 <?php echo $_smarty_tpl->tpl_vars['Enc']->value['Descripci??n'];?>

                            </td>

                            <td>
                                 <?php echo $_smarty_tpl->tpl_vars['Enc']->value['Precio'];?>

                            </td>

                            <td>
                                 <?php echo $_smarty_tpl->tpl_vars['Enc']->value['Cantidad'];?>

                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
        
                </tbody>
            </table>
        </div>
    </div>
    
</div
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
