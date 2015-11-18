<?php /* Smarty version 3.1.24, created on 2015-11-18 01:27:51
         compiled from "./templates/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1934440540564bc607790587_71986486%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a028bcb59d127f86839af05f2968269d99e65874' => 
    array (
      0 => './templates/nav.tpl',
      1 => 1446064665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1934440540564bc607790587_71986486',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_564bc607793ea7_88125892',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564bc607793ea7_88125892')) {
function content_564bc607793ea7_88125892 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1934440540564bc607790587_71986486';
?>
<nav>
  <ul class="nav-justified">
    <!-- Single button -->
    <li class="dropdown">
      <a href="" class="dropdown-toggle btnnav" data-toggle="dropdown" > <i class="fa fa-lg fa-user"></i></a>
      <div class="dropdown-menu">
        <form action="index.php?action=formLogin" method="POST" class="form container-fluid">
          <div class="form-group">
            <input class="form-control" name="username" id="username"  type="text" placeholder="Usuario" required>
          </div>
          <div class="form-group">
            <input class="form-control" name="password" id="password" type="password" placeholder="Password" required>
          </div>
          <button type="submit" class="btn btn-block">Entrar</button>
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