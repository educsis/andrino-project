<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
        $dh['titulo'] = 'Inicio';

        $this->load->view('admin/header_view', $dh);
		$this->load->view('admin/dashboard_view');
        $this->load->view('admin/footer_view', $dh);
	}
}
