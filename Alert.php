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

		$alert = '';
		if($CI->session->flashdata('alert_success')){
			$alert .= "<div class='alert alert-success'>";
			$alert .= $CI->session->flashdata('alert_success');
			$alert .= "<a class='close' data-dismiss='alert' href='#'>&times;</a></div>";
		}
		if($CI->session->flashdata('alert_error')){
			$alert .= "<div class='alert alert-danger'>";
			$alert .= $CI->session->flashdata('alert_error');
			$alert .= "<a class='close' data-dismiss='alert' href='#'>&times;</a></div>";
		}
		if($CI->form_validation->error_array()){
			$alert .= "<div class='alert alert-danger'>";
			$alert .= strtoupper($CI->form_validation->error_array());
			$alert .= "<a class='close' data-dismiss='alert' href='#'>&times;</a></div>";
		}
		return $alert;
	}

	function show_success($msg='')
	{
		$CI =& get_instance();
		$alert = '';
		if($msg!=''){
			$alert .= "<div class='alert alert-success'>";
			$alert .= $msg;
			$alert .= "<a class='close' data-dismiss='alert' href='#'>&times;</a></div>";
		}
		return $alert;
	}

	function show_error($msg='')
	{
		$CI =& get_instance();
		$alert = '';
		if($msg!=''){
			$alert .= "<div class='alert alert-danger'>";
			$alert .= $msg;
			$alert .= "<a class='close' data-dismiss='alert' href='#'>&times;</a></div>";
		}
		return $alert;
	}

}

/* End of file Alert.php */
/* Location: ./application/libraries/Alert.php */
