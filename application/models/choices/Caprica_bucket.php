<?php if(! defined('BASEPATH')) exit();

class Caprica_bucket extends Choice
{
	function __construct()
	{
		parent::__construct();
	}

	function choose()
	{
		$this->player->message('<p>You take the bucket. The shop owner sighs in relief and begins wiping the circle of rust where the bucket used to be with a rag.</p>');
		$this->player->inventory->add('bucket');
		$this->ci->session->unset_userdata('next');
	}
}
