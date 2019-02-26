<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('M_data');

		if($this->session->userdata('user_level') == FALSE){
			redirect('auth');
		}

	}


	public function index($id_parkir)
	{
		$data['title']    = 'Edit Data Parkir';
		$data['databyid'] = $this->M_data->getDataById($id_parkir);

		$this->load->view('templates/header', $data);
		$this->load->view('pages/edit_data', $data);
		$this->load->view('templates/footer');
	}
}