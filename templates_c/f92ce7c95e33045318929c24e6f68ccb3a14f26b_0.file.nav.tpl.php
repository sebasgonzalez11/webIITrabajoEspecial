<?php /* Smarty version 3.1.24, created on 2015-09-29 00:04:03
         compiled from "./templates/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3229001345609b953ea0986_67466291%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f92ce7c95e33045318929c24e6f68ccb3a14f26b' => 
    array (
      0 => './templates/nav.tpl',
      1 => 1443472484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3229001345609b953ea0986_67466291',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5609b953ea5d11_92054833',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5609b953ea5d11_92054833')) {
function content_5609b953ea5d11_92054833 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3229001345609b953ea0986_67466291';
?>
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
        </form>
      </div>
    </li>
    <li class="logo"><img src="image/logo.png"/></li>
    <li><a href="#" class="btnnav" id="home">Home</a></li>
    <li><a href="#" class="btnnav" id="nosotros">Nosotros</a></li>
    <li><a href="#" class="btnnav" id="productos">Productos</a></li>
    <li><a href="#" class="btnnav" id="contacto">Contacto</a></li>
  </ul>
</nav>
<?php }
}
?>