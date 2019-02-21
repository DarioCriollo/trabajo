<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_administrador extends CI_Controller {
	public function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		//$this->load->view('encabezado');
		if ($this->session->userdata('code')) {
			$this->load->view('admin/plantillaadmin');
			$this->load->view('admin/functionuser');
		}else{
			$res['mensaje']="Incorrect Username or Password";
			$this->load->view('principal');
		  $this->load->view('formulario',$res);
		}
	}

  public function functionadmin(){
    $this->load->view('admin/plantillaadmin');
    $this->load->view('admin/functionadmin');
  }
	public function functionuser(){
    $this->load->view('admin/plantillaadmin');
    $this->load->view('admin/functionuser');
  }
	public function deleteadmin(){
		$this->load->view('admin/plantillaadmin');
		$this->load->model('Graficos_model');
		$datos["datos"]=$this->Graficos_model->listAdmin();
		$this->load->view("admin/deleteadmin",$datos);
	}
	public function deleteUser(){
		$this->load->view('admin/plantillaadmin');
		$this->load->model('Graficos_model');
		$datos["datos"]=$this->Graficos_model->listUser();
		$this->load->view("admin/deleteuser",$datos);
	}
	public function deleteA(){
		//print_r('criollo');
		//$this->load->view('admin/plantillaadmin');
		$id=$this->input->post('xid');
		$this->load->model('Graficos_model');
		$this->Graficos_model->deleteA($id);
		$this->load->view("admin/deleteadmin");

	}
	public function registerAdmin(){
		$this->load->view('admin/plantillaadmin');
		$this->load->view('admin/registeradmin');
	}
	public function registerUser(){
		$this->load->view('admin/plantillaadmin');
		$this->load->view('admin/registeruser');
	}
	public function register(){

		$this->form_validation->set_rules('txtname','name','required');
		$this->form_validation->set_rules('txtnick','nickname','required');
		$this->form_validation->set_rules('txtcode','code','required');
		$this->form_validation->set_rules('txtsemester','semester','required');
		$this->form_validation->set_rules('txtcarrer','carrer','required');
		$this->form_validation->set_rules('txtemail','email','required');
		$this->form_validation->set_rules('txtcla','clave','required');
		if ($this->form_validation->run()==TRUE){
			$name=$this->input->post('txtname');
			$nick=$this->input->post('txtnick');
			$code=$this->input->post('txtcode');
			$semester=$this->input->post('txtsemester');
			$carrer=$this->input->post('txtcarrer');
			$email=$this->input->post('txtemail');
			$clave=$this->input->post('txtcla');
			$this->load->model('Sesion_model');
			$res['mensaje']=$this->Sesion_model->registrarUsuario($name,$nick,$code,$semester,$carrer,$email,$clave);
			//$this->load->view('admin/registeruser',$res);
		}
		$this->load->view('admin/plantillaadmin');
		$this->load->view('admin/registeruser');
	}


	public function registera(){

			$this->form_validation->set_rules('txtname','name','required');
			$this->form_validation->set_rules('txtnick','nickname','required');
			$this->form_validation->set_rules('txtcode','code','required');
			$this->form_validation->set_rules('txtemail','email','required');
			$this->form_validation->set_rules('txttype','type','required');
			$this->form_validation->set_rules('txtcla','clave','required');
			if ($this->form_validation->run()==TRUE){
				$name=$this->input->post('txtname');
				$nick=$this->input->post('txtnick');
				$code=$this->input->post('txtcode');
				$email=$this->input->post('txtemail');
				$type=$this->input->post('txttype');
				$semester=$this->input->post('txtsemester');
				$carrer=$this->input->post('txtcarrer');
				$clave=$this->input->post('txtcla');
				$this->load->model('Sesion_model');
				$res['mensaje']=$this->Sesion_model->registrarUsuarioadmin($name,$nick,$code,$email,$type,$semester,$carrer,$clave);
				$this->load->view('admin/plantillaadmin');
				$this->load->view('admin/registeradmin',$res);
			}else{
				$this->load->view('admin/plantillaadmin');
				$this->load->view('admin/registeradmin');
			}

		}

		public function updateAdmin(){
	//print_r('criollo');
	//$this->load->view('admin/plantillaadmin');
	$id=$this->input->post('xid');
	$this->load->model('Graficos_model');
	$datos=$this->Graficos_model->updateAdmin($id);
	echo json_encode($datos);

}

public function enviaUpdate(){
	$name=$this->input->post('xname');
	$lname=$this->input->post('xlname');
	$code=$this->input->post('xcode');
	$email=$this->input->post('xemail');
	$password=$this->input->post('xpassword');
	$this->load->model('Graficos_model');
	$datos=$this->Graficos_model->enviaUpdate($name,$lname,$code,$email,$password);
}
	public function cerrar(){
		$this->session->sess_destroy();
		redirect('Welcome');
	}
}
