<?php /* Smarty version 3.1.24, created on 2015-11-18 02:07:32
         compiled from "./templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:671521341564bcf54699928_67965048%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dadb62908a71198983b5370cdd0a6d76325f4b12' => 
    array (
      0 => './templates/index.tpl',
      1 => 1443704940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '671521341564bcf54699928_67965048',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_564bcf546bf6f9_50941842',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564bcf546bf6f9_50941842')) {
function content_564bcf546bf6f9_50941842 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '671521341564bcf54699928_67965048';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div id="contenedor">
<?php echo $_smarty_tpl->getSubTemplate ("home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>