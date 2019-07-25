<?php
require_once '../../../core/config.php';

//session_destroy(); die(print_r($_SESSION, TRUE));
$errorMsg = '';

if(isset($_POST['login'])) 
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$password = md5($password);// hash password

	$sql = "SELECT * FROM `admin` WHERE `username`= '$username' AND `password` = '$password'";
	// run query
	$queryResult = mysqli_query($con, $sql);

	$numRows = mysqli_num_rows($queryResult);

	if($numRows == 1) {
		// got the right user
		$row = mysqli_fetch_assoc($queryResult); // fetch the users' data

		$_SESSION['admin_data'] = $row; // store a session token for the logged in user

		//die(print_r($_SESSION));

		if(isset($_SESSION['admin_data'])) {

			// redirect admin to the dashboard
			header('Location: home.php');
		} 

	}
	else {
			// error 
			$errorMsg = '<h3>Sorry, incorrect login credentials.<br> Please try again</h3>';
		}

}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="60">
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="../../assets/css/w3.css">
<link href="../../assets/css/admin_login.css" rel="stylesheet" type="text/css">
</head>

<body class="body">
	
	<h1><center><strong> KNUTSFORD UNIVERSITY EXAMINATION SYSTEM</strong></center></h1>

	<center>
		<div class="container">
			<header class="title w3-card w3-padding">
				<h1>
					Login System
					<a class="w3-text-white w3-left w3-opacity w3-btn w3-hover-white w3-medium w3-round-large" href="../../index.php">HOME</a>
				</h1> 

			</header>
			
			<div class="w3-row">
				<div class="w3-quarter w3-container">
					<br><br>
					<img src="../../assets/images/system/logo.png" alt="Logo" width="90px" height="100px"> 
				</div> 

				<section id="form" class="w3-threequarter w3-container">
					<!-- error reporting -->
					 <div>
					 	 <?php echo $errorMsg; ?>
					 </div>
					 <form class="form" action ="index.php" method="post">
			
						<b>Username:</b> 
						 <input type="text" name="username" placeholder="Enter Username"><br><br>
						
						<b>Password: </b>
						<input type="password" name="password" placeholder="Enter Password" ><br>
						<center>
							<br>
							<button type="submit" name="login">Login</button>
						</center>
					</form>
				</section>
			</div>
			<div class="w3-center">
				<hr>
                Today is <?php echo date("l d/m/Y")?><br> Time is: <?php echo date("h:i:sa")?>
			</div>
			<footer class="footer">CalNET System &copy; 2019</footer>
		</div>

	</center>


	</div>
</body>
</html>
