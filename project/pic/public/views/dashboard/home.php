<?php 
require_once '../../../core/config.php';

	// authenticate users
	if(isset($_SESSION['admin_data'])) 
	{

	 $adminData = $_SESSION['admin_data'];
	} 
	else {
		header('Location:index.php?error');// prevent unauthorized users
	}

	//
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="assets/css/w3.css">
</head>
<body>
	<h2 class="w3-card-4 w3-red w3-padding">
	Welcome <?php echo $adminData['name']; ?> to the dashboard. <br> 
	Nice to have you back


	</h2>

	<p>
		<a href="logout.php">Logout</a>
	</p>
</body>
</html>