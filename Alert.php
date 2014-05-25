<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alert {

	function set_success($message = 'success'){
		$CI =& get_instance();
		$CI->session->set_flashdata('alert_success',strtoupper($message));
	}
	function set_error($message = 'error'){
		$CI =& get_instance();
		$CI->session->set_flashdata('alert_error',strtoupper($message));
	}

	function show(){
		$CI =& get_instance();
		if($CI->session->flashdata('alert_success')){
			echo "<div class='alert alert-success'>";
			echo $CI->session->flashdata('alert_success');
			echo "<a class='close' data-dismiss='alert' href='#'>&times;</a></div>";
		}
		if($CI->session->flashdata('alert_error')){
			echo "<div class='alert alert-danger'>";
			echo $CI->session->flashdata('alert_error');
			echo "<a class='close' data-dismiss='alert' href='#'>&times;</a></div>";
		}
		if($CI->form_validation->error_array()){
			echo "<div class='alert alert-danger'>";
			echo strtoupper($CI->form_validation->error_array());
			echo "<a class='close' data-dismiss='alert' href='#'>&times;</a></div>";
		}
	}

}

/* End of file Alert.php */
/* Location: ./application/libraries/Alert.php */
