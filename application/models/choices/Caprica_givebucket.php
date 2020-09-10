<?php if(! defined('BASEPATH')) exit();

class Caprica_givebucket extends Choice
{
	function __construct()
	{
		parent::__construct();
	}

	function choose()
	{
		$this->player->message('<p>You give Sally the rusty bucket. "This will be perfect for collecting seashells!" she exclaims as she skips away playfully.</p>');
		$this->player->inventory->del('bucket');
		$this->player->story->set('sally', true);
		$this->ci->session->unset_userdata('next');
	}
}
