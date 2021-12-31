<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index($idbanda)
	
	{
		$genero  = $this->User_model->get_genero();
		$banda=$this->User_model->getUser($idbanda);
	 	$this->load->view('user/edit', [
			'banda' => $banda,
			'get_genero' => $genero
		 ]);

	}

	public function update($idbanda){
		$id_genero = $this->input->post('id_genero');
		$nombrebanda = $this->input->post('nombrebanda');
		$añofundacion = $this->input->post('añofundacion');
		

		$this->form_validation->set_rules('id_genero', 'Genero', 'required');
		$this->form_validation->set_rules('nombrebanda', 'Nombre Banda', 'required');
		$this->form_validation->set_rules('añofundacion', 'Año Fundación', 'required');
 

		if ($this->form_validation->run() == FALSE){
				$this->index('user/edit');
		}else{
			$data = array(
				"id_genero"=>$id_genero,
				"nombrebanda"=>$nombrebanda,
				"añofundacion"=>$añofundacion
			);

			$this->User_model->update($data,$idbanda);
			$this->session->set_flashdata('success','Los datos se actualizaron correctamente');
			redirect(base_url()."usuarios");
		}
		
	}
}
