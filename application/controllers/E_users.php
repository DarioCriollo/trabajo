<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_users extends CI_Controller {
	public function __construct()
	{
			parent::__construct();
	}
 	function index()
	{
		if ($this->session->userdata('code')) {
		$this->load->view('welcome_message');
		$this->load->view('prueba');
	}else{
		$res['mensaje']="Incorrect Username or Password";
			//$this->load->view('plantilla');
			$this->load->view('formulario',$res);
	}
	}
	function cerrar(){
		$this->session->sess_destroy();
		redirect('Welcome');
	}
}
