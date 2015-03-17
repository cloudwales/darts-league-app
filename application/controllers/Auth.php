<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('auth_model', 'home_model'));
	}
	
	// Display the login page
	public function login()
	{
		$data['options'] = $this->home_model->get_options();
		$this->load->view('login', $data);
	}

	// Validate login
	public function validate_login()
	{
		$username = $this->input->post('username');
      	$password = $this->input->post('password');
		$query = $this->auth_model->validate($username, $password); 

		// If login fails
		if ($query == FALSE)
		{			
			$this->session->set_flashdata('message', '<br/><p class="alert alert-danger">Login Failed !!!</p>');
			redirect('login', 'refresh');
		}
		// If login is a success then set the session variables and redirect home
		elseif($query == TRUE)
		{	
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true,
				);
			$this->session->set_userdata($data);

			$username = $this->session->userdata('username');
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">You are now logged in as <strong>' . $username . '</strong>!!</div>');
			redirect('');
		}	
	}
 	
 	// Logout and destroy the session
	public function logout()
	{
		$this->session->sess_destroy();
	    redirect(base_url(''), 'refresh');
	}	

}
