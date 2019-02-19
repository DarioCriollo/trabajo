<?php
	class C_inicio extends CI_Controller{

	function index(){
	}

	public function questions(){
		//$this->load->view('menu');
		//$this->load->model('questions');
		//$res["questions"]=$this->questions->preguntas();
		//print_r($res);
		//$this->load->view('welcome_message');
		$this->load->view("preguntas");
	}
	public function questionsc1(){
			$this->load->view("preguntasc1");
	}

	public function pregunta(){
		$xdat=$this->input->post('xpregunta');
		//print_r($xdato);
		$this->load->model('Questions_model');
		$result=$this->Questions_model->codigo($xdat);
		echo json_encode($result);

	}
	public function lectura(){
			$xdato=$this->input->post('xpregunta');
			$this->load->model('Questions_model');
			$resultados=$this->Questions_model->lectura($xdato);
			// print_r($resultados);
			echo json_encode($resultados);
	}

	public function busca(){
		$xdato=$this->input->post('xdato');
		//echo "dario".$xdrogueria;
		$this->load->model('Questions_model');
		$resultados=$this->Questions_model->busca($xdato);
		echo json_encode($resultados);
	}
	public function codesread(){
		$xdato=$this->input->post('xdato');

		//echo "dario".$xdrogueria;
		$this->load->model('Questions_model');
		$resultados=$this->Questions_model->codes($xdato);
		// print_r($resultados);
		echo json_encode($resultados);
	}
	public function objects(){
		$this->load->model('Questions_model');
		$resultados=$this->Questions_model->objects();
		echo json_encode($resultados);
	}


	public function mas(){
		$acertadas=json_decode($_POST['xdato']);
		$fallidas=json_decode($_POST['xdatof']);


		//echo var_dump($acertadas)."acertadas";
		//echo var_dump($fallidas)."fallidas";

		$this->load->model('Questions_model');
		$resultados=$this->Questions_model->newQuestions($acertadas,$fallidas);
		echo json_encode($resultados);
	}

	public function respuesta(){
		//print_r('criollo estrada');
		$xvector=$this->input->post('fallidas');
		$xnivel=$this->input->post('nivel');
		$correct=$this->input->post('correct');
		$failed=$this->input->post('failed');
	//	$xtitle=$this->input->post('title');

		//print_r('sisisisi'.$xvector.'-----'.$xnivel."------sisisis");

		//echo var_dump($xvector);
		//print_r($xvector);
		$this->load->model('Reglas_model');

		$resultados=$this->Reglas_model->reglasInferencia($xvector,$xnivel,$correct,$failed);

		//$this->questions->conteoFallidas($xvector);
		//print_r($resultados);
		echo json_encode($resultados);
		//echo var_dump($data);
	}
	public function respuestac1(){
		//print_r('criollo estrada');
		$xvector=$this->input->post('fallidas');
		$xnivel=$this->input->post('nivel');
		$correct=$this->input->post('correct');
		$failed=$this->input->post('failed');
	//	$xtitle=$this->input->post('title');

		//print_r('sisisisi'.$xvector.'-----'.$xnivel."------sisisis");

		//echo var_dump($xvector);
		//print_r($xvector);
		$this->load->model('reglasc1');

		$resultados=$this->reglasc1->reglasInferencia($xvector,$xnivel,$correct,$failed);

		//$this->questions->conteoFallidas($xvector);
		//print_r($resultados);
		echo json_encode($resultados);
		//echo var_dump($data);
	}

	function preguntastodo(){
		$xdato=$this->input->post('xnivel');
		$title=$this->input->post('title');
		$this->load->model('Questions_model');
		$resultados=$this->Questions_model->nivelPreguntas($xdato,$title);
		echo json_encode($resultados);
	}


	function historial(){
		$this->load->view('welcome_message');
		$this->load->model('historial');
		$datos["historiales"]=$this->historial->busca();
		$this->load->view("historial",$datos);
	}

}

?>
