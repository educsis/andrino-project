<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nuevo_donador extends CI_Controller {

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
        $dh['titulo'] = 'Donadores';

		if(isset($_POST['guardar'])){
			echo "<pre>";
			print_r($_POST);
			die();
		}

        $this->load->view('admin/header_view', $dh);
		$this->load->view('admin/donadores/nuevo_donador_view');
        $this->load->view('admin/footer_view', $dh);
	}
}
