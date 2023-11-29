<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donante extends CI_Controller {

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
