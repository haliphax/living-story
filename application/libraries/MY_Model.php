<?php if(! defined('BASEPATH')) exit();

class MY_Model extends CI_Model
{
	protected $ci;

	function __construct()
	{
		parent::__construct();
		$this->ci =& get_instance();
	}
}
