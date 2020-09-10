<?php if(! defined('BASEPATH')) exit();

class Item extends MY_Model
{
	public	$name;				# name of the item
	public	$description;		# description of the item
	public	$image;				# image for representing the item
		
	function __construct()
	{
		parent::__construct();
	}
}
