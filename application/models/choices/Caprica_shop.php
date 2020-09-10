<?php if(! defined('BASEPATH')) exit();

class Caprica_shop extends Choice
{
	function __construct()
	{
		parent::__construct();
	}

	function choose()
	{
		$this->player->area("CapricaCityShop");
	}
}
