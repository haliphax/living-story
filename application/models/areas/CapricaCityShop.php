<?php if(! defined('BASEPATH')) exit();

class CapricaCityShop extends Area
{
	function __construct()
	{
		$bucket = (! $this->player->story->get('sally') && ! $this->player->inventory->has('bucket')
			? ' There is a rusty bucket sitting on the countertop next to a sign that reads, "FREE BUCKET!"'
			: '');
		$sally = ($this->player->story->get('sally')
			? ' The shop owner looks up from his ledgers long enough to say, "I heard you helped Sally\'s little seashell business. Quite the samaritan, aren\'t you?"'
			: '');
		$this->name	= 'The Shop';
		$this->description = "<p>You are in Caprica City's oldest and most mysterious shop. Yackity yackity blah.{$bucket}{$sally}</p>";
		$this->randoms = array(
			array('Nothing', 20),
			array('Mugging', 15),
			);
		$this->choices = array(
			array('Return to the City Gates', 'Caprica_gates'),
			);
		if($bucket)
			$this->choices[] = array('Take the free bucket', 'Caprica_bucket');
		parent::__construct();
	}
}
