<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	// --------------------------------------------
	// General Frontend Pages

	public function index()
	{
		$data['page'] = 'home'; // For the active nav bar
		$data['settings'] = $this->frontend_model->get_settings();

		$this->load->view('template/header', $data);
		$this->load->view('frontend/home_page', $data);
		$this->load->view('template/footer');
	}

	// --------------------------------------------

	public function about()
	{

		$data['page'] = 'about'; // For the active nav bar

		$this->load->view('template/header', $data);
		$this->load->view('frontend/about');
		$this->load->view('template/footer');
	}

	// --------------------------------------------	

	public function contact()
	{
		$data['page'] = 'contact'; // For the active nav bar

		$this->load->view('template/header',$data);
		$this->load->view('frontend/contact');
		$this->load->view('template/footer');
	}
	
	// --------------------------------------------

	public function league_tables()
	{
		$data['page'] = 'league_tables'; // For the active nav bar

		$this->load->view('template/header',$data);
		$this->load->view('frontend/league_tables');
		$this->load->view('template/footer');
	}

	// --------------------------------------------

	public function submit_results()
	{
		$data['page'] = 'submit_results'; // For the active nav bar

		$this->load->view('template/header',$data);
		$this->load->view('frontend/submit_results');
		$this->load->view('template/footer');
	}

	// End General Frontend Pages
	// --------------------------------------------

	// --------------------------------------------
	// Frontend Functions


	// End Frontend functions
	// --------------------------------------------
	

}
