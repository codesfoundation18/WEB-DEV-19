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
		$row = mysqli_fetch_assoc($queryResult); // fetch the users data

		$_SESSION['admin_data'] = $row;

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
<link href="../../assets/css/admin_login.css" rel="stylesheet" type="text/css">
</head>

<body class="body">
	
	<h1><center><strong> KNUTSFORD UNIVERSITY EXAMINATION SYSTEM</strong></center></h1>
	<center>
			<div class="container">
				
				<header class="title"><h1>Login System</h1></header>
			
				<section>
					<!-- error reporting -->
					 <div>
					 	 <?php echo $errorMsg; ?>
					 </div>
					<form class="form" action ="index.php" method="post">
				
							<b>Username:</b> <input type="text" name="username" placeholder="Enter Username"><br><br>
							
							<b>Password: </b><input type="password" name="password" placeholder="Enter Password" ><br>
							<center>
								<br>
								<button type="submit" name="login">Login</button>
								
                                <hr>
                                 
                                Today is <?php echo date("l d/m/Y")?><br> Time is: <?php echo date("h:i:sa")?>
							</center>
					</form>
				</section>
							<footer class="footer">CalNET System &copy; 2019</footer>
						</div>
	</center>

			<div class="logo">
		<img src="../../assets/images/system/logo.png" alt="Logo" width="100px" height="100px"> </div> 

	</div>
</body>
</html>
