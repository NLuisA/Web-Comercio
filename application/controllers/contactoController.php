<?php 

	class contactoController extends CI_Controller{
		
		function __construct() 
		{
			parent::__construct();
			$this ->load->model('contacto_model');


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

    			function index()
		{			

            
			if($this->_veri_log()){
			$data = array('titulo' => 'contactos');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$dat = array('contactos' => $this->contacto_model->get_consultas() );

			$this->load->view('front/head_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('muestraContacto', $dat);
			$this->load->view('front/footer_view');
             }else{
			redirect('login', 'refresh'); }
			
		}
			
		

		function muestra_eliminados()
	    {    	
	    	if($this->_veri_log()){
	    	$data = array('titulo' => "contactos eliminados");
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			
			$dat = array('contactos' => $this->contacto_model->not_active_consultas());

			$this->load->view('front/head_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('muestraEliminadosContacto', $dat);
			$this->load->view('front/footer_view');
			
			 }else{
			redirect('login', 'refresh'); }
		  }
	    

	    
	    function activar_consulta(){
	    	$id = $this->uri->segment(2);
	    	$data = array(
	    		'eliminado'=>'NO'
	    	);

	    	$this->contacto_model->update_consulta($id, $data);
	    	redirect('contactos', 'refresh');
	    }

	     function eliminar_consulta(){
	    	$id = $this->uri->segment(2); 
	    	$data = array(
	    		'eliminado'=>'SI'
	    	);

	    	$this->contacto_model->update_consulta($id, $data);
	    	redirect('contactos', 'refresh');
	    }

          


	    
        //validacion de consulta de clinete logueado
	   	function index2()
		{
			//Genero las reglas de validacion
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[consultas.email]');
			
											
			$this->form_validation->set_rules('telefono', 'Telefono','required');
											
			
			$this->form_validation->set_rules('provincia', 'Provincia','required');

			$this->form_validation->set_rules('localidad', 'Localidad', 'required');


			


			//Mensaje de error si no pasan las reglas
			$this->form_validation->set_message('required',
										'<div class="alert alert-danger">El campo %s es obligatorio</div>');

			
			$fecha =date('d-m-Y H:i:s');
			//Preparo los datos para guardar en la base, en caso de que pase la validacion
			$data = array(
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true),
				'email'=>$this->input->post('email',true),
				'telefono'=>$this->input->post('telefono',true),
				'provincia'=>$this->input->post('provincia',true),
				'localidad'=>$this->input->post('localidad',true),
				'descripcion'=>$this->input->post('descripcion',true),
				'fecha'=>$fecha,
				'eliminado'=>'NO',
			);

			//Si no pasa la validacion de datos
			if ($this->form_validation->run() == FALSE)
			{

				//Muestra la página de registro con el título de error
				$data = array('titulo' => 'Error de formulario');
               /// $session_data = $this->session->userdata('logged_in');
			    // $data['perfil_id'] = $session_data['perfil_id'];
			   //$data['nombre'] = $session_data['nombre'];
			

				$this->load->view('front/head_view', $data);
				$this->load->view('front/navbar_view');
				$this->load->view('contactos');
				$this->load->view('front/footer_view');		
			}
			
			else 	//Pasa la validacion
			{
				//Envio array al metodo insert para registro de datos
				$consultas = $this->consulta_model->add_consulta($data);

				//Redirecciono a la pagina de perfil
				redirect('contactos');
			}	
		}


		//consulta de cliente no logueado
		function index3()
		{
			//Genero las reglas de validacion
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[consultas.email]');
			
											
			$this->form_validation->set_rules('telefono', 'Telefono','required');
											
			
			$this->form_validation->set_rules('provincia', 'Provincia','required');

			$this->form_validation->set_rules('localidad', 'Localidad', 'required');


			


			//Mensaje de error si no pasan las reglas
			$this->form_validation->set_message('required',
										'<div class="alert alert-danger">El campo %s es obligatorio</div>');

			
			$fecha =date('d-m-Y H:i:s');
			//Preparo los datos para guardar en la base, en caso de que pase la validacion
			$data = array(
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true),
				'email'=>$this->input->post('email',true),
				'telefono'=>$this->input->post('telefono',true),
				'provincia'=>$this->input->post('provincia',true),
				'localidad'=>$this->input->post('localidad',true),
				'descripcion'=>$this->input->post('descripcion',true),
				'fecha'=>$fecha,
				'eliminado'=>'NO',
			);

			//Si no pasa la validacion de datos
			if ($this->form_validation->run() == FALSE)
			{

				//Muestra la página de registro con el título de error
				$data = array('titulo' => 'Error de formulario');
               /// $session_data = $this->session->userdata('logged_in');
			    // $data['perfil_id'] = $session_data['perfil_id'];
			   //$data['nombre'] = $session_data['nombre'];
			

				$this->load->view('front/head_view', $data);
				$this->load->view('front/navbar_view');
				$this->load->view('contactoNocliente');
				$this->load->view('front/footer_view');		
			}
			
			else 	//Pasa la validacion
			{
				echo "<script>alert('Su consulta se Registro con Exito, Muchas gracias');</script>";
				//Envio array al metodo insert para registro de datos
				$consultas = $this->contacto_model->add_consultaNocliente($data);

				//Redirecciono a la pagina de perfil
				redirect('contactosN','refresh');
			}	
		}
      


  }