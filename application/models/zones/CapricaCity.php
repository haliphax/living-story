<?php if(! defined('BASEPATH')) exit();

class CapricaCity extends Zone
{
	function __construct()
	{
		$this->name			= "Caprica City";
		$this->description	= "<p>Once the bustling center of the human race's presence in this galaxy, Caprica City now stands as a monument to the destructive power of Cylon technology.</p>";
		$this->areas		= array(
								"CityGates",
								);
		$this->randoms		= array(
								array("NoBirds", 10),
								);
		parent::__construct();
	}
}
