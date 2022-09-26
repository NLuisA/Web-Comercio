<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class usuariosController extends CI_Controller{
		
		function __construct() 
		{
			parent::__construct();
			$this ->load->model('usuario_model');
		}

		private function _veri_log()
    	{
	    	if ($this->session->userdata('logged_in')) 
	    	{
	    		return TRUE;
	    	} else {
	    		return FALSE;
	    	}
    	}
		
		/**
	    * Muestra todos los productos en tabla
	    */
		function index()
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'usuarios');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$dat = array('usuarios' => $this->usuario_model->get_usuarios() );

			$this->load->view('front/head_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('muestraUsuarios', $dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh'); }
		}

		
		
		

		

		
	    function eliminar_usuario(){
	    	$id = $this->uri->segment(2); 
	    	$data = array(
	    		'baja'=>'SI'
	    	);

	    	$this->usuario_model->update_usuario($id, $data);
	    	redirect('usuarios_todos', 'refresh');
	    }

	    
	    function activar_usuario(){
	    	$id = $this->uri->segment(2);
	    	$data = array(
	    		'baja'=>'NO'
	    	);

	    	$this->usuario_model->update_usuario($id, $data);
	    	redirect('usuarios_todos', 'refresh');
	    }

	    
	    function muestra_eliminados()
	    {    	
	    	if($this->_veri_log()){
	    	$data = array('titulo' => 'Usuarios eliminados');
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			
			$dat = array(
		        'usuarios' => $this->usuario_model->not_active_usuarios()
			);

			$this->load->view('front/head_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('muestraEliminadosUsuarios', $dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh');}
		}
	    
         function datosUsuario($id)
	    { 
           if($this->_veri_log()){
            $data = array('titulo'  =>  "Usuario");

            $session_data = $this->session->userdata('logged_in');
            $data['perfil_id'] = $session_data['perfil_id'];
            $data['nombre'] = $session_data['nombre'];
            
            $dat = array('usuario' => $this->usuario_model->edit_usuario($id));

            $this->load->view('front/head_view', $data);
			      $this->load->view('front/navbar_view');
			     $this->load->view('muestramiCuenta', $dat);
			     $this->load->view('front/footer_view');

           }else{
           	redirect('login','refresh');
           }    
           }     
	    

	     function muestramodifica(){
                                    
    $id = $this->uri->segment(2);
    $datos_usuario = $this->usuario_model->edit_usuario($id);

    if ($datos_usuario != FALSE) {
        foreach ($datos_usuario->result() as $row)
        {
            $nombre = $row->nombre;
            $apellido = $row->apellido;
            $email = $row->email;
            $usuario = $row->usuario;
            $pass = $row->pass;
            $perfil_id = $row->perfil_id;
        }

        $dat = array('usuario' =>$datos_usuario,
            'id'=>$id,
            'nombre'=>$nombre,
            'apellido'=>$apellido,
            'email'=>$email,
            'usuario'=>$usuario,
            'pass'=>base64_decode($pass),
            'perfil_id'=>$perfil_id
        );
    }
    else
    {
        return FALSE;
    }
    if($this->_veri_log()){
    $data = array('titulo' => 'Modificar mis datos');
    $session_data = $this->session->userdata('logged_in');
    $data['perfil_id'] = $session_data['perfil_id'];
    $data['nombre'] = $session_data['nombre'];

    $this->load->view('front/head_view', $data);
    $this->load->view('front/navbar_view');
    $this->load->view('miCuentamodifica', $dat);
    $this->load->view('front/footer_view');
    }else{
    redirect('login', 'refresh');}
        }		
	


function index2(){
     //Validación del formulario
    $this->form_validation->set_rules('usuario', 'Usuario', 'required');
    // $this->form_validation->set_rules('perfil_id', 'Perfil', 'required');
    $this->form_validation->set_rules('nombre', 'Nombre', 'required');
    $this->form_validation->set_rules('apellido', 'Apellido', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('pass', 'Password', 'required|numeric');


    //Mensaje del form_validation
    $this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio, al intentar modificar estaba vacio</div>');

    $this->form_validation->set_message('numeric','<div class="alert alert-danger">El campo %s debe contener un valor numérico, al intentar modificar estaba vacio</div>');

    $id = $this->uri->segment(2);
    $datos_usuario = $this->usuario_model->edit_usuario($id);

       $dat = array(
          'id'=>$id,
          'usuario'=>$this->input->post('usuario',true),
         // 'perfil_id'=>$this->input->post('perfil_id',true),
          'nombre'=>$this->input->post('nombre',true),
          'apellido'=>$this->input->post('apellido',true),
          'email'=>$this->input->post('email',true),
          'pass'=>$this->input->post('pass',true),);

    if ($this->form_validation->run()==FALSE)
    {
        $data = array('titulo' => 'Error de formulario');
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];
        $data['id']= $session_data['id']; 

        $this->load->view('front/head_view', $data);
        $this->load->view('front/navbar_view');
        $this->load->view('miCuentamodifica',$dat);
        $this->load->view('front/footer_view');
    }
    else
    {
      $pass =$this->input->post('pass',true);
      $dat = array(
          'id'=>$id,
          'usuario'=>$this->input->post('usuario',true),
         // 'perfil_id'=>$this->input->post('perfil_id',true),
          'nombre'=>$this->input->post('nombre',true),
          'apellido'=>$this->input->post('apellido',true),
          'email'=>$this->input->post('email',true),
          'pass'=> base64_encode($pass),
      );
      $this->usuario_model->update_usuario($id, $dat);
      redirect('principal', 'refresh');
    }

     }

}