<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sesion_model extends CI_Model {

  function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	function consultar_usr(){
		$log=$this->input->post('txtlog');
		$cla=($this->input->post('txtcla'));
		$this->db->where('code',$log);
		$this->db->where('password',$cla);
		$res=$this->db->get('users');

		if ($res->num_rows()==0) {
			return 'Incorrect Username or Password';
		}else{
			$reg=$res->row();
			$this->session->set_userdata('nickname',$reg->nickname);
			$this->session->set_userdata('name',$reg->name);
			$this->session->set_userdata('code',$reg->code);
      $this->session->set_userdata('tipo',$reg->kind);
			// return 'bienbenido';
      return $res->result_array();
		}
	}
  function consultar_tipo($tipo){
    $tipo1=$tipo['mensaje'][0]['kind'];
    switch ($tipo1) {
      case 'e':
        return 'e';
      break;

      case 'a':
        return 'a';
      break;

    }
  }

  function registrarUsuario($name,$nick,$code,$semester,$carrer,$email,$clave){

    $datas=$this->existcode($code);
    if($datas=='usuario no existe'){
      $data= array(
        'name' => $name,
        'nickname' => $nick,
        'code' => $code,
        'semester' => $semester,
        'carrer' => $carrer,
        'email' => $email,
        'password' => $clave,
        'kind' => 'e',
      );
      $res=$this->db->insert('users',$data);

    }else{
      return 'the code already exists';
    }

    // if (!$res) return "error al insertar usuario";
    // else return "Usuario registrado con exito";
  }
  function existcode($code){

    $this->db->where('code',$code);
    $res=$this->db->get('users');

    if ($res->num_rows()==0) {
      return 'usuario no existe';
    }else{
      return 'usuario si existe';
    }


  }
  function registrarUsuarioadmin($name,$nick,$code,$email,$type,$semester,$carrer,$clave){

    $datas=$this->existcode($code);
      if($datas=='usuario no existe'){
        $data= array(
          'name' => $name,
          'nickname' => $nick,
          'code' => $code,
          'email' => $email,
          'password' => $clave,
          'kind' => $type,
          'semester' => $semester,
          'carrer' => $carrer,
        );
        $res=$this->db->insert('users',$data);
        return "Registered user successfully";

      }else{
        return "The code already exists";
      }

  }

}
