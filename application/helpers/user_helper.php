<?php  
	defined('BASEPATH') or exit('No direct script access allowed');

	if (! function_exists('photo_user')) {
		function photo_user($id){
			$ci =& get_instance();
			$data = $ci->U_Model->get_photo($id);
			return $data;
		}
	}
?>