
<?php $session_data = $this->session->userdata('logged_in');?>
<header>
  <!--            MENU PARA ADMINISTRADOR-->

     <?php if( ($this->session->userdata('logged_in')) and (($perfil_id) =='1')){?>
    <div class="container-fluid" id="cabecera" align="center" >
      <div class="row">
      <div class="col-lg-6">
        
        <span class="card-img-top">

          <a href="http://localhost/Nunez_Luis_completo/"><div><img class="img-fluid"  src="<?php echo base_url('assets/img/icons/logo-blanco.png') ?>"></div>
            <br><br><br>
          </a>
         
        </span>
      
      </div>





      <div class="col-xs" align="center">
        <a href="wwww.facebook.com"target="_blank"><img src="<?php echo base_url('assets/img/icons/facebook.png') ?>">FACEBOOK</a>
        <a href="wwww.instagram.com"target="_blank"><img src="<?php echo base_url('assets/img/icons/instagram.png') ?>">INSTAGRAM</a>
        <a href="wwww.twitter.com"target="_blank"><img src="<?php echo base_url('assets/img/icons/twitter.png') ?>">TWITTER</a>
    </div>
      
    </div>
    </div>
        
          
  



  <nav class="navbar navbar-expand-md navbar-light navbar-dark sticky-top" style="background:black; ">
     
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border-color: white;">
    <span class="navbar-toggler-icon btn btn-primary" style="border-color: color:white;"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background:black; ;">
    <ul class="navbar-nav mr-auto" >
        <li class="nav-item active">
        <a class="nav-link" href="http://localhost/Nunez_Luis_completo/"> <I style="color: white;" >INICIO</I><span class="sr-only">(current)</span></a>
      </li>
      

     <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('muestraproductos');?>"><I style="color: white">Productos</I><span class="sr-only">(current)</span></a>
      </li>
     

     <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('muestrausuarios');?>"> <I style="color: white">Usuarios</I><span class="sr-only">(current)</span></a>
      </li>
     

     <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('ventas');?>"><I style="color: white">Reportes de Ventas</I><span class="sr-only">(current)</span></a>
      </li>
     

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('muestraconsultas');?>"><I style="color: white">Consultas</I><span class="sr-only">(current)</span></a>
     
      </li>

        <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('muestracontactos');?>"><I style="color: white">Contactos</I><span class="sr-only">(current)</span></a>
     
      </li>
      

       <li class="nav-item dropdown">
        <a id="desplegableA" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Mis Datos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="desplegable">
          <?php $row=$session_data['id'] ?>
         <a class="dropdown-item" href="<?php echo base_url("misdatos/$row");?>"> <p id="desplegableA">MI CUENTA</p></a>
          <a class="dropdown-item" onclick="salir()" href="<?php echo base_url('cerrar_sesion');?>"><p id="desplegableA">CERRAR SESION</p></a> 
        </div>

         
      </li>

      <a style="color: white;" href="#" class="nav-link" aria-haspopup="true" aria-expanded="false" > Administrador:  <?= $session_data['nombre']?></a>
       
    </ul>
   
    
  </div>
  
</nav>

  </header> 








  <header>
    <!--            MENU PARA CLIENTES-->

     


    <?php } else if( ($this->session->userdata('logged_in')) and (($perfil_id)=='2')) {?> 

    <div class="container-fluid" id="cabecera" align="center" >
      <div class="row">
      <div class="col-lg-6">
        
        <span class="card-img-top">

         <a href="http://localhost/Nunez_Luis_completo/"><div><img class="img-fluid"  src="<?php echo base_url('assets/img/icons/logo-blanco.png') ?>"></div>
            <br><br><br><br><br>
          </a>
         
        </span>
      
      </div>
     


      <div class="col-xs" align="center">
       <a href="wwww.facebook.com"target="_blank"><img src="<?php echo base_url('assets/img/icons/facebook.png') ?>">FACEBOOK</a>
       <a href="wwww.instagram.com"target="_blank"><img src="<?php echo base_url('assets/img/icons/instagram.png') ?>">INSTAGRAM</a>
        <a href="wwww.twitter.com"target="_blank"><img src="<?php echo base_url('assets/img/icons/twitter.png') ?>">TWITTER</a>
    </div>
      
    </div>
    </div>
        
          
  
  <nav class="navbar navbar-expand-md navbar-light navbar-dark sticky-top" style="background:black; ">
     
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border-color: white;">
    <span class="navbar-toggler-icon btn btn-primary" style="border-color: color:white;"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background:black; ;">
    <ul class="navbar-nav mr-auto" >
      
     <li class="nav-item active">
        <a class="nav-link" href="http://localhost/Nunez_Luis_completo/"> <I style="color: white;" >INICIO</I><span class="sr-only">(current)</span></a>
      </li>
       

     <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('comercializacion');?>"><I style="color: white">COMERCIALIZACION</I><span class="sr-only">(current)</span></a>
      </li>
     

     <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('terminos_y_condiciones');?>"> <I style="color: white">TERMINOS Y CONDICIONES</I><span class="sr-only">(current)</span></a>
      </li>
     

     <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('contactos1');?>"><I style="color: white">CONSULTAS</I><span class="sr-only">(current)</span></a>
      </li>
     

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('quienes_somos');?>"><I style="color: white">¿QUIENES SOMOS?</I><span class="sr-only">(current)</span></a>
     
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('instrumentos');?>"><I style="color: white">INSTRUMENTOS</I><span class="sr-only">(current)</span></a>
     
      </li>
      
     <li  class="nav-item dropdown">
        <a  id="desplegableA" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           MIS COSAS
        </a>
        <div id="desplegable" class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php $row=$session_data['id'] ?>
           
        <a class="dropdown-item" href="<?php echo base_url("misdatos/$row");?>"> <p id="desplegableA">MI CUENTA</p></a>
          
         <a class="dropdown-item" onclick="salir()" href="<?php echo base_url('cerrar_sesion');?>"><p id="desplegableA">CERRAR SESION </p></a>
          
          

        </div>
      </li>


      <li class="nav-item active">
        <a href="<?php echo base_url('carrito') ?>"> <img src=" <?php echo base_url('assets/img/icons/carrito2.png')?>"> </a>
     
      </li>

       <a style="color: white;" href="#" class="nav-link" aria-haspopup="true" aria-expanded="false" > Bienvenido   <?= $session_data['nombre']?></a>
       
      
    </ul>




   
    
  </div>
  
</nav>

  </header> 











  <header>
    <!--            MENU PARA PUBLICO EN GENERAL-->
             <?php } else {?> 
    <div class="container-fluid" id="cabecera" align="center" >
      <div class="row">
      <div class="col-lg-6">
        
        <span class="card-img-top">

          <a href="http://localhost/Nunez_Luis_completo/"><div><img class="img-fluid"  src="assets/img/icons/logo-blanco.png"></div>
            <br><br><br><br><br>
          </a>
         
        </span>
      
      </div>
     


      <div class="col-xs" align="center">
        <a href="wwww.facebook.com"target="_blank"><img src="assets/img/icons/facebook.png">FACEBOOK</a>
        <a href="wwww.instagram.com"target="_blank"><img src="assets/img/icons/instagram.png">INSTAGRAM</a>
        <a href="wwww.twitter.com"target="_blank"><img src="assets/img/icons/twitter.png">TWITTER</a>
    </div>
      
    </div>
    </div>
        
          
  
  <nav class="navbar navbar-expand-md navbar-light navbar-dark sticky-top" style="background:black; ">
     
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border-color: white;">
    <span class="navbar-toggler-icon btn btn-primary" style="border-color: color:white;"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background:black; ;">
    <ul class="navbar-nav mr-auto" >
      
     <li class="nav-item active">
        <a class="nav-link" href="http://localhost/Nunez_Luis_completo/"> <I style="color: white;" >INICIO</I><span class="sr-only">(current)</span></a>
      </li>
      

     <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('comercializacion');?>"><I style="color: white">COMERCIALIZACION</I><span class="sr-only">(current)</span></a>
      </li>
     

     <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('terminos_y_condiciones');?>"> <I style="color: white">TERMINOS Y CONDICIONES</I><span class="sr-only">(current)</span></a>
      </li>
     

     <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('contactosN');?>"><I style="color: white">CONTACTOS</I><span class="sr-only">(current)</span></a>
      </li>

     

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('quienes_somos');?>"><I style="color: white">¿QUIENES SOMOS?</I><span class="sr-only">(current)</span></a>
     
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('instrumentos');?>"><I style="color: white">INSTRUMENTOS</I><span class="sr-only">(current)</span></a>
     
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('iniciar_sesion');?>"><I style="color: white">INICIAR SESION</I><span class="sr-only">(current)</span></a>
     
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('registrate');?>"><I style="color: white">REGISTRARSE</I><span class="sr-only">(current)</span></a>
     
      </li>
    </ul>
   
    
  </div>
   <?php }?>
</nav>
 
  </header> 