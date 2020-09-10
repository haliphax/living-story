<?php if(! defined('BASEPATH')) exit();

class Caprica_Sally extends Choice
{
	function __construct()
	{
		parent::__construct();
	}

	function choose()
	{
		if($this->player->story->get('sally'))
		{
			$this->player->message('<p>Sally grabs your hand and squeals, "Thank you <b>so much</b> for the bucket! Business is really booming!"</p>');
		}
		else
		{
			$this->player->message('<p>Sally tells you that she has no interest in speaking with you at this time.</p>');
		}
		$this->ci->session->unset_userdata('next');
	}
}
