<?php /* Smarty version 3.1.24, created on 2015-09-26 20:57:31
         compiled from "./templates/panel.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3388756885606ea9bb1ccd5_84534275%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b8cf4d98821222955ba233257b826fe95266557' => 
    array (
      0 => './templates/panel.tpl',
      1 => 1443293823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3388756885606ea9bb1ccd5_84534275',
  'variables' => 
  array (
    'categorias' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5606ea9bb58e44_86185778',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5606ea9bb58e44_86185778')) {
function content_5606ea9bb58e44_86185778 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3388756885606ea9bb1ccd5_84534275';
?>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Consultar Información de Productos</div>
        <div class="panel-body">
          <button class="btn btn-default" onClick="">Mostrar</button>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Agregar Categoría</div>
        <form id="formulario" action="index.php?action=nuevaCategoria">
          <div class="panel-body">
            <div class="form-group">
              <label for="itemid">Categoría</label>
              <input type="text"  class="form-control" name="nuevaCategoria" placeholder="Ingrese el nombre de la categoría">
            </div>
            <button type="submit" class="btn btn-default">Crear</button>
          </div>
        </form>
        <div class="panel-footer">
          <div id="infoNuevaCategoria" class="alert" role="alert">

          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Crear Información de Producto</div>
        <div class="panel-body">
          <form>
            <div class="form-group">
              <label for="grupo">Nombre</label>
              <input type="text" class="form-control" id="nombre" placeholder="Nombre" required />
            </div>
            <div class="form-group">
              <label for="descripcion">Descripción</label>
              <input class="form-control" id="descripcion" placeholder="Descripcion" required >
            </div>
            <div class="form-group">
              <label for="precio">Precio</label>
              <input class="form-control" id="precio" placeholder="Usar ' . ' como divisor" required >
            </div>
            <div class="form-group">
              <label for="imagesToUpload">Imagenes</label>
              <input type="file" name="imagenProducto" id="imagenProducto" required/>
            </div>
            <select class="dropdown" name="categoria">
              <?php
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['categoria'];?>
</option>
              <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
            </select>
            <button id="guardarInformacion" type="submit" class="btn btn-default">Guardar</button>
          </div>
        </form>
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
      <p id="infoGroup"></p>
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