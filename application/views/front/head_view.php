<!DOCTYPE html>
<html lang="es" dir="ltr">


<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0,initial-scale=1, shrink-to-fit=no">
	
	<metahttp-equiv="X-UA-Compatible"content="IE=edge">

	<title> <?php  echo ($titulo); ?></title>
   
    <script type="text/javascript">
    	function borrar_carrito(){

    		var result =  confirm("Esta seguro de eliminar el carrito?");

    		if(result){
    			window.location = 'carrito_elimina/all';
    			
    			
    		}else{
    			return false;
    		}
    	}
        //borra fila de carrito
        function borrar_carrito_fila(){

            var result =  confirm("Esta seguro de eliminar este Producto?");

            if(result){
                window.location = 'carrito_elimina';
                
                
            }else{
                return false;
            }
        }
    	//funcion de mensaje para salir de sesion
    	function salir(){

            var result =  confirm("Esta seguro que quiere cerrar sesion?");

            if(result){
                window.location = 'cerrar_sesion';
                
                
            }else{
                return false;
            }
         }
         //abvertencia de actualizacion de stock
            function actualizar(){

            var result =  confirm("Recuerde que No puede ingresa Cantidad que supere al Stock o Ingresar Numero Negativos");

            if(result){
                window.location = 'carrito_actualiza';
                
                
            }else{
                return false;
            }
         }

         //mensaje de agregar producto
         function comprar(){

        alert("El producto fue agregado a su Carrito!");
 
         }

            //mensaje de agregar producto
         function Registro(){

        alert("Se a Registrado Correctamente");
 
         }

    </script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/estilos.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	

	<link rel="shorcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/icons/cabecera7.png');?>" >
	
	<title> <?php echo ($Titulo); ?> </title>
	
</head>

