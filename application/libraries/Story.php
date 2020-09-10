<?php if(! defined('BASEPATH')) exit();

class Story
{
	private $ci;

	function __construct()
	{
		$this->ci =& get_instance();
	}

	function clear()
	{
		$this->ci->session->unset_userdata('story');
		$this->ci->session->set_userdata('story', array());
	}

	function get($chapter)
	{
		$story = $this->ci->session->userdata('story');
		if(! isset($story[$chapter]))
			return false;
		return $story[$chapter];
	}

	function set($chapter, $value)
	{
		$story = $this->ci->session->userdata('story');
		$story[$chapter] = $value;
		$this->ci->session->set_userdata('story', $story);
	}

	function del($chapter)
	{
		$story = $this->ci->session->userdata('story');
		unset($story[$chapter]);
		$this->ci->session->set_userdata('story', $story);
	}
}
