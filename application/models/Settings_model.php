<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_settings()
	{
		$query = $this->db->get('settings');
		return $query->row();
	}

	public function save_settings()
	{
		$data = $this->input->post();
		$this->db->update('settings', $data);
	}
	
	

}

/* End of file Settings_model.php */
/* Location: ./application/models/Settings_model.php */