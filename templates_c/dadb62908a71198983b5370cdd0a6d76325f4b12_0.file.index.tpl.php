<?php /* Smarty version 3.1.24, created on 2015-11-29 02:00:38
         compiled from "./templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1610731088565a4e36008b64_39658501%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dadb62908a71198983b5370cdd0a6d76325f4b12' => 
    array (
      0 => './templates/index.tpl',
      1 => 1448746154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1610731088565a4e36008b64_39658501',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565a4e3602a360_21114946',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565a4e3602a360_21114946')) {
function content_565a4e3602a360_21114946 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1610731088565a4e36008b64_39658501';
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