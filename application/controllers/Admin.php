<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	// Frontend pages

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
