<?php
/* Smarty version 4.0.4, created on 2022-03-10 21:42:41
  from 'C:\xampp\htdocs\ProyectoWeb\templates\Encargado\Ingresos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622a62c192ef92_35753557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '333087afe87cf5e5b927166dbe4746ce75bb228c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\templates\\Encargado\\Ingresos.tpl',
      1 => 1646944930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_622a62c192ef92_35753557 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
        <div class="col s11" align="center">
        <h3>Ver ingreso de mercaderías</h3>  
        </div>   
    <div class="row">
        <div class="input-field col s11">
            <table>
                <thead class="text_center">
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Razon</th>
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
                                <?php echo $_smarty_tpl->tpl_vars['Enc']->value['Nombre'];?>

                            </td>

                            <td>
                                 <?php echo $_smarty_tpl->tpl_vars['Enc']->value['Cantidad'];?>

                            </td>

                            <td>
                                 <?php echo $_smarty_tpl->tpl_vars['Enc']->value['Razon'];?>

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
