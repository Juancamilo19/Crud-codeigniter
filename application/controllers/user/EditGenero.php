<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditGenero extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Genero_model');
	}

	public function index($idgenero)
	
	{
		$data=$this->Genero_model->getGenero($idgenero);
	 	$this->load->view('user/editgenero',$data);
	}

	public function update ($idgenero){
		$nombregenero = $this->input->post('nombregenero');
		//$repeatPassword->this->input->post('repeatPassword');

		$this->form_validation->set_rules('nombregenero', 'Nombre Genero', 'required');
 

		if ($this->form_validation->run() == FALSE){
				$this->index('user/editgenero',$data);
		}else{
			$data = array(
				"nombregenero"=>$nombregenero
			);

			$this->Genero_model->update($data,$idgenero);
			$this->session->set_flashdata('success','Los datos se actualizaron correctamente');
			redirect(base_url()."generos");
		}
	}	
}

