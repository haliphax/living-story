<?php

class Autoloader
{
	function __construct()
	{
		spl_autoload_register(function ($class) {
			if (strpos($class, 'CI_') !== 0 && strpos($class, 'PEAR') !== 0)
				require_once(APPPATH . "libraries/$class.php");
		}, true, true);
	}
}
