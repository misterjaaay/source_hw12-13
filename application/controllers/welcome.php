<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		
		$this->load->view ( 'inc/header' );
		$this->load->model ( 'blog_model' );
		
		$categories = $this->blog_model->get_all_categories ();
		$cat ['categories'] = $categories;
		$this->load->view ( 'inc/menu', $cat );
		$this->load->view('welcome');
		
		$this->load->view ( 'inc/footer' );
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */