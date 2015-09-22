<?php /* Smarty version 3.1.24, created on 2015-09-23 00:56:27
         compiled from "./templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:978882575601dc9bc980e3_96273169%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7212e2f328e6c62fe89915046fb82fe40971155d' => 
    array (
      0 => './templates/header.tpl',
      1 => 1442959103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '978882575601dc9bc980e3_96273169',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5601dc9bcbfb39_50723463',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5601dc9bcbfb39_50723463')) {
function content_5601dc9bcbfb39_50723463 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '978882575601dc9bc980e3_96273169';
?>
<!DOCTYPE html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>Dadant</title>
   <!--Google Font-->
   <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

   <!-- Bootstrap -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/body.css" rel="stylesheet">

   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
   <![endif]-->
 </head>
  <body>
      <nav>
        <ul class="nav-justified">
          <!-- Single button -->
          <li class="dropdown">
            <a href="" class="dropdown-toggle btnnav" data-toggle="dropdown" > <i class="fa fa-lg fa-user"></i></a>
            <div class="dropdown-menu">
              <form id="formLogin" class="form container-fluid">
                <div class="form-group">
                	<input class="form-control" name="username" id="name" type="text" placeholder="Usuario">
                </div>
                <div class="form-group">
                	<input class="form-control" name="password" id="pass" type="password" placeholder="Password">
                  <p id="incorrecto"></p>
                </div>
              <button type="button" id="datos" class="btn btn-block">Entrar</button>
            </div>
          </li>
          <li class="logo"><img src="image/logo.png"/></li>
          <li><a href="#" class="btnnav" id="home">Home</a></li>
          <li><a href="#" class="btnnav" id="nosotros">Nosotros</a></li>
          <li><a href="#" class="btnnav" id="productos">Productos</a></li>
          <li><a href="#" class="btnnav" id="contacto">Contacto</a></li>
        </ul>
      </nav>
      <div id="contenedor">
<?php echo $_smarty_tpl->getSubTemplate ("home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

      </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>