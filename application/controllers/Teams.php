<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teams extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['page'] = 'teams'; // sets the active nav bar class
		$data['settings'] = $this->settings_model->get_settings();

		$this->load->view('template/header', $data);
		$this->load->view('teams/teams', $data);
		$this->load->view('template/footer', $data);
	}

}

/* End of file Teams.php */
/* Location: ./application/controllers/Teams.php */