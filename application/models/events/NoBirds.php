<?php if(! defined('BASEPATH')) exit();

class NoBirds extends Event
{
	function __construct()
	{
		parent::__construct();		
		$this->player->message("<p>You notice a distinct lack of ambient noise throughout Caprica City; no birds sing here any longer.</p>");
	}
}
