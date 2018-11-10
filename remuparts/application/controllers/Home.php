<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index(){
		if ($this->session->userdata('login')){
			redirect('dentro');
		}else{
			$dir_content = scandir('./assets/img/slider');
		    $images = array();

		    foreach ( $dir_content as $item ){
		      if (is_file("./assets/img/slider/{$item}") && preg_match('/^[\S\s]+\.jpg$/', $item) || preg_match('/^[\S\s]+\.jpeg$/', $item) || preg_match('/^[\S\s]+\.png$/', $item)){
		          $images[] = $item;
		      }
		    }

	    	$data['images'] = $images;
			$this->load->view('home',$data);
		}
	}

	public function login_user(){
		$this->load->view('login');
	}

	public function dentro(){

		if ($this->session->userdata('login')){
			$data['citas'] = $this->home_model->citas();
			$this->load->view('layout/main',$data);
		}else{
			redirect('home');
		}
	}

	public function login(){

		$usuario = $this->input->post('usuario');
		$clave = $this->input->post('clave');

		$user_id = $this->home_model->login($usuario,$clave);

		if ($user_id) {

			$user_data = array(
				'user_id'=>$user_id,
				'usuario'=>$usuario,
				'login'=>true
			);

			$this->session->set_userdata($user_data);

			if ($this->session->userdata('usuario')) {
				// $datos['session'] = $this->session->userdata('usuario');
				// $this->load->view('layout/main',$datos);
				redirect('dentro');
			}
			
			//redirect('layout/main');	

		}else{
			$data['mensaje'] = $this->session->set_flashdata("error","Datos Incorrectos");
			redirect('login',$data);
		}
	}

	public function salir(){
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('usuario');
		$this->session->unset_userdata('login');
		redirect('home');
	}

	public function slider(){
		if ($this->session->userdata('login')){
			$dir_content = scandir('./assets/img/slider');
		    $images = array();

		    foreach ( $dir_content as $item ){
		      if (is_file("./assets/img/slider/{$item}") && preg_match('/^[\S\s]+\.jpg$/', $item) || preg_match('/^[\S\s]+\.jpeg$/', $item) || preg_match('/^[\S\s]+\.png$/', $item)){
		          $images[] = $item;
		      }
		    }

		    $data['images'] = $images;
			$this->load->view('slider', $data);
		}else{
			redirect('home');
		}
	}

	public function guardarImg(){

		if ($this->session->userdata('login')){
			if (isset($_FILES["images"]["name"])) {
				$config['upload_path'] = './assets/img/slider/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$this->load->library('upload',$config);

				if (!$this->upload->do_upload('images')) {
					echo $this->upload->display_errors();
					
				}else{
					// $data = $this->upload->data();
					// echo '<img src="'.base_url().'assets/img/slider/'.$data["file_name"].'">';
					redirect('slider');			}
			}
		}else{
			redirect('home');
		}
	}

	public function eliminarImg(){
		$imagen = $_GET['delete'];
		if(unlink("./assets/img/slider/".$imagen)){
			redirect('slider');
		}else{
			redirect('slider');
		}
	}

	public function configuracion(){
		if ($this->session->userdata('login')){
			$this->load->view('configuracion');
		}else{
			redirect('home');
		}
	}

	public function editarEmail(){

		$email = $_POST['correo'];
		$id = $this->session->userdata('user_id');

		$editar = $this->home_model->editarCorreo($email,$id);
		if ($editar) {
			echo "1";
		}else{
			echo "0";
		}
	}

	public function editarClave(){

		$clave = $_POST['clave'];
		$id = $this->session->userdata('user_id');

		$editar = $this->home_model->editarClave($clave,$id);
		if ($editar) {
			echo "1";
		}else{
			echo "0";;
		}
	}

	public function guardar_cita(){

		$informacion = array(
			'nombre' => $_POST['nombre'],
			'apellido' => $_POST['apellido'],
			'telefono' => $_POST['telefono'],
			'servicios' => $_POST['servicios'],
			'hora' => $_POST['hora'],
			'fecha_cita' => $_POST['fecha_cita'],
			'fecha' => date("Y-m-d"),
		);

		$guardar = $this->home_model->guardar_cita($informacion);

		if ($guardar) {
			echo "1";;
		}else{
			echo "0";;
		}
	}
	
	public function citas(){
		$this->load->view('citas');
	}

	public function servicios(){
		$this->load->view('servicios');
	}


	public function nosotros(){
		$this->load->view('nosotros');
	}

}

?>