<?php

/*
clientList
Purpose: Selects the Client
Description: This code selects the clients name and displays it in a lisbox for selection
Author: Michelle Bolger
Date: March 2020
*/

	include 'connect.php';
	$sql = "SELECT Name,ClientID FROM Client where NumOfCourses > 0";
	if(!$result = mysqli_query($con,$sql)){
		die('Error in querying the database' . mysqli_error($con));
	}
	echo "<select name = 'clientList' id = 'clientList' onclick = 'populate()'>";
	
	while($row = mysqli_fetch_array($result)){
		$name = $row['Name'];
		$id = $row['ClientID'];
		$allText = "$id";
		echo "<option value = '$allText'>$name</option>";
	}
	echo "</select>";
?>