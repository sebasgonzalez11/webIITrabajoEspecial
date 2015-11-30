{include file="header.tpl"}
<nav>
  <ul class="nav-justified">
    <li class="logo"><a href="index.php" class="btnnav"><img src="image/logo.png"/></a></li>
  </ul>
</nav>
<div class='nameUser'>
  <p>Bienvenido <b>{$userEmail}</b> <a class="linklogout" id='logout' href='#'><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></p>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="panel-body">
        <table class="table">
          <thead>
            <th colspan="2">Categorias</th>
          </thead>
          <tbody id="tablaCategoria">
            <tr>
              <td>ID</td>
              <td>NOMBRE</td>
            </tr>
            <!--COMPLETA MUSTACHE-->
          </tbody>
        </table>
      </div>

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
        <div class="panel-heading">Modificar Categoría</div>
        <div class="panel-body">
          <form enctype="multipart/form-data">
            <div class="form-group">
              <label for="categoria">Categoría id</label>
              <select id="categoriaIDMod" class="dropdown" name="categoria">
                <!--COMPLETA MUSTACHE-->
                <input type="text" id="modificarCategoria" class="form-control" name="nuevaCategoria" placeholder="Ingrese el nombre de la categoría">
              </div>
              <button type="submit" id="buttonModCategoria" class="btn btn-default">Modificar</button>
            </form>
          </div>
          <div class="panel-footer">
            <div id="alertModCategoria" class="alert" role="alert"></div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">Eliminar Categoría</div>
          <div class="panel-body">
            <form enctype="multipart/form-data">
              <div class="form-group">
                <label for="categoria">Categoría id</label>
                <input type="text" id="deleteCategoria" class="form-control" name="deleteCategoria" placeholder="Ingrese el ID de la categoría">
              </div>
              <button type="submit" id="buttonDelCategoria" class="btn btn-default">Borrar</button>
            </form>
          </div>
          <div class="panel-footer">
            <div id="alertDelCategoria" class="alert" role="alert"></div>
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
              <button type="submit" id="btncrearProducto" class="btn btn-default">Guardar</button>
            </form>
          </div>
          <div class="panel-footer">
            <div id="alertProductoC" class="alert" role="alert"></div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">Modificar Información de Producto</div>
          <div class="panel-body">
            <form enctype="multipart/form-data">
              <div class="form-group">
                <label for="id_p">ID Producto</label>
                <input type="text" class="form-control" name="id_p" id="idM" placeholder="ID Producto" required />
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
              <button type="submit" id='btnModProd' class="btn btn-default">Modificar</button>
            </form>
          </div>
          <div class="panel-footer">
            <div id="alertModProd" class="alert" role="alert"></div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">Eliminar Producto</div>
          <div class="panel-body">
            <form enctype="multipart/form-data">
              <div class="form-group">
                <label for="itemid">Id</label>
                <input type="text"  name="id" class="form-control" id="productoDelete" placeholder="Ingrese el id del Producto">
              </div>
              <button id='btnDeleteProducto' class="btn btn-default">Borrar</button>
            </form>
          </div>
          <div class="panel-footer">
            <div id="alertDeleteProducto" class="alert" role="alert"></div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="panel-body">
          <table class="table">
            <thead>
              <th colspan="4">Productos</th>
              <tr>
                <td>ID</td>
                <td>NOMBRE</td>
                <td>PRECIO</td>
                <td>CATEGORIA</td>
              </tr>
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
  <script src="js/producto.js"></script>
  <script src="js/categoria.js"></script>
  <script src="js/logout.js"></script>
</body>
