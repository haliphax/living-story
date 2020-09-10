<?php if(! defined('BASEPATH')) exit();

define('STAT_UPPER_BOUND', 5);

class Player 
{
	private $ci;
	private $msg = array();
	public	$story;

	function __construct()
	{
		$this->ci =& get_instance();
		$this->story = new Story();
		$this->inventory = new Inventory();
	}

	function hash($choice)
	{
		$id = uniqid();
		return abs(crc32($this->ci->session->userdata('salt') . $id . $choice)) . "-{$id}";
	}

	function checkhash($choice, $hash)
	{
		$parts = explode('-', $hash);
		return ($parts[0] == abs(crc32($this->ci->session->userdata('salt') . $parts[1] . $choice)));
	}

	function isvalid()
	{
		return ($this->ci->session->userdata('zone') && $this->ci->session->userdata('area'));
	}

	function zone($zone)
	{
		$this->ci->load->model("zones/{$zone}", 'zone');
		$this->ci->session->set_userdata('zone', $zone);
	}

	function area($area)
	{
		$this->ci->load->model("areas/{$area}", 'area');
		$this->ci->session->set_userdata('area', $area);
	}

	function generate()
	{
		$stam = $this->rollstat();
		$char = array(
			'name'		=> $this->generate_name(),
			'stats'		=> array(
							'life'		=> $stam * 2,
							'stamina'	=> $stam,
							'strength'	=> $this->rollstat(),
							'cunning'	=> $this->rollstat(),
							'magic'		=> $this->rollstat(),
							),
			);
		$this->ci->session->set_userdata('char', $char);
		$this->story->clear();
		$this->inventory->clear();
	}

	function roll($stat, $dc)
	{
		$char = $this->ci->session->userdata('char');
		$roll = rand(1, 10) + $char['stats'][$stat];
		$msg = "<p class='roll'>Roll ({$stat}, DC{$dc}) = {$roll} [";
		$result = ($roll >= $dc);		
		if(! $result)
			$msg .= 'failure';
		else
			$msg .='success';
		$msg .= ']</p>';
		$this->message($msg);
		return $result;
	}

	function event()
	{
		unset($this->ci->event);
		$randoms = array();
		if(is_array($this->ci->zone->randoms))
			$randoms = array_merge($randoms, $this->ci->zone->randoms);
		if(is_array($this->ci->area->randoms))
			$randoms = array_merge($randoms, $this->ci->area->randoms);
		$total_weight = 0;
		$total_count = 0;

		foreach($randoms as $random)
		{
			$total_weight += $random[1];
			$total_count++;
		}

		$r = rand(0, $total_weight - 1);
		$step = $weight = $randoms[0][1];
		for($step = 0; $step < $total_count && $weight < $r; $weight += $randoms[++$step][1]);
		$this->ci->load->model('events/' . $randoms[$step][0], 'event');
	}

	function message($msg = false)
	{
		if(! $msg)
			return $this->msg;
		$this->msg[] = $msg;
	}

	private function generate_name()
	{
		$names = array(
			'Some Player Name',
			'Some Other Player Name',
			'Yet Another Player Name'
			);
		return $names[rand(0, count($names) - 1)];
	}

	private function rollstat()
	{
		return rand(1, STAT_UPPER_BOUND);
	}
}
