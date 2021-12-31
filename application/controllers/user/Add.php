<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	
	{
		$data_genero['get_genero'] = $this->User_model->get_genero();
        //print_r($data['get_genero']);die;
	 	$this->load->view('user/add',$data_genero);

	}
	public function save(){
		$id_genero = $this->input->post('id_genero');
		$nombrebanda = $this->input->post('nombrebanda');
		$añofundacion = $this->input->post('añofundacion');
	

		$this->form_validation->set_rules('id_genero', 'Genero', 'required');
		$this->form_validation->set_rules('nombrebanda', 'Nombre Banda', 'required');
		$this->form_validation->set_rules('añofundacion', 'Año Fundación', 'required');
 

		if ($this->form_validation->run() == FALSE){
				$this->load->view('user/add');
		}else{
			$data = array(
				"id_genero"=>$id_genero,
				"nombrebanda"=>$nombrebanda,
				"añofundacion"=>$añofundacion
			);

			$this->User_model->save($data);
			$this->session->set_flashdata('success','Se guardaron los datos correctamente');
			redirect(base_url()."usuarios");
		}
		
	}
}
