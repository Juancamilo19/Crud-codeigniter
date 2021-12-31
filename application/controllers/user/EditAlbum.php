<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditAlbum extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Album_model');
	}

	public function index($idalbum)
	
	{
		$album=$this->Album_model->getAlbum($idalbum);
		$bandas = $this->Album_model->get_bandas();
	 	$this->load->view('user/editalbum',[
			 'album' => $album,
			 'get_bandas' => $bandas
		 ]);
	}
	public function update($idalbum){
		$id_banda = $this->input->post('id_banda');
		$nombrealbum = $this->input->post('nombrealbum');
		$añolanzamiento = $this->input->post('añolanzamiento');
		

		$this->form_validation->set_rules('id_banda', 'Banda', 'required');
		$this->form_validation->set_rules('nombrealbum', 'Nombre Album', 'required');
		$this->form_validation->set_rules('añolanzamiento', 'Año Lanzamiento', 'required');
 

		if ($this->form_validation->run() == FALSE){
				$this->index('user/editalbum');
		}else{
			$data = array(
				"id_banda"=>$id_banda,
				"nombrealbum"=>$nombrealbum,
				"añolanzamiento"=>$añolanzamiento
			);

			$this->Album_model->update($data,$idalbum);
			$this->session->set_flashdata('success','Los datos se actualizaron correctamente');
			redirect(base_url()."albums");
		}
		
	}
}
