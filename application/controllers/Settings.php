<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['page'] = 'users'; // sets the active nav bar class
		$data['settings'] = $this->settings_model->get_settings();

		// Check if user is authenticated
		$this->auth_model->is_logged_in();

		$this->load->library('form_validation');
  
        $this->form_validation->set_rules('site_title', 'Site Title', 'required');
        $this->form_validation->set_rules('site_email', 'Site Email', 'required|valid_email');
        $this->form_validation->set_error_delimiters('<span class="text-danger"><small>', '</small></span>');  

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header', $data);
			$this->load->view('settings/settings', $data);
			$this->load->view('template/footer', $data);
        }
        else
        {
        	$this->settings_model->save_settings();
        	$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Settings Saved!!!</div>');
            redirect('settings');
        }
	}

}

/* End of file Setting.php */
/* Location: ./application/controllers/Setting.php */