<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista_donadores extends CI_Controller {

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

        $this->load->view('admin/header_view', $dh);
		$this->load->view('admin/donadores/lista_donadores_view');
        $this->load->view('admin/footer_view', $dh);
	}
}
