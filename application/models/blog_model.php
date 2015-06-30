<?php
class Blog_model extends CI_Model {

	public $title;
	public $content;
	public $date;

	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
	}

	public function get_last_entries($n)
	{
		$query = $this->db->get('post', $n);
		return $query->result_array();
	}
	public function get_categories($n)
	{
		$query = $this->db->get('category', $n);
		return $query->result_array();
	}
	public function get_all_categories()
	{
		$query = $this->db->get('category');
		return $query->result_array();
	}
	public function insert_entry()
	{
		$this->title    = $_POST['title']; // please read the below note
		$this->content  = $_POST['text'];
		$this->date     = time();

		$this->db->insert('post', $this);
	}

	public function update_entry()
	{
		$this->title    = $_POST['title'];
		$this->content  = $_POST['text'];
		$this->date     = time();

		$this->db->update('post', $this, array('id' => $_POST['id']));
	}

}