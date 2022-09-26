<body id="fondoProductos">
<?php if (!$productos) { ?>

	<div class="container">
		<div class="well">
			<h1 >No hay Productos</h1>
		</div>
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
			<a type="button" class="btn btn-success" href="<?php echo base_url('agrega_producto'); ?>">Agregar</a>
			<a type="button" class="btn btn-danger" href="<?php echo base_url('muestra_eliminados'); ?>">ELIMINADOS</a>
			<br> <br>
		<?php } ?>
	</div>

<?php } else { ?>

	<div class="container" id="tablaProd">
		<div class="well">
			<h1 style="color: yellow;">Todos los Productos</h1>
		</div>
		<a type="button" class="btn btn-success" href="<?php echo base_url('agrega_producto'); ?>">Agregar</a>
		<a type="button" class="btn btn-danger" href="<?php echo base_url('muestra_eliminados'); ?>">ELIMINADOS</a>
		<br> <br>
		<table class="table table-bordered ">
			<thead>
				<tr style="color: yellow;">
					<th>ID</th>
					<th>Descripcion</th>
					<th>Categoria</th>
					<th>Precio Venta</th>
					<th>Stock</th>
					<th>Eliminado</th>
					<th>Modificar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos->result() as $row){ ?>
				<tr style="color: white;">
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->descripcion;  ?></td>
					<td><?php   switch ($row->categoria_id) {
								    case 1:
								        echo "Cuerdas";
								        break;
								    case 2:
								        echo "Percusion";
								        break;
								    case 3:
								        echo "Vientos";
								        break;
								}
					 ?></td>
					<td><?php echo $row->precio_venta;  ?></td>
					<td><?php echo $row->stock;  ?></td>
					<td><?php echo $row->eliminado;  ?></td>
					<td><a href="<?php echo base_url("productos_modifica/$row->id");?>">Modificar</a>|<a href="<?php echo base_url("productos_elimina/$row->id");?>">Eliminar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

<?php } ?>
