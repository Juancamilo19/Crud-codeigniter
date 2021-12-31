<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddAlbum extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Album_model');
	}

	public function index()
	
	{
		
		$data_bandas['get_bandas'] = $this->Album_model->get_bandas();
        //print_r($data['get_genero']);die;
	 	$this->load->view('user/addalbum',$data_bandas);

	}
	public function save(){
		$id_banda = $this->input->post('id_banda');
		$nombrealbum=$this->input->post('nombrealbum');
		$añolanzamiento=$this->input->post('añolanzamiento');
		//$repeatPassword->this->input->post('repeatPassword');

		$this->form_validation->set_rules('id_banda', 'Banda', 'required');
		$this->form_validation->set_rules('nombrealbum', 'Nombre Album', 'required');
		$this->form_validation->set_rules('añolanzamiento', 'Año Lanzamiento', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('user/addalbum');
	}else{
		$data = array(
			"id_banda"=>$id_banda,
			"nombrealbum"=>$nombrealbum,
			"añolanzamiento"=>$añolanzamiento
		);
		
		$this->Album_model->save($data);
		$this->session->set_flashdata('success','Se guardaron los datos correctamente');
		redirect(base_url()."albums");

	}
		

			
	}
}
