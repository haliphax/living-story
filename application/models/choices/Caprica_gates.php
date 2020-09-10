<?php if(! defined('BASEPATH')) exit();

class Caprica_gates extends Choice
{
	function __construct()
	{
		parent::__construct();
	}

	function choose()
	{
		$this->player->area("CityGates");
	}
}
