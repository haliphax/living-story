<?php if(! defined('BASEPATH')) exit();

class Inventory
{
	private $ci;

	function __construct()
	{
		$this->ci =& get_instance();
	}

	function clear()
	{
		$this->ci->session->unset_userdata('inventory');
		$this->ci->session->set_userdata('inventory', array());
	}

	function all()
	{
		$inventory = $this->ci->session->userdata('inventory');
		if(! $inventory)
			return array();
		return $inventory;
	}

	function has($item)
	{
		$inventory = $this->ci->session->userdata('inventory');
		return isset($inventory[$item]);
	}

	function add($item)
	{
		$inventory = $this->ci->session->userdata('inventory');
		$inventory[$item] = true;
		$this->ci->session->set_userdata('inventory', $inventory);
	}

	function del($item)
	{
		$inventory = $this->ci->session->userdata('inventory');
		unset($inventory[$item]);
		$this->ci->session->set_userdata('inventory', $inventory);
	}
}

