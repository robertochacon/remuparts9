<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public $email;
	public $clave;

	public function __construct(){
		parent::__construct();
	}

	public function login($usuario, $clave){

		$this->db->where('correo',$usuario);
		$this->db->where('clave',$clave);
		
		$resultSet = $this->db->get('usuarios');

		if ($resultSet->num_rows() == 1) {
			return $resultSet->row(0)->id;
		}else{
			return false;
		}
	}

	public function guardar_cita($info_){
		$data_cita = $this->db->insert('citas',$info_);
		if ($data_cita) {
			return true;
		}else{
			return false;
		}
	}

	public function citas(){
		$this->db->order_by("id", "desc");
		$citas = $this->db->get('citas');
		return $citas->result();

		// $this->db->from("citas");
		// $this->db->order_by('id', 'desc');
		// $query = $this->db->get(); 
		// return $query->result();

	}

	public function editarCorreo($correo, $id){
		$info = array('correo'=>$correo);
		$update = $this->db->update('usuarios', $info, array('id' => $id));
		if ($update) {
			return true;
		}else{
			return false;
		}
	}

	public function editarClave($clave, $id){
		$data = array('clave'=>$clave);
		$update = $this->db->update('usuarios', $data, array('id' => $id));
		if ($update) {
			return true;
		}else{
			return false;
		}
	}

}

?>