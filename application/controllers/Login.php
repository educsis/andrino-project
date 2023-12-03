<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
  	{
		parent::__construct();
    	session_start();

		if(isset($_SESSION['logged'])){
			// echo $_SESSION['logged'];
			// print_r($_SESSION);
			// die('not set');
        	redirect(base_url());
   		}
  	}

	public function index()
	{
		$d['msg'] = '';

		if(isset($_POST['login'])){
			$username = $_POST['username'];
			$password = sha1($_POST['password']);

			$check = $this->model->check_user($username, $password);

			// echo "<pre>";
			// print_r($check);
			// die();

			if(count($check) > 0){
				$_SESSION['logged'] = true;
				$_SESSION['nombre'] = $check[0]['nombre'];
				$_SESSION['email'] = $check[0]['email'];
				$_SESSION['uid'] = $check[0]['idusuario'];

				redirect(base_url('admin/dashboard'));
			}else{
				$d['msg'] = 'error';
			}
		}
		$this->load->view('login_view', $d);
	}
}
