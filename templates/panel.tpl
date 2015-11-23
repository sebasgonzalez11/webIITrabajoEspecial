{include file="header.tpl"}
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.1.3/mustache.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/panel.js"></script>
</body>
