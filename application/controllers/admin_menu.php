<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_menu extends CI_Controller {

	public function topmenu()
	{
		if(isset($_POST["username"],$_POST["password"])){
			$username = $_POST["username"];
			$password = $_POST["password"];

			$query = $this->db->query("SELECT `username` FROM `ci_admin_users` WHERE `username`='".mysql_real_escape_string($username)."' AND `password`='".md5($password)."' ");

			if($query->num_rows() > 0)
			{
				$newdata = array(
                  'username'  => $username,
                  'password'     => $password,
                  'logged_time' => time()
           		);
				$this->session->set_userdata($newdata);
			}else{
				$newdata = array(
                  'username'  => "",
                  'password'     => "",
                  'logged_time' => time()
           		);
				$this->session->set_userdata($newdata);
			}
		}
		$all_userdata = $this->session->all_userdata();
		// load menu table
		$this->load->model("module_menu");
		$module_menu = $this->module_menu->table();

		$data = array(
			"all_userdata" => $all_userdata, 
			"module_menu" => $module_menu 
		);
		
		$this->load->view('view_admin_menu', $data);
	}

	public function mainmenu()
	{
		if(isset($_POST["username"],$_POST["password"])){
			$username = $_POST["username"];
			$password = $_POST["password"];

			$query = $this->db->query("SELECT `username` FROM `ci_admin_users` WHERE `username`='".mysql_real_escape_string($username)."' AND `password`='".md5($password)."' ");

			if($query->num_rows() > 0)
			{
				$newdata = array(
                  'username'  => $username,
                  'password'     => $password,
                  'logged_time' => time()
           		);
				$this->session->set_userdata($newdata);
			}else{
				$newdata = array(
                  'username'  => "",
                  'password'     => "",
                  'logged_time' => time()
           		);
				$this->session->set_userdata($newdata);
			}
		}
		$all_userdata = $this->session->all_userdata();
		// load menu table
		$this->load->model("module_menu");
		$module_menu = $this->module_menu->table();

		$data = array(
			"all_userdata" => $all_userdata, 
			"module_menu" => $module_menu 
		);
		
		$this->load->view('view_admin_menu', $data);
	}

	public function additionalmenu()
	{
		if(isset($_POST["username"],$_POST["password"])){
			$username = $_POST["username"];
			$password = $_POST["password"];

			$query = $this->db->query("SELECT `username` FROM `ci_admin_users` WHERE `username`='".mysql_real_escape_string($username)."' AND `password`='".md5($password)."' ");

			if($query->num_rows() > 0)
			{
				$newdata = array(
                  'username'  => $username,
                  'password'     => $password,
                  'logged_time' => time()
           		);
				$this->session->set_userdata($newdata);
			}else{
				$newdata = array(
                  'username'  => "",
                  'password'     => "",
                  'logged_time' => time()
           		);
				$this->session->set_userdata($newdata);
			}
		}
		$all_userdata = $this->session->all_userdata();
		// load menu table
		$this->load->model("module_menu");
		$module_menu = $this->module_menu->table();

		$data = array(
			"all_userdata" => $all_userdata, 
			"module_menu" => $module_menu 
		);
		
		$this->load->view('view_admin_menu', $data);
	}

	public function managmentmenu()
	{
		if(isset($_POST["username"],$_POST["password"])){
			$username = $_POST["username"];
			$password = $_POST["password"];

			$query = $this->db->query("SELECT `username` FROM `ci_admin_users` WHERE `username`='".mysql_real_escape_string($username)."' AND `password`='".md5($password)."' ");

			if($query->num_rows() > 0)
			{
				$newdata = array(
                  'username'  => $username,
                  'password'     => $password,
                  'logged_time' => time()
           		);
				$this->session->set_userdata($newdata);
			}else{
				$newdata = array(
                  'username'  => "",
                  'password'     => "",
                  'logged_time' => time()
           		);
				$this->session->set_userdata($newdata);
			}
		}
		$all_userdata = $this->session->all_userdata();
		// load menu table
		$this->load->model("module_menu");
		$module_menu = $this->module_menu->table();

		$data = array(
			"all_userdata" => $all_userdata, 
			"module_menu" => $module_menu 
		);
		
		$this->load->view('view_admin_menu', $data);
	}
}