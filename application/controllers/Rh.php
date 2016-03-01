<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rh extends CI_Controller {

	
	public function index()
	{
		$data['content'] = 'rh/avaliacao_home';
		
		$this->load->view('includes/base', $data);
	}

	public function avaliacao_usuario()
	{
		$data['content'] = 'rh/usuario_avaliacao';
		$this->load->view('includes/base', $data);
	}
	

	public function avaliacao_2()
	{
		$data['content'] = 'rh/avaliacao_2';
		$this->load->view('includes/base', $data);
	}
	
}

