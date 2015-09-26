
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
              {foreach key=key item=item from=$categorias}
                <option value="{$item.categoria}">{$item.categoria}</option>
              {/foreach}
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
  <script src="js/bootstrap.min.js"></script>
  <script src="js/information.js"></script>
  {include file="footer.tpl"}
