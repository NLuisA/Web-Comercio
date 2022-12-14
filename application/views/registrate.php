<br>
<body id="fondo2">
<div class="container p-6 mb-6 text-white border-top border border-secondary rounded fondo2" style="width:45%;">
  <h2>Registrarse como cliente</h2>
  <div class="row">
    <div class="col">

     

      <?php echo validation_errors(); ?>
      <!-- Genero el formulario para crear un usuario -->

      <div class="well bs-component form-horizontal">
        <?php echo form_open('verifico_nuevoregistro', 
                  ['class' => 'form-group', 'role' => 'form', 'id' => 'form_registro']); ?> 

        <fieldset>
          <div class="form-group">
            <label class="col-lg-2 control-label">Nombre</label>
            <div class="col-lg-10">
              <?php echo form_input(['name' => 'nombre', 
                          'id' => 'nombre', 
                          'class' => 'form-control',
                          'placeholder' => 'Nombre', 
                          'required'=>'required', 
                          'autofocus'=>'autofocus',
                          'value'=>set_value('nombre')]); ?>
            </div>
          </div>
          <div class="form-group">
             <label class="col-lg-2 control-label" class="form-control">Apellido</label>
            <div class="col-lg-10">
              <?php echo form_input(['name' => 'apellido', 
                          'id' => 'apellido', 
                          'class' => 'form-control',
                          'placeholder' => 'Apellido', 
                          'required'=>'required',
                          'value'=>set_value('apellido')]); ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
              <?php echo form_input(['type'=>'email', 
                          'name' => 'email', 
                          'id' => 'email', 
                          'class' => 'form-control',
                          'placeholder' => 'Email', 
                          'required'=>'required',
                          'value'=>set_value('email')]); ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Usuario</label>
            <div class="col-lg-10">
              <?php echo form_input(['name' => 'usuario', 
                          'id' => 'usuario', 
                          'class' => 'form-control',
                          'placeholder' => 'Usuario', 
                          'required'=>'required',
                          'value'=>set_value('usuario')]); ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Contrase??a</label>
            <div class="col-lg-10">
              <?php echo form_password(['name' => 'password', 
                          'id' => 'password', 
                          'class' => 'form-control',
                          'placeholder' => 'Contrase??a', 
                          'required'=>'required']); ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Repite Contrase??a</label>
            <div class="col-lg-10">
              <?php echo form_password(['name' => 're_password', 
                          'id' => 're_password', 
                          'class' => 'form-control',
                          'placeholder' => 'Repetir Contrase??a', 
                          'required'=>'required']); ?>
            </div>
          </div>
          
          
            <?php echo form_close(); ?>
            <div class=" row justify-content ">
                                <div class="col-2 ">
                                <?php echo form_reset ('reset', 'Borrar', "class='btn btn-info fuenteBotones'"); ?><br>
                                </div>

                                <br><br>

                                <div class="col-3">
                                <?php echo form_submit('submit', 'Registrarse',"class='btn btn-success fuenteBotones' mt-3 onclik='Registro()'"); ?> 
                                </div>
                              </div>
         
        </fieldset>
      </div>
    </div>
  </div>
</div> 
<br>   