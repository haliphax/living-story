<?php if(! defined('BASEPATH')) exit();

class CityGates extends Area
{
	function __construct()
	{
		$this->name				= 'The City Gates';
		$this->description		= '<p>These are the gates to Caprica City. They are very impressive. Lots of language can be used to describe them. Blah blah blah.</p>';
		$this->randoms			= array(
									array('Nothing', 20),
									array('PyramidBall', 10),
									);
		$this->choices			= array(
									array('Trek down to the shore', 'Caprica_shore'),
									array('Visit the shop', 'Caprica_shop'),
									);
		parent::__construct();
	}
}
