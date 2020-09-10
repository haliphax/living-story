<?php if(! defined('BASEPATH')) exit();

class Zone extends MY_Model
{
	public $name;			# name of the zone
	public $description;	# description of the zone
	public $areas;			# array of areas in this zone
	public $choices;		# array of choices in this zone
	public $randoms;		# array of random events for this zone

	function __construct()
	{
		parent::__construct();
	}
}
