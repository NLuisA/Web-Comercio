<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
	parent::__construct();
	$this->load->model('carrito_model');
	$this->load->model('producto_model');
	$this->load->library('cart');
}



	public function index()
	{
		$data= array('titulo' => "HOUSE MUSIC" );


		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		$baja = $session_data['baja'];
		if ($baja =='SI'){
			$this->session->set_flashdata('msg', 'Usuario dado de baja, comuniquese con House Music');
			redirect('cerrar_sesion');
		}
		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('PaginaOficial');

		$this->load->view('front/footer_view');

		
	}
	public function comercializacion()
	{
		$data= array('titulo' => "comercializacion" );


		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('comercializacion');

		$this->load->view('front/footer_view');

		
	}

	public function terminos_y_condiciones()
	{
		$data= array('titulo' => "terminos_y_condiciones" );


		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('terminos_y_condiciones');

		$this->load->view('front/footer_view');		
	}
	// vista para cliente logueado 
	public function contactos()
	{
		$data= array('titulo' => "contactos" );
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('contactos',$data);

		$this->load->view('front/footer_view');		
	}
	//vista para cliente no logueado
	public function contactosN()
	{
		$data= array('titulo' => "contactos" );
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('contactoNoCliente');

		$this->load->view('front/footer_view');		
	}

	public function quienes_somos()
	{
		$data= array('titulo' => "quienes_somos" );


		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('quienes_somos');

		$this->load->view('front/footer_view');		
	}
	public function iniciar_sesion()
	{
		$data= array('titulo' => "iniciar_sesion" );


		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('iniciar_sesion');

		$this->load->view('front/footer_view');

		
	}
	public function registrate()
	{
		$data= array('titulo' => "registrate" );

		
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];


		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('registrate');

		$this->load->view('front/footer_view');

		
	}

	public function instrumentos()
	{
		$data= array('titulo' => "instrumentos" );
        $dat=array('productos' => $this->producto_model->get_productos());
		
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];


		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('instrumentos',$dat);

		$this->load->view('front/footer_view');

		
	}
	
	
	
	
	
	

	public function productos()
	{
		$data= array('Titulo' => 'productos' );

		
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];


		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('productos');

		$this->load->view('front/footer_view');

		
	}

	public function agregarProducto()
	{
		$data= array('Titulo' => 'agregarProducto' );

		
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];


		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('agregarProducto');

		$this->load->view('front/footer_view');

		
	}
	public function modificaProducto()
	{
		$data= array('Titulo' => 'modificaProducto' );

		
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];


		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('modificaProducto');

		$this->load->view('front/footer_view');

		
	}
	public function muestraEliminados()
	{
		$data= array('Titulo' => 'muestraEliminados' );

		
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];


		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('muestraEliminados');

		$this->load->view('front/footer_view');

		
	}
	public function muestraProducto()
	{
		$data= array('Titulo' => 'muestraProducto' );

		
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];


		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('muestraProducto');

		$this->load->view('front/footer_view');

		
	}

	public function muestraUsuarios()
	{
		$data= array('Titulo' => 'muestraUsuarios' );

		
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];


		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('muestraUsuarios');

		$this->load->view('front/footer_view');

		
	}

	public function muestraEliminadosUsuarios()
	{
		$data= array('Titulo' => 'muestraEliminadosUsuarios' );

		
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];


		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('muestraEliminadosUsuarios');

		$this->load->view('front/footer_view');

		
	}

	public function muestraConsulta()
	{
		$data= array('Titulo' => 'muestraConsulta' );

		
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];


		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('muestraConsulta');

		$this->load->view('front/footer_view');

		
	}

	public function carritoParte()
	{
		$data= array('Titulo' => 'carritoParte' );

		
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];


		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('carritoParte');

		$this->load->view('front/footer_view');

		
	}

	public function compralista()
	{
		$data= array('Titulo' => 'compralista' );

		
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];


		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('compralista');

		$this->load->view('front/footer_view');

		
	}
	public function compra()
	{
		$data= array('Titulo' => 'compra' );

		
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];


		$this->load->view('front/head_view',$data);

		$this->load->view('front/navbar_view');

		$this->load->view('compra');

		$this->load->view('front/footer_view');

		
	}
}
