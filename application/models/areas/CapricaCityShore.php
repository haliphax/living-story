<?php if(! defined('BASEPATH')) exit();

class CapricaCityShore extends Area
{
	function __construct()
	{
		$bucket = (! $this->player->story->get('sally') && $this->player->inventory->has('bucket')
			? ' Sally is eyeing your rusty bucket with envy.'
			: '');
		$this->name = 'Seashore';
		$this->description = "<p>You are at the seashore. Sally is here, selling seashells. Alliteration is fun, isn't it?{$bucket}</p>";
		$this->randoms = array(
			array('Nothing', 20),
			array('Mermaid', 15),
			);
		$this->choices = array(
			array('Return to the City Gates', 'Caprica_gates'),
			array('Talk to Sally', 'Caprica_Sally'),
		);
		if($bucket)
			$this->choices[] = array('Give Sally the rusty bucket', 'Caprica_givebucket');
		parent::__construct();
	}
}
