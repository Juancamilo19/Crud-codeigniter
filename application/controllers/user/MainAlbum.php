<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainAlbum extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Album_model');
	}

	public function index()
	
	{
		$data = array("data"=>$this->Album_model->getAlbums());
	 	$this->load->view('user/mainalbum',$data);
	 	//print_r($data);

	}

	public function delete($idalbum){
		$this->Album_model->delete($idalbum);
		$this->session->set_flashdata('success','El usuario se elimino correctamente');
		redirect(base_url()."albums");
	}
}
