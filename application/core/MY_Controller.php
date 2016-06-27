<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

	protected $data = array();
	public $web_title;
	public $page_title;

	function __construct(){
		parent::__construct();
		$this->load->model(array('mdl_users','mdl_menu','mdl_pages','mdl_posts'));	
		$this->web_title = "Website";
		$this->page_title = "Page";
	}

	/* 
		u/ admin 
	*/

	protected function render_admin($the_view = NULL){
		$this->data['contentpage'] = (is_null($the_view)) ? '' : $this->load->view($the_view,$this->data, TRUE);
		$this->load->view('admin/template', $this->data);
	}

	protected function render($the_view = NULL){
		$this->data['contentpage'] = (is_null($the_view)) ? '' : $this->load->view($the_view,$this->data, TRUE);
		$this->load->view('public/layouts', $this->data);
	}

}