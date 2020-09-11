<?php if(! defined('BASEPATH')) exit();

class Caprica_gates extends Choice
{
	function choose()
	{
		$this->player->area('CityGates');
	}
}
