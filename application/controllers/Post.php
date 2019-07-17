<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('U_Model');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
public function post()
	{
		$this->load->view('templates/profile_header.php');
		$this->load->view('templates/profile_sidebar.php');
		$this->load->view('post');
		$this->load->view('templates/profile_footer.php');
	}
	public function newpost()
	{
		if ($this->input->post('submit') != null) {

			$config['upload_path'] = 'assets/images/post/';
		    $config['allowed_types'] = 'jpg|png|jpeg';
		    $config['max_size']  = '2048';
		    $config['remove_space'] = TRUE;

		    $this->load->library('upload', $config);
		    if($this->upload->do_upload('gambarpost')){
			    $name_file = $this->upload->data("file_name");

				$data = array(
	     		'content' => $this->input->post('content'),
	     		'id_user' => $this->session->userdata('id'),
	     		'created_at' => date('Y-m-d h:i:s'),
	     		'file' => $name_file
	     		);

	     		$this->U_Model->insertpost($data);

	     		redirect('profile/showuserdata');
	     	}
	     	else{
	     		$data = array(
	     		'content' => $this->input->post('content'),
	     		'id_user' => $this->session->userdata('id'),
	     		'created_at' => date('Y-m-d h:i:s')
	     		);

	     		$this->U_Model->insertpost($data);

	     		redirect('profile/showuserdata');
	     	}
		}
	}
	public function newcomment()
	{
			$data = array(
	     		'comment' => $this->input->post('comment'),
	     		'id_post' => $this->input->post('id_post'),
	     		'id_user' => $this->session->userdata('id'),
	     		'created_at' => date('Y-m-d h:i:s'),
	     		);

			$this->U_Model->insertcomment($data);

	     		redirect('profile/showuserdata');
	}
}