<?php /* Smarty version 3.1.24, created on 2015-11-29 01:58:13
         compiled from "./templates/single_producto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:906758395565a4da57509f1_23767110%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd29eef1523a7f464c99e0b136f85a501c5106e2b' => 
    array (
      0 => './templates/single_producto.tpl',
      1 => 1448754818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '906758395565a4da57509f1_23767110',
  'variables' => 
  array (
    'producto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565a4da577ce54_87492787',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565a4da577ce54_87492787')) {
function content_565a4da577ce54_87492787 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '906758395565a4da57509f1_23767110';
?>
<table class="table productos">
  <thead>
    <th colspan="5">Detalle</th>
  </thead>
  <tbody id="detalleProducto">
    <tr>
      <td>Nombre</td>
      <td>Descripción</td>
      <td>Precio</td>
      <td>Foto</td>
      <td>Categoria</td>
    </tr>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</td>
      <td>$<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</td>
      <td><img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value['imagen'];?>
" alt="imagenProducto<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
"/></td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['categoria'];?>
</td>
    </tr>
  </tbody>
</table>
<?php }
}
?>