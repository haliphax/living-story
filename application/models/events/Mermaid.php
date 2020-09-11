<?php if(! defined('BASEPATH')) exit();

class Mermaid extends Event
{
	function __construct()
	{
		if($this->player->roll('cunning', 12))
			$this->player->message('<p>You managed to sneak up on a mermaid as she was lying on the sand, basking in the sun; as she wriggles away from you, one of her scales falls to the ground. You pick it up.</p>');
		else
			$this->player->message('<p>In the distance, you spot what you believe to be a mermaid. You continue tromping down the beach without any regard for the noise you produce; when you arrive, she is gone.</p>');
	}
}
