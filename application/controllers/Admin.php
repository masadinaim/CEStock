<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{

		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

		echo 'Halaman Admin';
	}
}

