<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_home extends CI_Controller {

	public function index()
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

		$data = array(
			"all_userdata" => $all_userdata
		);
		
		$this->load->view('view_admin_home', $data);
	}

	public function logout()
	{
		$newdata = array(
                  'username'  => "",
                  'password'     => "",
                  'logged_time' => time()
          		);
		$this->session->set_userdata($newdata);

		$all_userdata = $this->session->all_userdata();

		$data = array(
			"all_userdata" => $all_userdata
		);
		if(isset($_POST["username"],$_POST["password"])){
			$this->load->helper('url');
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
				redirect("/4admin");
			}
		}
		$this->load->view('view_admin_home', $data);
	}

}