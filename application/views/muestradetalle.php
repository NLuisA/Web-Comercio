  <body id="fondoMuestraDEtalles">
  <section class="mbr-section article content12 cid-qRlf4ndxBK" id="content12-m">
       <div class="container">
	<div class="well">
	<br>       
     <?php if (!$ventas_detalle) { ?>

	<div class="container">
		<div class="well">
			<h1 style="color: yellow;">No se realizaron Ventas</h1>
            <hr>
		</div>
		
	</div>

<?php } else { ?>                  
<div class="container mt-5 pt-5">
	<div class="well">
        <br>
		<h1><b style="color: yellow;">Detalle de Ventas</b></h1>
        <hr>
	</div>	
	<br>
	<table class="table table-bordered">
		<thead>
			<tr style="color: yellow;">
				<th>id producto </th>
              	<th>Descripción</th>
				<th>Cantidad</th>
				<th>Precio Unitario</th>
				<th>Sub Total</th>
				
			</tr>

		</thead>

		<tbody>
			<?php 
				$total=0;
				$subtotal=0;
			foreach($ventas_detalle->result() as $row){ ?>

			<tr style="color: white;">
                <td><?php echo $row->id;  ?></td>
				<td><?php echo $row->descripcion;  ?></td>
				<td><?php echo $row->cantidad;  ?></td>
				<td><?php echo $row->precio;  ?></td>
                <td>$<?php echo $row->precio * $row->cantidad; ?></td>
              	<?php 	$subtotal=$row->precio * $row->cantidad ; 	
              	$total=$total+$subtotal;
              	; ?> 
			</tr> 
            
			<?php } ?>
		</tbody>
		
		<?php } ?>
	</table>
<p style="color:yellow">Total:------------------------------------------------------------------------------------------------------------------------------------------------- $<?php echo $total;?></p>
	
</div>	            
	 <br>
</div>
</section>
