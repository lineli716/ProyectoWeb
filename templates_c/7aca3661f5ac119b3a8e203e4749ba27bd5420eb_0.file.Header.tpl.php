<?php
/* Smarty version 4.0.4, created on 2022-02-21 20:42:15
  from 'C:\xampp\htdocs\ProyectoWeb\ProyectoWeb\templates\Cabeceras\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6213eb172171f6_63746823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7aca3661f5ac119b3a8e203e4749ba27bd5420eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\ProyectoWeb\\templates\\Cabeceras\\Header.tpl',
      1 => 1645472175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6213eb172171f6_63746823 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
   <title>
      <?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

      <?php } else { ?>
        Inicio de Sesión
      <?php }?>
      </title>
    <body>
<?php }
}
