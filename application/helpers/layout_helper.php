<?php 
/*
@desc:it's used for displaying common layout
*/
function _commonLayout($filename=null,$data=null){
	
	    $ci =& get_instance();
		$ci->load->view('common/header.php');
		$ci->load->view('common/sidebar.php');
		$ci->load->view($filename,$data);
		$ci->load->view('common/footer.php');
	
}
/*
@desc:it's used for displaying home page
*/
function _homeLayout($filename=null,$data=null){
	
	    $ci =& get_instance();
		$ci->load->view('common/home_header.php');
		$ci->load->view($filename,$data);
		$ci->load->view('common/home_footer.php');
	
}

?>