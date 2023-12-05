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

		if(isset($_POST['rechazar'])){
			$razon = $_POST['razon'];
			$idrechazado = $_POST['idrechazado'];

			$array = array(
				'comentarios'	=>	$razon,
				'status'		=>	3
			);

			$this->db->where('iddonadores', $idrechazado);
			$this->db->update('donadores', $array);
		}

        $this->load->view('admin/header_view', $dh);
		$this->load->view('admin/donadores/lista_donadores_view');
        $this->load->view('admin/footer_view', $dh);
	}
}
