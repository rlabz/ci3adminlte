<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	function __construct(){
		parent::__construct();

	}
	public function index()
	{
		$this->render_admin('admin/_index');
	}

}

/*
	end of :
	class : Admin
	path controller/admin.php
	@author : _rizan
*/