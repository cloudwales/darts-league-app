<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('user_model'));
	}

	// --------------------------------------------
	// User Pages

	public function index()
	{
		$data['page'] = 'users'; // sets the active nav bar class
		$data['settings'] = $this->page_model->get_settings();
		$data['users'] = $this->user_model->get_users();

		// Check if user is authenticated
		$this->auth_model->is_logged_in();

		$this->load->view('template/header', $data);
		$this->load->view('users/users', $data);
		$this->load->view('template/footer', $data);
	}

	// --------------------------------------------

	public function new_user()
	{
		$this->load->library('form_validation');

		$data['page'] = 'new_user'; // sets the active nav bar class
		$data['settings'] = $this->page_model->get_settings();
		$id = $this->uri->segment(3);

		// Check if user is authenticated
		$this->auth_model->is_logged_in();

		// Set validation rules
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger"><small>', '</small></span>');       
       
        if ($this->form_validation->run() == FALSE) // If validation fails
        {
            $this->load->view('template/header', $data);
			$this->load->view('users/new_user', $data);
			$this->load->view('template/footer', $data);
		}
        else // If validation is success
        {     	
        	$this->user_model->save_new_user();
        	$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Added new user!!!</div>');
            redirect('users');
        }
	}

	// --------------------------------------------


	public function edit_user()
	{
		$this->load->library('form_validation');

		$data['page'] = 'edit_user'; // sets the active nav bar class
		$data['settings'] = $this->page_model->get_settings();
		$id = $this->uri->segment(3);
		$data['user'] = $this->user_model->get_single_user($id);

		// Check if user is authenticated
		$this->auth_model->is_logged_in();

		// Set validation rules
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', '');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_error_delimiters('<span class="text-danger"><small>', '</small></span>');       
       
        if ($this->form_validation->run() == FALSE) // If validation fails
        {
            $this->load->view('template/header', $data);
			$this->load->view('users/edit_user', $data);
			$this->load->view('template/footer', $data);
		}
        else // If validation is success
        {
        	$id = $this->uri->segment(3);
        	$data = $this->input->post();
        	$this->user_model->update_user($data,$id);

        	$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Updated User Successfully!!!</div>');
            redirect('users');
        }
	}

	// --------------------------------------------

	public function change_password()
	{
		$this->load->library('form_validation');
		$this->load->library('encryption');

		$data['page'] = 'edit_user'; // sets the active nav bar class
		$data['settings'] = $this->page_model->get_settings();
		$id = $this->uri->segment(3);

		$data['user'] = $this->user_model->get_single_user($id);

		// Check if user is authenticated
		$this->auth_model->is_logged_in();

		// Set validation rules
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_error_delimiters('<span class="text-danger"><small>', '</small></span>');
             
        if ($this->form_validation->run() == FALSE) // If validation fails
        {
            $this->load->view('template/header', $data);
			$this->load->view('users/change_password', $data);
			$this->load->view('template/footer', $data);
		}
        else // If validation is success
        {
        	$id = $this->uri->segment(3);
        	$password = $this->input->post('password');
        	$this->user_model->change_password($password,$id);

        	$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Password Changed!!!</div>');
            redirect('users');
        }
	}
	

	// --------------------------------------------

	public function delete_user()
	{
		// Check if user is authenticated 
		$this->auth_model->is_logged_in();

		// Get the url id
		$id = $this->uri->segment(3);
		$this->user_model->delete_user($id);
		redirect('users', 'refresh');
	}
	

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */