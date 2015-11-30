<section>
	<div class="seleccionCategoria">
		<p>Seleccione una categoria para filtrar los productos:</p>
	</div>
		<select id="seleccionCategoria" class="dropdown" name="categoria">
			<option value="*">Todos</option>
			{foreach from=$categorias item=cate}
			<option value="{$cate['id']}">{$cate['categoria']}</option>
			{/foreach}
		</select>
</section>
<div class="col-md-6">
	<section>
		<table class="table productos">
			<thead>
				<th colspan="1">Nuestros productos</th>
			</thead>
			<tbody id="cargarProducto">
				<tr>
					<td>Nombre</td>
				</tr>
				{if count($productos) eq 0}
					<td>No hay Productos en la categoria seleccionada</td>
				{/if}
				{foreach from=$productos item=prod}
				<tr>
					<td><a prodid="{$prod['id']}" href="#" id="getProducto">{$prod['nombre']}</a></td>
				</tr>
				{/foreach}
			</tbody>
		</table>
	</section>
</div>
<div class="col-md-6">
	<section id="boxDetalle">

	</section>
</div>
<script src="js/seccionProducto.js"></script>
