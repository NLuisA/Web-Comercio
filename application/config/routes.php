<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Welcome';

$route['PaginaOficial'] = 'Welcome/PaginaOficial';

$route['comercializacion'] = 'Welcome/comercializacion';

$route['terminos_y_condiciones'] = 'Welcome/terminos_y_condiciones';
//para cliente logueado
$route['contactos1'] = 'Welcome/contactos';
//para cliente no logueado
$route['contactosN'] = 'Welcome/contactosN';


$route['quienes_somos'] = 'Welcome/quienes_somos';

$route['iniciar_sesion'] = 'Welcome/iniciar_sesion';

$route['registrate'] = 'Welcome/registrate';

$route['verifico_nuevoregistro'] = 'registroController';

$route['verificoUsuario'] = 'loginController';

$route['cerrar_sesion'] = 'loginController/cerrar_sesion';



$route['instrumentos'] = 'Welcome/instrumentos';












$route['productos'] = 'Welcome/productos';

//productos
$route['agrega_producto'] = 'productoController/form_agrega_producto';

$route['muestra_eliminados'] = 'productoController/muestra_eliminados';

$route['muestraproductos'] = 'productoController/index';

$route['verifico_nuevoproducto'] = 'productoController/agrega_producto';

$route['productos_todos'] = 'productoController';

$route['productos_elimina/(:num)'] = 'productoController/eliminar_producto/$1';

$route['productos_modifica/(:num)'] = 'productoController/muestra_modificar/$1';

$route['verifico_modificaproducto/(:num)'] = 'productoController/modificar_producto/$1';

$route['productos_activa/(:num)'] = 'productoController/activar_producto/$1';




//usuarios
$route['muestra_eliminadosUsuario'] = 'usuariosController/muestra_eliminados';
$route['usuarios_activa/(:num)'] = 'usuariosController/activar_usuario/$1';
$route['usuario_elimina/(:num)'] = 'usuariosController/eliminar_usuario/$1';
$route['usuarios_todos'] = 'usuariosController';
$route['muestrausuarios'] = 'usuariosController/index';




//consultas de usuario registrado
$route['muestraconsultas'] = 'consultaController/index';
$route['muestra_eliminadosConsulta'] = 'consultaController/muestra_eliminados';
$route['consultas_activa/(:num)'] = 'consultaController/activar_consulta/$1';
$route['consulta_elimina/(:num)'] = 'consultaController/eliminar_consulta/$1';
$route['consultas'] = 'consultaController';
$route['verifico_nuevaconsulta'] = 'consultaController/index2';
$route['verifico_nuevaconsultaNocliente'] = 'consultaController/index3';

//contactos de cliente visitante
$route['muestracontactos'] = 'contactoController/index';
$route['muestra_eliminadosContacto'] = 'contactoController/muestra_eliminados';
$route['contacto_activa/(:num)'] = 'contactoController/activar_consulta/$1';
$route['contacto_elimina/(:num)'] = 'contactoController/eliminar_consulta/$1';
$route['contactos'] = 'contactoController';
$route['verifico_nuevaconsultaNocliente'] = 'contactoController/index3';




//carrito
$route['carrito'] = 'carrito_controller/electrodomesticos';
$route['carrito_agrega'] = 'carrito_controller/add';
$route['comprar'] = 'carrito_controller/muestra_compra';
$route['carrito_actualiza'] = 'carrito_controller/actualiza_carrito';
$route['carrito_elimina/(:any)'] = 'carrito_controller/remove/$1';
$route['confirma_compra'] = 'carrito_controller/guarda_compra';
$route['principal'] = 'Welcome/index';






//mi cuenta
$route['misdatos/(:num)'] = 'usuariosController/datosUsuario/$1';
$route['usuario_modifica/(:num)'] = 'usuariosController/muestraModifica/$1';
$route['verifico_modificaperfil/(:num)'] = 'usuariosController/index2/$1';
$route['modifica'] = 'usuariosController';




//Reportes

$route['ventas'] = 'productoController/listar_ventas';
$route['muestra_detalle/(:num)'] = 'productoController/muestra_detalle/$1';




$route['busqueda'] = 'productoController/busqueda';














$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
