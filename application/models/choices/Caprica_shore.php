<?php if(! defined('BASEPATH')) exit();

class Caprica_shore extends Choice
{
	function __construct()
	{
		parent::__construct();
	}

	function choose()
	{
		$this->player->area("CapricaCityShore");
	}
}
