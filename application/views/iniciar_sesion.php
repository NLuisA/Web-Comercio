<br>
<body id="iniciarSesion">
    <section class="cid-qWojGWOW0Y mbr-parallax-background mbr-fullscreen "  id="header15-14">

    
<!---->
    

    <div class="container p-6 mb-6 text-white border-top border border-secondary rounded fondo2" style="width:35%;">
        <h3><strong>Inicie Sesion</strong></h3>
        <h4><strong>Para hacer su Compra Correspondiente</strong> </h4>
<div class="row">
    <div class="col">
    <div class="form-container">
        <div class="media-container-column" data-form-type="formoid">
            
           <div class="media-container-column" data-form-type="formoid">
             <?php echo validation_errors(); ?>
      
            <?php echo form_open('verificoUsuario', ['class' => 'form-signin', 'role' => 'form']); ?> <br>
        
        <?php echo form_input(['name' => 'usuario', 
                    'id' => 'usuario', 
                    'class' => 'form-control',
                    'placeholder' => 'usuario', 
                    'required'=>'required', 
                    'autofocus'=>'autofocus']); ?>
            <br><br><br>
        
        <?php echo form_input(['type' => 'password',
                    'name' => 'pass', 
                    'id' => 'pass', 
                    'class' => 'form-control',
                    'placeholder' => 'contraseña', 
                    'required'=>'required']); ?> <br>
        
        <?php echo form_submit('submit', 'Iniciar sesión',"class='btn btn-form btn-primary display-4'"); ?> <br>
        
        <?php echo form_close(); ?>
        <br>
        </div>
        </div>
    </div>
    </div>
</div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>
<br>