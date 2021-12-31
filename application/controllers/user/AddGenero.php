<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddGenero extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Genero_model');
	}

	public function index()
	
	{
		
	 	$this->load->view('user/addgenero');

	}
	public function save(){
		$nombregenero = $this->input->post('nombregenero');

		$this->form_validation->set_rules('nombregenero', 'Nombre Genero', 'required');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('user/addgenero');
	}else{
		$data = array(
			"nombregenero"=>$nombregenero,
			
		);
		
		$this->Genero_model->save($data);
		$this->session->set_flashdata('success','Se guardaron los datos correctamente');
		redirect(base_url()."generos");

	}


			
	}
}
