<?php 

/**
 * Route main server requests here
 */

if(isset($_GET['page']) && ($_GET['page'] == 'admin')) 
{
	// take user to admin login area 
	header('Location: public/views/dashboard/index.php');
}
else {

	// take user to the site home page
	header('Location:public/index.php');
}