
<body id="fondoConsultas">
<?php if (!$consultas) { ?>

	<div class="container">
		<div class="well">
			<h1 style="color:yellow">No hay Consultas</h1>
		</div>
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
			
			<a type="button" class="btn btn-danger" href="<?php echo base_url('muestra_eliminadosConsulta'); ?>">ELIMINADOS</a>
			<br> <br>
		<?php } ?>
	</div>

<?php } else { ?>

	<div class="container" id="tablaProd">
		<div class="well">
			<h1 style="color: yellow;">Todas las Consultas</h1>
		</div>
		
		<a type="button" class="btn btn-danger" href="<?php echo base_url('muestra_eliminadosConsulta'); ?>">ELIMINADOS</a>
		<br> <br>
		<table class="table table-bordered ">
			<thead>
				<tr style="color: yellow;">
					<th>ID</th>
					<th >Nombre</th>
					<th>Apellido</th>
					<th>Email</th>
					<th>Telefono</th>
					<th>Provincia</th>
					<th>Localidad</th>
					<th>Descripcion</th>
					<th>Fecha</th>
					<th>Eliminado</th>

				</tr>
			</thead>
			<tbody>
				<?php foreach($consultas->result() as $row){ ?>
				<tr style="color: white;">
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->nombre;  ?></td>
					<td><?php echo $row->apellido;  ?></td>
					<td><?php echo $row->email;  ?></td>
					<td><?php echo $row->telefono;  ?></td>
					<td><?php echo $row->provincia;  ?></td>
					<td><?php echo $row->localidad;  ?></td>
					<td><?php echo $row->descripcion;  ?></td>
					<td><?php echo $row->fecha;  ?></td>
					<td><?php echo $row->eliminado;  ?></td>
					<td><a href="<?php echo base_url("consulta_elimina/$row->id");?>">Eliminar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

<?php } ?>
