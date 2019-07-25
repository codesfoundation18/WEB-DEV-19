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
	<link rel="stylesheet" type="text/css" href="../../assets/css/w3.css">
</head>
<body>
	<div class="w3-row">
		<h2 class="w3-margin w3-card-4 w3-blue w3-padding-64 w3-round-large w3-opacity">
			<span class="w3-inline-block w3-margin-left">
				Welcome <?php echo ucfirst($adminData['name']); ?> to the dashboard.  
				Nice to have you back!
			</span>
			<a class="w3-right w3-button w3-margin-right" href="logout.php">Logout</a>
		</h2>
	</div>
</body>
</html>