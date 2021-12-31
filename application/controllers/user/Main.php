<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	
	{
		$data = array("data"=>$this->User_model->getUsers());
	 	$this->load->view('user/main',$data);
	 	//print_r($data);

	}

	public function delete($idbanda){
		$this->User_model->delete($idbanda);
		$this->session->set_flashdata('success','El usuario se elimino correctamente');
		redirect(base_url()."usuarios");
	}
}
