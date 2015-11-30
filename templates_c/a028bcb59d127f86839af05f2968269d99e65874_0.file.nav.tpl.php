<?php /* Smarty version 3.1.24, created on 2015-11-29 02:00:38
         compiled from "./templates/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1364960580565a4e36032ac0_72211154%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a028bcb59d127f86839af05f2968269d99e65874' => 
    array (
      0 => './templates/nav.tpl',
      1 => 1448757528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1364960580565a4e36032ac0_72211154',
  'variables' => 
  array (
    'errores' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565a4e3603e370_80259906',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565a4e3603e370_80259906')) {
function content_565a4e3603e370_80259906 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1364960580565a4e36032ac0_72211154';
?>
<nav>
  <ul class="nav-justified">
    <li class="dropdown">
      <a href="" class="dropdown-toggle btnnav" data-toggle="dropdown" > <i class="fa fa-lg fa-user"></i></a>
      <div class="dropdown-menu">
        <form enctype="multipart/form-data" class="form container-fluid">
          <div class="form-group">
            <input class="form-control" name="username" id="username"  type="text" placeholder="Usuario" required>
          </div>
          <div class="form-group">
            <input class="form-control" name="password" id="password" type="password" placeholder="Password" required>
          </div>
          <?php if (count($_smarty_tpl->tpl_vars['errores']->value) > 0) {?>
            <div id='error' class="alert alert-danger" role="alert">
              <?php
$_from = $_smarty_tpl->tpl_vars['errores']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
$foreach_error_Sav = $_smarty_tpl->tpl_vars['error'];
?>
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                <?php
$_smarty_tpl->tpl_vars['error'] = $foreach_error_Sav;
}
?>
            </div>
          <?php }?>
          <button type="submit" id="login" class="btn btn-block">Entrar</button>
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