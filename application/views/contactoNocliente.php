
<body id="">
<h4 style="color: black; margin: 2%; position: relative; left:5%;"> <U>PONETE EN CONTACTO CON NOSOTROS</U></h4>
<div class="container"  id="cuerpoCont">
  
      
  <div style="margin: 2%;">
  

 <?php echo validation_errors(); ?>
      <!-- Genero el formulario para crear una consulta -->

      <div class="well bs-component form-horizontal">
        <?php echo form_open('verifico_nuevaconsultaNocliente', 
                  ['class' => 'form-group', 'role' => 'form', 'id' => 'form_registro']); ?> 
      </div>

  <form>
  <div class="row">
    <div class="col">
      <img src="assets/img/icons/usuario.png">
     <div class="form-group">
            
            <div class="col">
              <?php echo form_input(['name' => 'nombre', 
                          'id' => 'nombre', 
                          'class' => 'form-control',
                          'placeholder' => 'Nombre', 
                          'required'=>'required', 
                          'autofocus'=>'autofocus',
                          'value'=>set_value('nombre')]); ?>
            </div>
          </div>
    </div>
    <div class="col">
       <img src="assets/img/icons/usuario.png">
      <div class="form-group">
             
            <div class="col">
              <?php echo form_input(['name' => 'apellido', 
                          'id' => 'apellido', 
                          'class' => 'form-control',
                          'placeholder' => 'Apellido', 
                          'required'=>'required',
                          'value'=>set_value('apellido')]); ?>
            </div>
          </div>
    </div>
  </div>
  <br><br>
  


  <div class="row">
    <div class="col">
       <img src="assets/img/icons/email2.png">
      <div class="form-group">
            
            <div class="col">
              <?php echo form_input(['type'=>'email', 
                          'name' => 'email', 
                          'id' => 'email', 
                          'class' => 'form-control',
                          'placeholder' => 'Email', 
                          'required'=>'required',
                          'value'=>set_value('email')]); ?>
            </div>
          </div>
    </div>
    <div class="col">
       <img src="assets/img/icons/celular.png">
      <div class="form-group">
           
            <div class="col">
              <?php echo form_input(['name'=>'telefono', 
                          'id' => 'telefono', 
                          'class' => 'form-control',
                          'placeholder' => 'Telefono', 
                          'required'=>'required',
                          'value'=>set_value('telefono')]); ?>
            </div>
          </div>
    </div>
  </div>

<br><br>
<h5 style="color: #D5000D;"> UBICACION </h5>
 <div class="row">

    <div class="col">
     <div class="form-group">
           
            <div class="col">
              <?php echo form_input(['name'=>'provincia', 
                          'id' => 'provincia', 
                          'class' => 'form-control',
                          'placeholder' => 'Provincia', 
                          'required'=>'required',
                          'value'=>set_value('provincia')]); ?>
            </div>
          </div>
      
    </div>
    <div class="col">
      <div class="form-group">
           
            <div class="col">
              <?php echo form_input(['name'=>'localidad', 
                          'id' => 'localidad', 
                          'class' => 'form-control',
                          'placeholder' => 'Localidad', 
                          'required'=>'required',
                          'value'=>set_value('localidad')]); ?>
            </div>
          </div>
    </div>
  </div>

  <br><br>

  <div class="form-group">
       <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
        
                 <div class="form-group">
           
            <div class ="col-md-8"class="form-control" id="message" name="message"  rows="7">
              <?php echo form_input(['type'=>'textarea', 
                          'name'=>'descripcion', 
                          'id' => 'descripcion', 
                          'class' => 'form-control',
                          'placeholder' => 'Escriba su consulta', 
                          'required'=>'required',
                          'value'=>set_value('descripcion')]); ?>
            </div>
          </div>


   </div>


<div class="col-lg-3 col-lg-offset-4">
            <?php echo form_submit('submit', 'Enviar',"class='btn btn-primary' "); ?> <br><br>
            <?php echo form_close(); ?>
          </div>




  <br>
</form>
</div>
</div>












<div class="container"  id="cuerpoCont2">
<div id="googleMaps">
  <h2 style="color: white;"> <U>ESTAMOS AQUI, TE ESPERAMOS</U> <img src="assets/img/icons/carita.png"></h2> <br>
  <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1770.0578710948098!2d-58.83490115406198!3d-27.465655820708058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x23440478437fe0ba!2sAudiocenter+Corrientes+M%C3%BAsica+Y+Sonido+Profesional!5e0!3m2!1ses!2sar!4v1555211637466!5m2!1ses!2sar" width="100%" allowfullscreen></iframe>
   
</div>
<div class="container">
  <div class="row" style="color:white;">
    
   <div class="col">
     <h4> <u><I>HORARIOS DE ATENCION </I></U></h4>
     <p><img src="assets/img/icons/reloj.png"> <U>LUNES A VIERNES DE 9 A 13 Y 16 A 20HS</U></p>
       <P><img src="assets/img/icons/reloj.png"><U> SABADOS DE 9 A 13HS </U></P>
       <P><img src="assets/img/icons/x.png"><U> DOMINGOS Y FERIADOS CERRADO </U></P>
   
   </div> 



    <div class=" col">
      <h4>
        <I>
        <U>TAMBIEN PODES CONTACTARNOS POR:</U>

        </I>
      </h4>
      <p><img src="assets/img/icons/Telefono.png"> <U>3795-884519</U></p> 
      <p><img src="assets/img/icons/whatsapp.png"> <U>3794-569921</U></p>
      <p><img src="assets/img/icons/email2.png"> <U>ventasHomme@gmail.com</U></p>


    </div>
  </div>
  
</div>
</div>
<br><br>
