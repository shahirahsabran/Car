<?php
$user = "root" ;
$password = "";
$host = "localhost";
$database = "car_db";

$conn = mysqli_connect ($host, $user, $password, $database);

if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>