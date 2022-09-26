<?php $session_data = $this->session->userdata('logged_in');?>
<body id="muestraModificarMicuenta">
<div class="container">
<div class="col-sm-10 col-md-10">

  <?php
{        
          echo form_open_multipart("verifico_modificaperfil/$id", ['class' => 'form-signin', 'role' => 'form']);
  }
    ?>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group" style="color: yellow;">
          <?php echo form_label('Nombre:', 'nombre'); ?>
          <?php echo form_input(['name' => 'nombre',
                          'id' => 'nombre',
                          'class' => 'form-control',
                          'placeholder' => 'Nombre',
                          'autofocus'=>'autofocus',
                          'value'=>"$nombre"]); ?>
          <?php echo form_error('nombre'); ?>
        </div>
      </div>
      <br>
      <div class="col-md-6">
        <div class="form-group" style="color: yellow;">
          <?php echo form_label('Apellido:', 'apellido'); ?>
          <?php echo form_input(['name' => 'apellido',
                          'id' => 'apellido',
                          'class' => 'form-control',
                          'placeholder' => 'Apellido',
                          'value'=>"$apellido"]); ?>
          <?php echo form_error('apellido'); ?>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6" style="color: yellow;">
        <div class="form-group">
          <?php echo form_label('Email:', 'email'); ?>
          <?php echo form_input(['name' => 'email',
                          'id' => 'email',
                          'class' => 'form-control',
                          'placeholder' => 'Email',
                          'value'=>"$email"]); ?>
          <?php echo form_error('email'); ?>
        </div>
      </div>
      <br>
      <div class="col-md-6">
        <div class="form-group" style="color: yellow;">
          <?php echo form_label('Usuario:', 'usuario'); ?>
          <?php echo form_input(['name' => 'usuario',
                          'id' => 'usuario',
                          'class' => 'form-control',
                          'placeholder' => 'Usuario',
                          'value'=>"$usuario"]); ?>
          <?php echo form_error('usuario'); ?>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group" style="color: yellow;">
          <?php echo form_label('Contraseña:', 'pass'); ?>
          <?php echo form_input(['name' => 'pass',
                          'id' => 'pass',
                          'class' => 'form-control',
                          'placeholder' => 'Contraseña',
                          'value'=>"$pass"]); ?>
          <?php echo form_error('pass'); ?>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6">
        <?php echo form_submit('modificar', 'Modificar',"class='btn btn-lg btn-warning btn-block'"); ?>

      </div>
    </div>
  <?php echo form_close(); ?>
  <div>

  </div>
</div>
</div>
</div>
