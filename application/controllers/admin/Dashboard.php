<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
  	{
		parent::__construct();
    	session_start();
		// phpinfo();
		if(!isset($_SESSION['logged'])){
			// echo $_SESSION['logged'];
			// print_r($_SESSION);
			// die('not set');
        	redirect(base_url());
   		}
  	}

	public function index()
	{
        $dh['titulo'] = 'Inicio';

        // $this->load->view('admin/header_view', $dh);
		$this->load->view('admin/dashboard_view');
        // $this->load->view('admin/footer_view', $dh);
	}

	public function logout()
	{
        session_destroy();
		redirect(base_url());
	}
}
