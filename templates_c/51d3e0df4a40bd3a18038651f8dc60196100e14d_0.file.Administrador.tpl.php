<?php
/* Smarty version 4.0.4, created on 2022-03-07 05:35:10
  from 'C:\xampp\htdocs\ProyectoWeb\ProyectoWeb\templates\Administrador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62258b7e085ba4_11909995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51d3e0df4a40bd3a18038651f8dc60196100e14d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\ProyectoWeb\\templates\\Administrador.tpl',
      1 => 1646627700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/Admin.tpl' => 1,
    'file:Administrador/Inventario.tpl' => 1,
    'file:Administrador/Productos.tpl' => 1,
    'file:Administrador/Marcas.tpl' => 1,
    'file:Administrador/Categorias.tpl' => 1,
    'file:Administrador/Entredas.tpl' => 1,
    'file:Administrador/Salidas.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_62258b7e085ba4_11909995 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="navbar-fixed">
   <nav>
      <nav class="lime accent-3">
         <div class="container">

            <img src="Recursos/Lgo.png" height="60" width="55"> 
            <a href="" class="brand-logo">ATTICO</a>
            <ul class="right hide-on-med-and-down">
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href="http://localhost/ProyectoWeb/ProyectoWeb/"><i class="material-icons">exit_to_app</i></a>
            <li><a href="http://localhost/ProyectoWeb/ProyectoWeb/"><i class="material-icons">person_pin</i></a>
           </ul>
          </div>
      </nav>
  </nav>
</div>

<div class="center"> <h3>Administrador</h3></div>
<br></br>
<div class="row">
  <div class="col s4">
    <?php $_smarty_tpl->_subTemplateRender("file:Navs/Admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
    <div class="col s8">
      <?php if ((isset($_smarty_tpl->tpl_vars['rol']->value))) {?>
          <?php if ($_smarty_tpl->tpl_vars['rol']->value == 'Inventario') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:Administrador/Inventario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'RegistroProducto') {?>
              <?php $_smarty_tpl->_subTemplateRender('file:Administrador/Productos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'RegistroMarca') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:Administrador/Marcas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
                 <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'RegistroCategoria') {?>
                   <?php $_smarty_tpl->_subTemplateRender('file:Administrador/Categorias.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'Entredas') {?>
                      <?php $_smarty_tpl->_subTemplateRender('file:Administrador/Entredas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                      <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'Salidas') {?>
                         <?php $_smarty_tpl->_subTemplateRender('file:Administrador/Salidas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php }?>
      <?php }?>         
    </div>
  </div>   
</div>

<footer class="page-footer card  lime accent-3 "><div class="card  lime accent-3">
    <div class="container  ">
        <div class="row ">
        <div class="col l6 s12">
        <h5 class="white-text  "></h5>
        <p class="green accent-2 text-lighten-4"></p>
        </div>
        <div class="col l4 offset-l2 s12">
        <h5 class="white-text"></h5>
        <ul>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
        </ul>
        </div>
        </div>
        </div>
        <div class="footer-copyright">
        <div class="container">
        © 2021 Copyright ATTICO
        <a class="grey-text text-lighten-4 right" href="#!"></a>
    </div>
</footer>
</div> 

<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
