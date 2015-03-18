<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	// ------------------------------------------------

	public function get_users()
	{
		$query = $this->db->get('users');
		return $query->result_array();	
	}

	// ------------------------------------------------

	public function get_single_user($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('users');
		return $query->row();	
	}

	// ------------------------------------------------

	public function save_new_user()
	{
       	$password = $this->input->post('password');
       	$sha_password = sha1($password);

		$data = array(
				'name' => $this->input->post('name'),
        		'username' => $this->input->post('username'),
        		'email' => $this->input->post('email'),
        		'password' => $sha_password,
			);
		$this->db->insert('users', $data);
	}


	// ------------------------------------------------

	public function update_user($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update('users', $data);
	}

	// ------------------------------------------------

	public function change_password($password,$id)
	{
		$sha_password = sha1($password);
		$data = array(
        'password' => $sha_password,
		);
		$this->db->where('id', $id);
		$this->db->update('users', $data);
	}
	
	// ------------------------------------------------

	public function delete_user($id)
	{
		$this->db->delete('users', array('id' => $id));
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */