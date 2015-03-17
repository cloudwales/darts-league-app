<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {


	public function index()
	{
		$data['page'] = 'home';
		$this->load->view('template/header', $data);
		$this->load->view('frontend/home_page');
		$this->load->view('template/footer');
	}


	public function about()
	{
		$data['page'] = 'about';
		$this->load->view('template/header', $data);
		$this->load->view('frontend/about');
		$this->load->view('template/footer');
	}
	

	public function contact()
	{
		$data['page'] = 'contact';
		$this->load->view('template/header',$data);
		$this->load->view('frontend/contact');
		$this->load->view('template/footer');
	}
	

	public function league_tables()
	{
		$data['page'] = 'league_tables';
		$this->load->view('template/header',$data);
		$this->load->view('frontend/league_tables');
		$this->load->view('template/footer');
	}


	public function submit_results()
	{
		$data['page'] = 'submit_results';
		$this->load->view('template/header',$data);
		$this->load->view('frontend/submit_results');
		$this->load->view('template/footer');
	}
	
	

}
