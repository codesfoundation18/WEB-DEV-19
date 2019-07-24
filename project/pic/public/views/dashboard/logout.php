<?php 
require_once '../../../core/config.php';
//session_start();
// $_SESSION['id'] = 'will';
//print_r($_SESSION);die();
if(isset($_SESSION['admin_data'])) {
	//
	 
	 //session_destroy(); // this removes all session varaibles
	 unset($_SESSION['admin_data']) ;// removes a specific session variable

	 // take back to login page
	 header('Location: index.php');
}