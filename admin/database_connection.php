<?php
	$servername = "localhost";
	$user = "root";
	$password = "pavel2908";
	$dbname = "bdc-decor";
	$conn=new mysqli($servername, $user, $password, $dbname);
	$conn->set_charset("utf8");
	if($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);
	}
?>