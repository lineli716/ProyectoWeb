<?php
/* Smarty version 4.0.4, created on 2022-03-07 19:30:30
  from 'C:\xampp\htdocs\ProyectoWeb\ProyectoWeb\templates\Encargado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62264f462428a7_13603883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48b8aeb2eb8d3e06e7df12d2d03fb5bd4693d193' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\ProyectoWeb\\templates\\Encargado.tpl',
      1 => 1646676293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/Encar.tpl' => 1,
    'file:Encargado/Inventario.tpl' => 1,
    'file:Encargado/Productos.tpl' => 1,
    'file:Encargado/Marcas.tpl' => 1,
    'file:Encargado/Categorias.tpl' => 1,
    'file:Encargado/Entredas.tpl' => 1,
    'file:Encargado/Salidas.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_62264f462428a7_13603883 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="center"> <h3>Encargado</h3></div>
<br></br>
<div class="row">
  <div class="col s5">
    <?php $_smarty_tpl->_subTemplateRender("file:Navs/Encar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div class="col 1">
    </div>
    <div class="col s5">
      <?php if ((isset($_smarty_tpl->tpl_vars['rol']->value))) {?>
          <?php if ($_smarty_tpl->tpl_vars['rol']->value == 'Inventario') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:Encargado/Inventario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'RegistroProducto') {?>
              <?php $_smarty_tpl->_subTemplateRender('file:Encargado/Productos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'RegistroMarca') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:Encargado/Marcas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
                 <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'RegistroCategoria') {?>
                   <?php $_smarty_tpl->_subTemplateRender('file:Encargado/Categorias.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'Entredas') {?>
                      <?php $_smarty_tpl->_subTemplateRender('file:Encargado/Entredas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                      <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'Salidas') {?>
                         <?php $_smarty_tpl->_subTemplateRender('file:Encargado/Salidas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
