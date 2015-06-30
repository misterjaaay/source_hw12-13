<?php
class User_model extends CI_Model {
	function __construct() {
		parent::__construct ();
	}
	public function validate_login() {
		$username = $this->input->post ( 'username' );
		$password = $this->input->post ( 'password' );
		echo $username . '   ' . $password;
		$this->form_validation->set_rules ( 'username', 'Username', 'required|xss_clean' );
		$this->form_validation->set_rules ( 'password', 'Password', 'required|xss_clean' );
		if ($this->form_validation->run () == FALSE) {
			exit ( 'error' );
		} else {
			$query = $this->db->query('SELECT login FROM users where login = "'.$username.'" 
					and password = "'.$password.'" ');
			var_dump ( $query->result () );
			if ($query->num_rows () == 1) {
				return $query->result ();
				var_dump ( $query->result () );
			} else {
				return false;
			}
		}
	}
	public function register_user(){
		$new_login = $this->input->post ( 'new_login' );
		$email = $this->input->post ( 'email' );
		$new_password = $this->input->post ( 'new_password' );
		$repeat_password = $this->input->post ( 'repeat_password' );
		$this->form_validation->set_rules ( 'new_login', 'new_login', 'required|xss_clean' );
		$this->form_validation->set_rules ( 'email', 'email', 'required|xss_clean' );
		$this->form_validation->set_rules ( 'new_password', 'new_password', 'required|xss_clean' );
		$this->form_validation->set_rules ( 'repeat_password', 'repeat_password', 'required|xss_clean' );
		if ($this->form_validation->run () == FALSE) {
			exit ( 'error' );
		} else {
			echo 'Welcome';
		}
	}
}