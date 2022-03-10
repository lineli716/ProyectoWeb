<?php
/* Smarty version 4.0.4, created on 2022-03-09 16:34:31
  from 'C:\xampp\htdocs\ProyectoWeb\ProyectoWeb\templates\Administrador\Productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6228c907676620_85284040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73e44764bb75a5cf7783272012844a1b565bfe3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\ProyectoWeb\\templates\\Administrador\\Productos.tpl',
      1 => 1646684437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6228c907676620_85284040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">

    <div class="col s11">
        <form method="post" action="?controller=Administrador&method=RegistroProducto">

            <div class="input-field col s11">
                <input id="idMarca" type="text" name="idMarca"/>
                <label for="idMarca">Marca</label>
            </div>
           
           <div class="input-field col s11">
                <input id="idCategoria" type="text" name="idCategoria"/>
                <label for="idCategoria">Categoria</label>
            </div>
           
            <div class="input-field col s11">
                <input id="Nombre" type="text" name="Nombre"/>
                <label for="Nombre">Nombre</label>
            </div>

            <div class="input-field col s11">
                <input id="Descripcion" type="text" name="Descripcion"/>
                <label for="Descripcion">Descripcion</label>
            </div>

            <div class="input-field col s11">
                <input id="Precio" type="number" name="Precio"/>
                <label for="Precio">Precio</label>
            </div>
            
            <div class="input-field col s11">
                <input id="Cantidad" type="number" name="Cantidad"/>
                <label for="Cantidad">Cantidad</label>
            </div>
             
            <div class="row">
                    <div class="input-field col s8 center-align">
                    <input class="waves-effect waves-light btn" type="submit"value="Guardar Producto"/>
            </div>
            </div>
        </form>
    </div>
</div>


</div> 

<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
