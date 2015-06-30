<?php
class Blog extends CI_Controller {
	function __construct() {
		parent::__construct ();
	}
	public function index() {
		$this->load->view ( 'inc/header' );
		$this->load->model ( 'blog_model' );
		
		$categories = $this->blog_model->get_all_categories ();
		$cat ['categories'] = $categories;
		$this->load->view ( 'inc/menu', $cat );
		
		$posts = $this->blog_model->get_last_entries ( 4 );
		$data ['posts'] = $posts;
		$this->load->view ( 'inc/content', $data );
		
		$this->load->view ( 'inc/footer' );
	}
}