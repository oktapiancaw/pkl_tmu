<?php
function list_type_question($filter = NULL){
	$CI =& get_instance();
	$CI->load->model('question_type_m');
	
	if ($filter != NULL) {		
		$query = $CI->question_type_m->get_filtered($filter);
	}
	else {
		$query = $CI->question_type_m->get_all('id','ASC');	
	}
	
	if ($query->num_rows() > 0) {
		return $query->result();
	}
	else {
		return NULL;
	}
}

function list_user($filter = NULL){
	$CI =& get_instance();
	$CI->load->model('user_m');
	
	if ($filter != NULL) {		
		$query = $CI->user_m->get_filtered($filter);
	}
	else {
		$query = $CI->user_m->get_all();	
	}
	
	if ($query->num_rows() > 0) {
		return $query->result();
	}
	else {
		return NULL;
	}
}
function list_author($filter = NULL){
	$CI =& get_instance();
	$CI->load->model('user_m');
	
	$query = $CI->user_m->get_user_list();	
	
	
	if ($query->num_rows() > 0) {
		return $query->result();
	}
	else {
		return NULL;
	}
}

?>