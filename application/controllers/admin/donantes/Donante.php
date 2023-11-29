<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donante extends CI_Controller {

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

        $this->load->view('admin/header_view', $dh);
		$this->load->view('admin/donantes/donantes_view');
        $this->load->view('admin/footer_view', $dh);
	}

	public function nuevo_donante()
	{
        $dh['titulo'] = 'Nuevo Donante';

        $this->load->view('admin/header_view', $dh);
		$this->load->view('admin/donantes/nuevo_donante_view');
        $this->load->view('admin/footer_view', $dh);
	}
}
