<?php if(! defined('BASEPATH')) exit();

class Caprica_shop extends Choice
{
	function choose()
	{
		$this->player->area('CapricaCityShop');
	}
}
