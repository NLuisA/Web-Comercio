<body id="fondoMuestraUsuarios">
<?php if (!$usuarios) { ?>

	<div class="container">
		<div class="well">
			<h1 style="color: yellow;" >No hay Usuarios</h1>
		</div>
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
			
			<a type="button" class="btn btn-danger" href="<?php echo base_url('muestra_eliminadosUsuario'); ?>">ELIMINADOS</a>
			<br> <br>
		<?php } ?>
	</div>

<?php } else { ?>

	<div class="container" id="tablaProd">
		<div class="well">
			<h1 style="color: yellow;">Todos los Usuarios</h1>
		</div>
		
		<a type="button" class="btn btn-danger" href="<?php echo base_url('muestra_eliminadosUsuario'); ?>">ELIMINADOS</a>
		<br> <br>
		<table class="table table-bordered ">
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
				<tr style="color: white;">
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->nombre;  ?></td>
					<td><?php echo $row->apellido;  ?></td>
					<td><?php echo $row->email;  ?></td>
					<td><?php echo $row->baja;  ?></td>
					<td><a href="<?php echo base_url("usuario_elimina/$row->id");?>">Eliminar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

<?php } ?>
