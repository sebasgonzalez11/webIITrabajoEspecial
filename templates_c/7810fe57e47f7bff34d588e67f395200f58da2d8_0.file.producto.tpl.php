<?php /* Smarty version 3.1.24, created on 2015-11-29 02:02:10
         compiled from "./templates/producto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:537173237565a4e92c65803_04252232%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7810fe57e47f7bff34d588e67f395200f58da2d8' => 
    array (
      0 => './templates/producto.tpl',
      1 => 1448758925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '537173237565a4e92c65803_04252232',
  'variables' => 
  array (
    'categorias' => 0,
    'cate' => 0,
    'productos' => 0,
    'prod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565a4e92c9e3d0_05188028',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565a4e92c9e3d0_05188028')) {
function content_565a4e92c9e3d0_05188028 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '537173237565a4e92c65803_04252232';
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
			<option value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cate']->value['categoria'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['cate'] = $foreach_cate_Sav;
}
?>
		</select>
</section>
<div class="col-md-6">
	<section>
		<table class="table productos">
			<thead>
				<th colspan="1">Nuestros productos</th>
			</thead>
			<tbody id="cargarProducto">
				<tr>
					<td>Nombre</td>
				</tr>
				<?php if (count($_smarty_tpl->tpl_vars['productos']->value) == 0) {?>
					<td>No hay Productos en la categoria seleccionada</td>
				<?php }?>
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
					<td><a prodid="<?php echo $_smarty_tpl->tpl_vars['prod']->value['id'];?>
" href="#" id="getProducto"><?php echo $_smarty_tpl->tpl_vars['prod']->value['nombre'];?>
</a></td>
				</tr>
				<?php
$_smarty_tpl->tpl_vars['prod'] = $foreach_prod_Sav;
}
?>
			</tbody>
		</table>
	</section>
</div>
<div class="col-md-6">
	<section id="boxDetalle">

	</section>
</div>
<?php echo '<script'; ?>
 src="js/seccionProducto.js"><?php echo '</script'; ?>
>
<?php }
}
?>