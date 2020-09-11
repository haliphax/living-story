<?php if(! defined('BASEPATH')) exit();

class Mugging extends Event
{
	function __construct()
	{
		if (! $this->player->inventory->has('bucket') || $this->player->story->get('sally')) {
			$this->player->message('<p class="roll">Skipping mugging event</p>');
			$this->player->event();

			return;
		}

		if ($this->player->roll('strength', 12)) {
			$this->player->message('<p>You overpowered some would-be muggers!</p>');
		}
		else {
			$this->player->inventory->del('bucket');
			$this->player->message('<p>You were mugged! The bucket given to you by the shop owner has been taken from you.</p>');
		}
	}
}
