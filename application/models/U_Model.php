<?php 
 
 defined('BASEPATH') OR exit('No direct script access allowed');

class U_Model extends CI_Model {

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

	function ambil_data()
	{
		$data = $this->db->query("SELECT * from user");
		return $data->result();
	}
	function ambil_data_member()
	{
		$id = $this->session->userdata('id');
		$data = $this->db->query("SELECT * from user where role_id in (3,4) and id != $id");
		return $data->result();
	}
	function follow($data)
	{
		$this->db->insert('follow', $data);
	}
	function unfollow($data)
	{
		$this->db->where($data);
		$this->db->delete('follow');

	}
	function jumlah_follower($id){
		$data = $this->db->query("select count(*) as cok from follow where id_followed = $id");
		return $data->row()->cok;
	}
	function jumlah_following($id){
		$data = $this->db->query("select count(*) as cok from follow where id_follow = $id");
		return $data->row()->cok;
	}
	function get_follow($followed,$follow){
		$data = $this->db->query("select count(*) as cok from follow where id_followed = $followed and id_follow = $follow");
		return $data->row()->cok;
	}
	function get_data($id)
	{
		$data = $this->db->query("SELECT * from user where id=$id");
		return $data->result();
	}
	public function save_data($iduser,$data,$table)
    {       
        $this->db->where($iduser);
        $this->db->update($table,$data);
    }
    public function save_gambar($id,$data,$table)
    {
    	$this->db->where($id);
        $this->db->update($table,$data);
    }
    public function savepassword()
	{
	  	$pass = password_hash($this->input->post('new'), PASSWORD_DEFAULT);
	  	$data = array (
	   	'usr_password' => $pass
	   	);
	  	$this->db->where('id', $this->session->userdata('id'));
	  	$this->db->update('user', $data);
	}
	public function cek_old($new,$id)
	{
		
		$pass_lama = $this->db->get_where('user',['id' => $id])->row()->password;
	   	if(password_verify($new, $pass_lama) == true){
	   		return true;
	   	}else{
	   		return false;
	   	}
	}
	public function insertpost($data)
	{
		$this->db->insert('post', $data);
	}
	public function get_post($id)
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->order_by('id_post', 'DESC');
		$this->db->join('user', 'post.id_user = user.id' );
		$this->db->where('post.id_user', $this->session->userdata('id'));
		$data = $this->db->get();
		
		return $data->result();
	}
	public function insertcomment($data)
	{
		$this->db->insert('comment', $data);
	}
	public function get_comment($id)
	{
		$this->db->select('*');
		$this->db->from('comment');
		$this->db->join('user', 'comment.id_user = user.id');
		$data = $this->db->get();
		
		return $data->result();
	}
}