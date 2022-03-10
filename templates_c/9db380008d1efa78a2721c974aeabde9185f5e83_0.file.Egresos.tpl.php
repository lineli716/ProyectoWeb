<?php
/* Smarty version 4.0.4, created on 2022-03-10 20:57:28
  from 'C:\xampp\htdocs\ProyectoWeb\templates\Administrador\Egresos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622a58289801c1_39049048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9db380008d1efa78a2721c974aeabde9185f5e83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\templates\\Administrador\\Egresos.tpl',
      1 => 1646939562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_622a58289801c1_39049048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
        <div class="col s11" align="center">
        <h3>Ver retiro de mercadería</h3>  
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
            <?php if ((isset($_smarty_tpl->tpl_vars['administrador']->value))) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['administrador']->value, 'Admin');
$_smarty_tpl->tpl_vars['Admin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Admin']->value) {
$_smarty_tpl->tpl_vars['Admin']->do_else = false;
?>
                        <tr>
                            
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['Admin']->value['Nombre'];?>

                            </td>

                            <td>
                                 <?php echo $_smarty_tpl->tpl_vars['Admin']->value['Cantidad'];?>

                            </td>

                            <td>
                                 <?php echo $_smarty_tpl->tpl_vars['Admin']->value['Razon'];?>

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
