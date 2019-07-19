<?php  
	defined('BASEPATH') or exit('No direct script access allowed');

	if (! function_exists('follow')) {
		function follow($followed,$follow){
			$ci =& get_instance();
			$data = $ci->U_Model->get_follow($followed,$follow);
			return $data;
		}
	}
	
	function jumlah_follower($id)
	{
		$ci =& get_instance();
		$data = $ci->U_Model->jumlah_follower($id);
		return $data;
	}
	function jumlah_following($id)
	{
		$ci =& get_instance();
		$data = $ci->U_Model->jumlah_following($id);
		return $data;
	}
?>
