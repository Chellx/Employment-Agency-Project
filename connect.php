<?php
/*
Connection to Database
Purpose: To connect to the database
Description: This code establishes a connection to the employment agency databse
Date: February 2020
*/

	
	$hostname = "localhost";
	$username = "recruitment";
	$password = "T3mp0rary";
	$dbname = "EmploymentAgency";
	
	$con = mysqli_connect($hostname,$username,$password,$dbname);
	
	if(!$con){
		die ("Falied to connect to MySQL " . mysqli_connect_error());
	}
?>	