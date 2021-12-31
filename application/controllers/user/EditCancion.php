<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditCancion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cancion_model');
	}

	public function index($idcancion)
	
	{	
		$song =$this->Cancion_model->getCancion($idcancion);
		$albumnes = $this->Cancion_model->get_album();

		$this->load->view('user/editcancion', [
			'song' => $song,
			'get_album' => $albumnes
		]);
		
		//$this->load->view('user/editcancion',$data_album); 
		
	}
	
	
	public function update ($idcancion){
		$nombrecancion = $this->input->post('nombrecancion');
		$duracion = $this->input->post('duracion');
		$id_album = $this->input->post('id_album');
	

		$this->form_validation->set_rules('nombrecancion', 'Nombre Cancion', 'required');
		$this->form_validation->set_rules('duracion', 'Duracion', 'required');
		

 

		if ($this->form_validation->run() == FALSE){
				$this->index('user/editcancion');
		}else{
			$data = array(
				"nombrecancion"=>$nombrecancion,
				"duracion"=>$duracion,
				"id_album"=>$id_album
			);

			$this->Cancion_model->update($data,$idcancion);
			$this->session->set_flashdata('success','Los datos se actualizaron correctamente');
			redirect(base_url()."canciones");
		}
	}	
}

