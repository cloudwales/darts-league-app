<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	// --------------------------------------------
	// General Frontend Pages

	public function index()
	{
		$data['page'] = 'home'; // sets the active nav bar class
		$data['settings'] = $this->page_model->get_settings();

		$this->load->view('template/header', $data);
		$this->load->view('page/home_page', $data);
		$this->load->view('template/footer', $data);
	}

	// --------------------------------------------

	public function about()
	{

		$data['page'] = 'about'; // sets the active nav bar class
		$data['settings'] = $this->page_model->get_settings();

		$this->load->view('template/header', $data);
		$this->load->view('page/about', $data);
		$this->load->view('template/footer', $data);
	}

	// --------------------------------------------	

	public function contact()
	{
		$data['page'] = 'contact'; // sets the active nav bar class
		$data['settings'] = $this->page_model->get_settings();

		$this->load->view('template/header',$data);
		$this->load->view('page/contact', $data);
		$this->load->view('template/footer', $data);
	}
	
	// --------------------------------------------

	public function league_tables()
	{
		$data['page'] = 'league_tables'; // sets the active nav bar class
		$data['settings'] = $this->page_model->get_settings();

		$this->load->view('template/header',$data);
		$this->load->view('page/league_tables', $data);
		$this->load->view('template/footer', $data);
	}

	// --------------------------------------------

	public function submit_results()
	{
		$data['page'] = 'submit_results'; // sets the active nav bar class
		$data['settings'] = $this->page_model->get_settings();

		$this->load->view('template/header',$data);
		$this->load->view('page/submit_results', $data);
		$this->load->view('template/footer', $data);
	}

	// End General Frontend Pages
	// --------------------------------------------


	// --------------------------------------------
	// Frontend Functions

	public function send_contact_form()
	{
		//Get Cracking
	}

	// --------------------------------------------	

	public function send_results_form()
	{
		//Get Cracking
	}
	

	// End Frontend functions
	// --------------------------------------------
	

}
