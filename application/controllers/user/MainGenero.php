<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainGenero extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Genero_model');
	}

	public function index()
	
	{
		$data = array("data"=>$this->Genero_model->getGeneros());
	 	$this->load->view('user/maingenero',$data);
	 	//print_r($data);

	}

	public function delete($idgenero){
		$this->Genero_model->delete($idgenero);
		$this->session->set_flashdata('success','El usuario se elimino correctamente');
		redirect(base_url()."generos");
	}
}
