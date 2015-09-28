<?php /* Smarty version 3.1.24, created on 2015-09-28 20:41:29
         compiled from "./templates/panel.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1192088352560989d9448f61_60625360%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b8cf4d98821222955ba233257b826fe95266557' => 
    array (
      0 => './templates/panel.tpl',
      1 => 1443465294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1192088352560989d9448f61_60625360',
  'variables' => 
  array (
    'categorias' => 0,
    'cate' => 0,
    'productos' => 0,
    'p' => 0,
    'errores' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560989d9484f67_89596617',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560989d9484f67_89596617')) {
function content_560989d9484f67_89596617 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1192088352560989d9448f61_60625360';
?>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Agregar Categoría</div>
          <div class="panel-body">
            <form action="index.php?action=nuevaCategoria" method="post">
            <div class="form-group">
              <label for="itemid">Categoría</label>
              <input type="text"  class="form-control" name="nuevaCategoria" placeholder="Ingrese el nombre de la categoría">
            </div>
            <button type="submit" class="btn btn-default">Crear</button>
            </form>
          </div>

        <div class="panel-footer">
          <div id="infoNuevaCategoria" class="alert" role="alert">
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Crear Información de Producto</div>
        <div class="panel-body">
          <form action="index.php?action=nuevoProducto" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required />
            </div>
            <div class="form-group">
              <label for="descripcion">Descripción</label>
              <input class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion" required >
            </div>
            <div class="form-group">
              <label for="precio">Precio</label>
              <input class="form-control" name="precio" id="precio" placeholder="Usar ' . ' como divisor" required >
            </div>
            <div class="form-group">
              <label for="imagen">Imagen</label>
              <input type="file" name="imagen" id="imagen" accept="imagen" />
            </div>
            <select class="dropdown" name="categoria">
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
            <button type="submit" class="btn btn-default">Guardar</button>
          </form>
        </div>
        <div class="panel-footer">
          <div id="guardarAlert" class="alert" role="alert"></div>
        </div>
      </div>


      <div class="panel panel-default">
        <div class="panel-heading">Eliminar Producto</div>
        <div class="panel-body">
          <div class="form-group">
            <label for="itemid">Id</label>
            <input type="text"  class="form-control" id="productoDelete" placeholder="Ingrese el id del Producto">
          </div>
          <button class="btn btn-default" onClick="">Borrar</button>
        </div>
        <div class="panel-footer">
          <div id="infoItemDelete" class="alert" role="alert"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel-body">
        <table class="table">
          <thead>
            <th colspan="3">Productos</th>
          </thead>
          <tbody>
            <tr>
              <td>ID</td>
              <td>NOMBRE</td>
              <td>PRECIO</td>
              <td>CATEGORIA</td>
            </tr>
            <?php
$_from = $_smarty_tpl->tpl_vars['productos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['p']->value['precio'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['p']->value['categoria'];?>
</td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div>
  <div class="panel-body">
    <table class="table">
      <thead>
        <th colspan="3">Errores</th>
      </thead>
      <tbody>
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
        <tr>
          <td class="alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</td>
        </tr>
        <?php
$_smarty_tpl->tpl_vars['error'] = $foreach_error_Sav;
}
?>
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/information.js"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>