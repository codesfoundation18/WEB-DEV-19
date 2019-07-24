<?php 

// set default time zone
date_default_timezone_set('UTC');


// start session
session_start();

// establish database connection 
$host = 'localhost'; 
$username = 'root'; // default
$password = '';// default
$dbName = 'pic_db';

$con = mysqli_connect($host, $username, $password, $dbName);

if(mysqli_connect_errno()) 
{
	die('Failed to connect to database: '. mysqli_connect_error());
} else {
	//echo 'connected';
}



