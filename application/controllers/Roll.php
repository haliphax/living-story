<?php if(! defined('BASEPATH')) exit();

class Roll extends CI_Controller
{
	function index()
	{
		$this->player->generate();
		$this->load->view('new',
			array('char' => $this->session->userdata('char')));
	}
}
