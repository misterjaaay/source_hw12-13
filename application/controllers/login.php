<?php
class Login extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('user_model');
		$this->load->view ( 'inc/header' );
		$this->load->model ( 'blog_model' );
		
		$categories = $this->blog_model->get_all_categories ();
		$cat ['categories'] = $categories;
		$this->load->view ( 'inc/menu', $cat );
	}
	function index(){
		$this->load->view('login_view');
		$this->load->view ( 'inc/footer' );
	}
	function login(){
		$this->load->view('login_view');
		$this->load->view ( 'inc/footer' );
	}
	function register(){
		$this->load->view ( 'register_view' );
		$this->load->view ( 'inc/footer' );
	}
	function validate(){
		$this->user_model->validate_login();
		redirect('welcome');
		$this->load->view ( 'inc/footer' );
	}
	function register_form(){
		$this->user_model->register_user();
		$this->load->view ( 'inc/footer' );
	}
}