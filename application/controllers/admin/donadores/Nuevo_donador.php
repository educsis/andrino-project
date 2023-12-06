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

			$now = date('Y-m-d H:i:s');

			// echo "<pre>";
			// print_r($_POST);
			// die();

			extract($_POST);

			$dob = date('Y-m-d', strtotime($dia . '-' . $mes . '-' . $anio));

			$array = array(
				'tipo_donacion'	=>	$tipo_donacion,
				'pasaporte'		=>	$pasaporte,
				'nombre'		=>	$nombre,
				'genero'		=>	$genero,
				'etnico'		=>	$etnico,
				'prof'			=>	$prof,
				'comunidad'		=>	$comunidad,
				'dob'			=>	$dob,
				'nacionalidad'	=>	$nacionalidad,
				'direccion'		=>	$direccion,
				'telefono'		=>	$telefono,
				'civil'			=>	$civil,
				'tiposangre'	=>	$tiposangre,
				'peso'			=>	$peso,
				'temp'			=>	$temp,
				'presion'		=>	$presion,
				'pulso'			=>	$pulso,
				'hemoglobina'	=>	$hemoglobina,
				'created_at'	=>	$now
			);

			$this->db->insert('donadores', $array);

			redirect(base_url('admin/donadores/lista_donadores'));
		}

        $this->load->view('admin/header_view', $dh);
		$this->load->view('admin/donadores/nuevo_donador_view');
        $this->load->view('admin/footer_view', $dh);
	}
}
