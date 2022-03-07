<?php
/* Smarty version 4.0.4, created on 2022-02-28 19:55:08
  from 'C:\xampp\htdocs\ProyectoWeb\templates\Cabeceras\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_621d1a8cdf7a66_53659533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c18f667fc8bcd456851382d43e65fa3b5f026d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\templates\\Cabeceras\\Header.tpl',
      1 => 1646074340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621d1a8cdf7a66_53659533 (Smarty_Internal_Template $_smarty_tpl) {
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
