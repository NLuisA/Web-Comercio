<body id="fondoMuestraCuenta">
<div class="container"> 
    <?php foreach ($usuario->result() as $row) {?>
        <center> <h1 style="color: yellow;"> Mis Datos </h1></center>
        <p style="font-family: cursive;">
        <h3> <label for="" style="color: yellow;"> Nombre: <?php echo $row->nombre  ?></label><br><br></h3>
        <h3> <label for="" style="color: yellow;"> Apellido: <?php echo $row->apellido  ?></label><br><br></h3>
        <h3><label for="" style="color: yellow;"> Email: <?php echo $row->email  ?></label><br><br>
        <label for="" style="color: yellow;"> Nombre de Usuario: <?php echo $row->usuario  ?></label><br><br></h3>
       <h3> <label for="" style="color: yellow;"> Contraseña: <?php echo base64_decode($row->pass)  ?></label><br><br></h3>
         </p>
    
       

         <?php }?>


         <a style="background: #C80014" type="button" class="btn btn-success" href="<?php echo base_url("usuario_modifica/$row->id"); ?>" >MODIFICAR MIS DATOS</a><br><br>
</div>