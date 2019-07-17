<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
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
	public function getuserdata($id)
	{	
		$data['user'] = $this->U_Model->get_data($id);
		$this->load->view('templates/profile_header.php');
		$this->load->view('templates/profile_sidebar.php');
		$this->load->view('settingprofile',$data);
		$this->load->view('templates/profile_footer.php');
	}
	public function saveuserdata()
	{
	 	$iduser = $this->input->post('id_user');
    	$username = $this->input->post('username');
    	$namauser = $this->input->post('nama');
     	$email = $this->input->post('email');
     	$biography = $this->input->post('biography');
     	$lokasi = $this->input->post('location');
     	$jeniskelamin = $this->input->post('gender');
     	$ulangtahun = $this->input->post('bday');
     	$telpon = $this->input->post('phone');
    	$alamat = $this->input->post('address');
   
     $data = array(
     	'id' => $iduser,
    	'username' => $username,
    	'name' => $namauser,
    	'email' => $email,
    	'biography' => $biography,
        'location' => $lokasi,
        'gender' => $jeniskelamin,
        'birthday' => $ulangtahun,
        'phone' => $telpon,
      	'address'=> $alamat
     );
   	
     $where = array(
     	'id' => $iduser
     );

     $this->U_Model->save_data($where,$data,'user');
     redirect('profile/showuserdata');
	}
	public function showuserdata()
	{
		$id = $this->session->userdata('id');
		$data['user'] = $this->U_Model->get_data($id);
		$data['post'] = $this->U_Model->get_post($id);
		$data['comment'] = $this->U_Model->get_comment($id);
		$this->load->view('templates/profile_header.php');
		$this->load->view('templates/profile_sidebar.php');
		$this->load->view('myprofile',$data);
		$this->load->view('templates/profile_footer.php');
	}
	public function uploadgambar()
	{
		if($this->input->post('submit')) {
			# code...
			$id = $this->session->userdata('id');
			$config['upload_path'] = 'assets/images/profile/';
		    $config['allowed_types'] = 'jpg|png|jpeg';
		    $config['max_size']  = '2048';
		    $config['remove_space'] = TRUE;
		  	

		    $this->load->library('upload', $config); // Load konfigurasi uploadnya
		    if($this->upload->do_upload('gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
		    	$name_file = $this->upload->data("file_name");
		    	$data = array (
		    		'image' => $name_file 
		    	);
		    	$where = array(
			     	'id' => $id
			     );
		       $this->U_Model->save_gambar($where,$data,'user');
		     	redirect('profile/showuserdata');
		    }else{
		      echo "string";
		     
		    }
	    }
	}
	public function save_password()
	{ 
			$this->load->library('form_validation');
			$this->form_validation->set_rules('new','New','required|alpha_numeric|min_length[8]');
		  	$this->form_validation->set_rules('re_new', 'Retype New', 'required|matches[new]');
		  	$this->form_validation->set_rules('cpassword', 'Current Password', 'required|alpha_numeric');
		  	$new = $this->input->post('cpassword');
		  	$id = $this->session->userdata('id');

		    if($this->form_validation->run() == FALSE)
			{
				$this->session->set_flashdata('type','change_password');
			   	$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> 
				Cek Kembali Password Anda</div>');
				redirect('profile/getuserdata/'.$id);
			}
			else{
				
				$cek_old = $this->U_Model->cek_old($new,$id);
				if($cek_old == false){
			   	
			   
			   		$this->session->set_flashdata('type','change_password');
				   	$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> 
					Password Lama Anda Salah</div>');
					redirect('profile/getuserdata/'.$id);
			    
				}
				else{
				   $newpassword = $this->input->post('new');

				   $data = array(
     				'password'=>password_hash($newpassword, PASSWORD_DEFAULT)
     				);
				   $where = array(
				     	'id' => $id
				     );

				    $this->U_Model->save_data($where,$data,'user');
				    $this->session->set_flashdata('type','change_password');
				   	$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> 
					Password Anda Berhasil Diubah</div>');
					redirect('profile/getuserdata/'.$id);
			   	}//end if valid_user
			}
	}
}
