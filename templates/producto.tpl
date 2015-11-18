<section>
	<div class="seleccionCategoria">
		<p>Seleccione una categoria para filtrar los productos:</p>
	</div>
		<select id="seleccionCategoria" class="dropdown" name="categoria">
			<option value="*">Todos</option>
			{foreach from=$categorias item=cate}
			<option value="{$cate['categoria']}">{$cate['categoria']}</option>
			{/foreach}
		</select>
	<table class="table productos">
		<thead>
			<th colspan="5">Nuestros productos</th>
		</thead>
		<tbody id="cargarProducto">
			<tr>
				<td>Nombre</td>
				<td>Descripción</td>
				<td>Precio</td>
				<td>Foto</td>
				<td>Categoria</td>
			</tr>
			{foreach from=$productos item=prod}
			<tr>
				<td>{$prod['nombre']}</td>
				<td>{$prod['descripcion']}</td>
				<td>${$prod['precio']}</td>
				<td><img src="{$prod['imagen']}" alt="imagenProducto"/></td>
				<td>{$prod['categoria']}</td>
			</tr>
			{/foreach}
		</tbody>
	</table>
</section>
<script src="js/seleccionCategoria.js"></script>
