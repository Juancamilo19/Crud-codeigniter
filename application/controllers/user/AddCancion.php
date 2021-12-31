<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddCancion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cancion_model');
	}

	public function index()
	
	{
		$data_album['get_album'] = $this->Cancion_model->get_album();
        //print_r($data['get_genero']);die;
	 	$this->load->view('user/addcancion',$data_album);
	}
	public function save(){
		$nombrecancion = $this->input->post('nombrecancion');
		$duracion=$this->input->post('duracion');
		$id_album =$this->input->post('id_album');

		$this->form_validation->set_rules('nombrecancion', 'Nombre Cancion', 'required');
		$this->form_validation->set_rules('duracion', 'Duracion', 'required');
		$this->form_validation->set_rules('id_album', 'Album', 'required');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('user/addcancion');
	}else{
		$data = array(
			"nombrecancion"=>$nombrecancion,
			"duracion"=>$duracion,
			"id_album"=>$id_album

			
		);
		
		$this->Cancion_model->save($data);
		$this->session->set_flashdata('success','Se guardaron los datos correctamente');
		redirect(base_url()."canciones");

	}


			
	}
}
