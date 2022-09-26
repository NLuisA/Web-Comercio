<body>
    <div class="container" id="">
    <!-- filas -->
    <div class="row">
        <?php if (!$productos) { ?>

            <div class="container">
                <div class="well">
                    <h1>No hay Intrumentos</h1>
                </div>
            </div>

        <?php } else { ?>

        <div class="container-fluid">
            <hr>

            <div class="row text-center">
                <?php foreach($productos->result() as $row){ ?>
                    <div class="col-md-6 col-lg-4 col-xl-3 mt-4 mb-4">
                        <div  id="tarjetas "class="card col-fluid" style="background: black; color: white;">
                            <img src="<?php echo base_url($row->imagen); ?>" alt="" class="img-responsive img-thumbnail">
                            <div class="card-body" id="contTarjetas">
                                <p><?php echo $row->descripcion;?></p>
                                <p>
                                    <?php
                                        if ($row->stock < $row->stock_min && $row->stock > 0) {
                                            echo 'Por debajo del valor minimo: '.$row->stock_min;
                                        } elseif ($row->stock == 0) {
                                            echo 'No hay unidades disponibles';
                                        }else {
                                            echo 'Disponible:'.$row->stock.' unidades';
                                        }
                                    ?>
                                </p>

                                <p>Precio: $ <?php echo $row->precio_venta; ?> </p>

                                <p>
                                <p>

                                    <p>
                                        <div  class="col">
                                             <?php
                                     if($row->stock <= 0){
                                         $btn = array(
                                         'class' => 'btn btn-danger',
                                              'value' => 'Comprar',
                                             'disabled' => '',
                                             'name' => 'action'
                                             );
                                      echo form_submit($btn);
                                       echo form_close();

                                           ?>
                                          <?php
                                      } else if ($session_data = $this->session->userdata('logged_in')){
                                     if ($session_data['perfil_id']==2) {
                                        // Envia los datos en forma de formulario para agregar al carrito
                                     echo form_open('carrito_agrega');
                                      echo form_hidden('id', $row->id);
                                    echo form_hidden('descripcion', $row->descripcion);
                                   echo form_hidden('precio_venta', $row->precio_venta);
                                          echo form_hidden('stock', $row->stock);
                                                    ?>
                                                   <?php
                                                                     $btn = array(
                                              'class' => 'btn btn-success',
                                              'onclick'=> 'comprar()',
                                                'value' => 'Comprar',
                                                'name' => 'action'
                                                        );
                                         echo form_submit($btn);
                                        echo form_close();


                                        }else{
                                        ?>
                                        <input id="btnAdvertencia" type="button" onclick="alert('¡Debe registrarse como cliente!')" value="Desea Comprar?" />
                                        <?php  }
                                        ?>
                                        <?php
                                        } else {
                                        ?>
                                        <button class=" btn btn-success my-2 my-sm-0" type="submit">
                                        <a href="<?php echo base_url('iniciar_sesion');?>">Comprar</a>
                                        </button>

                                        <?php

                                        }
                                        ?>
                                        </div>

                                     
                                       
                                    
                                    </p>
                                    
                                </p>
                                
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <hr>
        </div>
        <?php } ?>

    </div>
</div>
	