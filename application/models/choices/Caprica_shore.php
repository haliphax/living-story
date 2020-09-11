<?php if(! defined('BASEPATH')) exit();

class Caprica_shore extends Choice
{
	function choose()
	{
		$this->player->area('CapricaCityShore');
	}
}
