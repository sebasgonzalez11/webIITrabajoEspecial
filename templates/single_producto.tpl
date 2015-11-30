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
      <td>{$producto['nombre']}</td>
      <td>{$producto['descripcion']}</td>
      <td>${$producto['precio']}</td>
      <td><img src="{$producto['imagen']}" alt="imagenProducto{$producto['id']}"/></td>
      <td>{$producto['categoria']}</td>
    </tr>
  </tbody>
</table>
