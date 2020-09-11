<?php if(! defined('BASEPATH')) exit();

class Game extends CI_Controller
{
	function index($reload = false)
	{
		if(! $this->player->isvalid())
			return $this->start();

		$this->load->model('zones/' . $this->session->userdata('zone'),
			'zone');
		$this->load->model('areas/' . $this->session->userdata('area'),
			'area');

		if($this->session->userdata('next'))
			$this->player->event();

		$this->session->set_userdata('salt', uniqid());
		$choices = array();

		if(is_array($this->zone->choices))
			$choices = array_merge($choices, $this->zone->choices);

		if(is_array($this->area->choices))
			$choices = array_merge($choices, $this->area->choices);

		asort($choices);
		$inventory = $this->player->inventory->all();
		$items = array();

		foreach($inventory as $k => $v) {
			$this->load->model("items/$k");
			$items[] = array(
				$this->$k->name, $this->$k->description, $this->$k->image);
		}

		$this->load->view('choice',
			array(
				'zone' => $this->zone->name,
				'zonedesc' => $this->zone->description,
				'area' => $this->area->name,
				'areadesc' => $this->area->description,
				'event' => $this->player->message(),
				'choices' => $choices,
				'items' => $items,
			)
		);
	}

	function start()
	{
		$this->player->story->clear();
		$this->player->zone('CapricaCity');
		$this->player->area('CityGates');
		$this->session->set_userdata('next', 0);
		$this->index();
	}

	function choose($choice, $hash)
	{
		if($this->player->checkhash($choice, $hash)) {
			$this->load->model("choices/$choice", 'choice');
			$this->session->set_userdata('next', 1);
			$this->player->message($this->choice->choose());
		}
		else {
			$this->session->unset_userdata('next');
		}

		$this->index(true);
	}
}
