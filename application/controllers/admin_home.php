<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_home extends CI_Controller {

	public function index()
	{
		$this->load->view('view_admin_home');
	}

}