<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_model extends CI_Model {

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




}

/* End of file Frontend_model.php */
/* Location: ./application/models/Frontend_model.php */