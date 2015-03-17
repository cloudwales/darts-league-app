<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}


	// --------------------------------------------
	// General Autharization functions

	
	public function login() // Display the login page
	{
		$this->load->view('auth/login');
	}


	// --------------------------------------------
	

	public function validate_login() // Validate login
	{
		$username = $this->input->post('username');
      	$password = $this->input->post('password');

		$query = $this->auth_model->validate($username, $password); 

		
		if ($query == false) // If login fails
		{			
			$this->session->set_flashdata('message', '<br/><p class="alert alert-danger">Login Failed !!!</p>');
			redirect('login', 'refresh');
		}
		
		elseif($query == true) // If login successful set the session variables and redirect home
		{	
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true,
				);
			$this->session->set_userdata($data); // sets array to session cookie

			$username = $this->session->userdata('username');
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">You are now logged in as <strong>' . $username . '</strong>!!</div>');
			redirect('');
		}	
	}


	// --------------------------------------------
 	
	
	public function logout() // Logout and destroy the session
	{
		$this->session->sess_destroy();
	    redirect(base_url(''), 'refresh');
	}	
	

	// End General Autharization functions
	// --------------------------------------------


}
