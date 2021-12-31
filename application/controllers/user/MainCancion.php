<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainCancion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cancion_model');
	}

	public function index()
	
	{
		$data = array("data"=>$this->Cancion_model->getCanciones());
	 	$this->load->view('user/maincancion',$data);
	 	//print_r($data);

	}

	public function delete($idcancion){
		$this->Cancion_model->delete($idcancion);
		$this->session->set_flashdata('success','El usuario se elimino correctamente');
		redirect(base_url()."canciones");
	}
}
