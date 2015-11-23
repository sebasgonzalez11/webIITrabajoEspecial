<?php /* Smarty version 3.1.24, created on 2015-11-19 15:24:44
         compiled from "./templates/panel.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:133900068564ddbac0a2486_64662946%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90b13952cbdecaed32676c4a60fb57ea8d6de525' => 
    array (
      0 => './templates/panel.tpl',
      1 => 1447942954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133900068564ddbac0a2486_64662946',
  'variables' => 
  array (
    'errores' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_564ddbac0d0330_91126674',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564ddbac0d0330_91126674')) {
function content_564ddbac0d0330_91126674 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '133900068564ddbac0a2486_64662946';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<nav>
  <ul class="nav-justified">
    <li class="logo"><a href="index.php" class="btnnav"><img src="image/logo.png"/></a></li>
  </ul>
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Agregar Categoría</div>
        <div class="panel-body">
          <form enctype="multipart/form-data">
            <div class="form-group">
              <label for="categoria">Categoría</label>
              <input type="text" id="nuevaCategoria" class="form-control" name="nuevaCategoria" placeholder="Ingrese el nombre de la categoría">
            </div>
            <button type="submit" id="addCategoria" class="btn btn-default">Crear</button>
          </form>
        </div>
        <div class="panel-footer">
          <div id="alertCategoria" class="alert" role="alert"></div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Crear Información de Producto</div>
        <div class="panel-body">
          <form  enctype="multipart/form-data">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombreC" placeholder="Nombre" required />
            </div>
            <div class="form-group">
              <label for="descripcion">Descripción</label>
              <input class="form-control" name="descripcion" id="descripcionC" placeholder="Descripcion" required >
            </div>
            <div class="form-group">
              <label for="precio">Precio</label>
              <input class="form-control" name="precio" id="precioC" placeholder="Usar ' . ' como divisor" required >
            </div>
            <div class="form-group">
              <label for="imagen">Imagen</label>
              <input type="file" name="imagen" id="imagenC" accept="imagen" />
            </div>
            <select id="selectCategoriaC" class="dropdown" name="categoria">
              <!--COMPLETA MUSTACHE-->
            </select>
            <button type="submit" id="crearProducto" class="btn btn-default">Guardar</button>
          </form>
        </div>
        <div class="panel-footer">
          <div id="info" class="alert" role="alert"></div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Modificar Información de Producto</div>
        <div class="panel-body">
          <form id="formulario" action="index.php?action=updateProducto" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="id_p">ID Producto</label>
              <input type="text" class="form-control" name="id_p" id="id_p" placeholder="ID Producto" required />
            </div>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombreM" placeholder="Nombre" required />
            </div>
            <div class="form-group">
              <label for="descripcion">Descripción</label>
              <input class="form-control" name="descripcion" id="descripcionM" placeholder="Descripcion" required >
            </div>
            <div class="form-group">
              <label for="precio">Precio</label>
              <input class="form-control" name="precio" id="precioM" placeholder="Usar ' . ' como divisor" required >
            </div>
            <div class="form-group">
              <label for="imagen">Imagen</label>
              <input type="file" name="imagen" id="imagenM" accept="imagen" />
            </div>
            <select id="selectCategoriaM" class="dropdown" name="categoria">
                <!--COMPLETA MUSTACHE-->
            </select>
            <button type="submit" class="btn btn-default">Modificar</button>
          </form>
        </div>
        <div class="panel-footer">
          <div id="info" class="alert" role="alert"></div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Eliminar Producto</div>
        <div class="panel-body">
          <form id="formulario" action="index.php?action=deleteProducto" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="itemid">Id</label>
              <input type="text"  name="id" class="form-control" id="productoDelete" placeholder="Ingrese el id del Producto">
            </div>
            <button class="btn btn-default">Borrar</button>
          </form>
        </div>
        <div class="panel-footer">
          <div id="info" class="alert" role="alert"></div>
        </div>
      </div>
    </div>


    <div class="col-md-6">
      <div class="panel-body">
        <table class="table">
          <thead>
            <th colspan="3">Productos</th>
          </thead>
          <tbody id="tablaProductos">
          <!--COMPLETA MUSTACHE-->
          </tbody>
        </table>
      </div>
    </div>

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
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.1.3/mustache.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/panel.js"><?php echo '</script'; ?>
>
</body>
<?php }
}
?>