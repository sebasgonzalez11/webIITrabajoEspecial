{include file="header.tpl"}
{include file="nav.tpl"}
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Agregar Categoría</div>
        <div class="panel-body">
          <form id="formulario" action="index.php?action=nuevaCategoria" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="categoria">Categoría</label>
              <input type="text"  class="form-control" name="nuevaCategoria" placeholder="Ingrese el nombre de la categoría">
            </div>
            <button type="submit" class="btn btn-default">Crear</button>
          </form>
        </div>
        <div class="panel-footer">
          <div class="alert" role="alert"></div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Crear Información de Producto</div>
        <div class="panel-body">
          <form id="formulario" action="index.php?action=nuevoProducto" method="POST" enctype="multipart/form-data">
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
              {foreach from=$categorias item=cate}
              <option value="{$cate['categoria']}">{$cate['categoria']}</option>
              {/foreach}
            </select>
            <button type="submit" class="btn btn-default">Guardar</button>
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
              {foreach from=$recategorias item=categ}
              <option value="{$categ['categoria']}">{$categ['categoria']}</option>
              {/foreach}
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
          <tbody>
            <tr>
              <td>ID</td>
              <td>NOMBRE</td>
              <td>PRECIO</td>
              <td>CATEGORIA</td>
            </tr>
            {foreach from=$productos item=p}
            <tr>
              <td>{$p['id']}</td>
              <td>{$p['nombre']}</td>
              <td>{$p['precio']}</td>
              <td>{$p['categoria']}</td>
            </tr>
            {/foreach}
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
          {foreach $errores as $error}
          <tr>
            <td class="alert-danger">{$error}</td>
          </tr>
          {/foreach}
        </tbody>
      </table>
    </div>
  </div>
</div>

{include file="footer.tpl"}
{include file="script.tpl"}
