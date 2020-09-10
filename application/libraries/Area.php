<?php if(! defined('BASEPATH')) exit();

class Area extends MY_Model
{
	public		$name;				# name of the zone
	public		$description;		# description of the zone
	public 		$areas;				# array of areas in this area
	public		$choices;			# array of choices in this area
	public 		$randoms;			# array of random events for this zone

	function __construct()
	{
		parent::__construct();
	}
}
