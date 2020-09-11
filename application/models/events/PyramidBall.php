<?php if(! defined('BASEPATH')) exit();

class PyramidBall extends Event
{
	function __construct()
	{
		$this->player->message('<p>A group of children are playing Pyramid Ball in the street. Their ball rolls your way after a particularly wild shot. Laughing to yourself, you roll the ball back in their direction.</p>');
	}
}
