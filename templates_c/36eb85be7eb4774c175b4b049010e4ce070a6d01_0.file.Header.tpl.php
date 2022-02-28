<?php
/* Smarty version 4.0.4, created on 2022-02-28 04:56:46
  from 'C:\xampp\htdocs\ProyectoWeb\ProyectoWeb\Templates\Cabeceras\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_621c47fe212462_17570321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36eb85be7eb4774c175b4b049010e4ce070a6d01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoWeb\\ProyectoWeb\\Templates\\Cabeceras\\Header.tpl',
      1 => 1646020196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621c47fe212462_17570321 (Smarty_Internal_Template $_smarty_tpl) {
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
