<body id="fondoMuestraConsultasEliminadas">
<?php if (!$contactos) { ?>

	<div class="container">
		<div class="well">
			<h1 style="color: yellow;">No hay Eliminados</h1>
		</div>	
	</div>

<?php } else { ?>

	<div class="container">
		<div class="well">
			<h1 style="color: yellow;">Todos los Eliminados</h1>
		</div>	

		<table class="table table-bordered">
			<thead>
				<tr style="color: yellow;">
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Email</th>
					<th>Telefono</th>
					<th>Provincia</th>
					<th>Localidad</th>
					<th>Descripcion</th>
					<th>Eliminado</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($contactos->result() as $row){ ?>
				<tr style="color: white;">
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->nombre;  ?></td>
					<td><?php echo $row->apellido;  ?></td>
					<td><?php echo $row->email;  ?></td>
					<td><?php echo $row->telefono;  ?></td>
					<td><?php echo $row->provincia;  ?></td>
					<td><?php echo $row->localidad;  ?></td>
					<td><?php echo $row->descripcion;  ?></td>
					<td><?php echo $row->eliminado;  ?></td>
					<td><a href="<?php echo base_url("contacto_activa/$row->id");?>">Activar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>	            
	</div>

<?php } ?>