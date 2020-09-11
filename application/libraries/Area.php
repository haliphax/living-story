<?php if(! defined('BASEPATH')) exit();

class Area extends MY_Model
{
	# name of the zone
	public $name;
	# description of the zone
	public $description;
	# array of areas in this area
	public $areas;
	# array of choices in this area
	public $choices;
	# array of random events for this zone
	public $randoms;
}
