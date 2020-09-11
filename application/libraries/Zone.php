<?php if(! defined('BASEPATH')) exit();

class Zone extends MY_Model
{
	# name of the zone
	public $name;
	# description of the zone
	public $description;
	# array of areas in this zone
	public $areas;
	# array of choices in this zone
	public $choices;
	# array of random events for this zone
	public $randoms;
}
