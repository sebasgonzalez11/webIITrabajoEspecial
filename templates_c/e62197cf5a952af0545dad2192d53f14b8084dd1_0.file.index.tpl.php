<?php /* Smarty version 3.1.24, created on 2015-09-29 00:04:03
         compiled from "./templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12552194425609b953e6ded1_21824261%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e62197cf5a952af0545dad2192d53f14b8084dd1' => 
    array (
      0 => './templates/index.tpl',
      1 => 1443470048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12552194425609b953e6ded1_21824261',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5609b953e95591_29684632',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5609b953e95591_29684632')) {
function content_5609b953e95591_29684632 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12552194425609b953e6ded1_21824261';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>