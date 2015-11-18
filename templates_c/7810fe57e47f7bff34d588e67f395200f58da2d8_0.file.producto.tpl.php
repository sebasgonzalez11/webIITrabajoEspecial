<?php /* Smarty version 3.1.24, created on 2015-11-18 01:53:46
         compiled from "./templates/producto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1784395905564bcc1a1b03e6_04473665%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7810fe57e47f7bff34d588e67f395200f58da2d8' => 
    array (
      0 => './templates/producto.tpl',
      1 => 1447808016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1784395905564bcc1a1b03e6_04473665',
  'variables' => 
  array (
    'categorias' => 0,
    'cate' => 0,
    'productos' => 0,
    'prod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_564bcc1a1e1df7_72719054',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564bcc1a1e1df7_72719054')) {
function content_564bcc1a1e1df7_72719054 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1784395905564bcc1a1b03e6_04473665';
?>
<section>
	<div class="seleccionCategoria">
		<p>Seleccione una categoria para filtrar los productos:</p>
	</div>
		<select id="seleccionCategoria" class="dropdown" name="categoria">
			<option value="*">Todos</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cate']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->_loop = true;
$foreach_cate_Sav = $_smarty_tpl->tpl_vars['cate'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['cate']->value['categoria'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['cate'] = $foreach_cate_Sav;
}
?>
		</select>
	<table class="table productos">
		<thead>
			<th colspan="5">Nuestros productos</th>
		</thead>
		<tbody id="cargarProducto">
			<tr>
				<td>Nombre</td>
				<td>Descripción</td>
				<td>Precio</td>
				<td>Foto</td>
				<td>Categoria</td>
			</tr>
			<?php
$_from = $_smarty_tpl->tpl_vars['productos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['prod'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['prod']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->_loop = true;
$foreach_prod_Sav = $_smarty_tpl->tpl_vars['prod'];
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['prod']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['prod']->value['descripcion'];?>
</td>
				<td>$<?php echo $_smarty_tpl->tpl_vars['prod']->value['precio'];?>
</td>
				<td><img src="<?php echo $_smarty_tpl->tpl_vars['prod']->value['imagen'];?>
" alt="imagenProducto"/></td>
				<td><?php echo $_smarty_tpl->tpl_vars['prod']->value['categoria'];?>
</td>
			</tr>
			<?php
$_smarty_tpl->tpl_vars['prod'] = $foreach_prod_Sav;
}
?>
		</tbody>
	</table>
</section>
<?php echo '<script'; ?>
 src="js/seleccionCategoria.js"><?php echo '</script'; ?>
>
<?php }
}
?>