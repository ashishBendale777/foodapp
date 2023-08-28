<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'fooddatabase';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
else
{
	echo "Connected";
}

?>

<!-- Developed By:Ashish Bendale
Contact:+91 8888813277, +91 7620979777 -->