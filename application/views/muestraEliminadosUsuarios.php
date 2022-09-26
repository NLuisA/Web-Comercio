<body id="fondoMuestraUsuariosEliminados">
<?php if (!$usuarios) { ?>

	<div class="container">
		<div class="well">
			<h1  style="color: yellow;"> No hay Eliminados</h1>
		</div>	
	</div>

<?php } else { ?>

	<div class="container">
		<div class="well">
			<h1  style="color: yellow;">Todos los Eliminados</h1>
		</div>	

		<table class="table table-bordered">
			<thead>
				<tr  style="color: yellow;">
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Email</th>
					<th>Eliminado</th>
					<th>Modificar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($usuarios->result() as $row){ ?>
				<tr  style="color: white;">
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->nombre;  ?></td>
					<td><?php echo $row->apellido;  ?></td>
					<td><?php echo $row->email;  ?></td>
					<td><?php echo $row->baja;  ?></td>
					<td><a href="<?php echo base_url("usuarios_activa/$row->id");?>">Activar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>	            
	</div>

<?php } ?>